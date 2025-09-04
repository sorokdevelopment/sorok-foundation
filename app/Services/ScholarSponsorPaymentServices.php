<?php

namespace App\Services;

use App\Models\Payment;
use App\Enums\PaymentStatus;
use App\Enums\PaymentPlanType;
use App\Models\ScholarSponsor;
use App\Services\PisopayServices;
use Illuminate\Support\Facades\DB;
use App\Contracts\PaymentInterface;
use Illuminate\Support\Facades\Log;
use App\Enums\ScholarSponsorMembership;


class ScholarSponsorPaymentServices implements PaymentInterface
{
    public function __construct(public PisopayServices $pisopay) {}


    
    /**
     * 
     * @param array $scholar_sponsorInfo array of session champion
     * @param $membership 
     * @param float $price 
     * @param PaymentPlanType $planType
     * 
     * @return string
     */

    public function submit(array $sponsorInfo, $membership, float $price, PaymentPlanType $planType): string
    {
        return DB::transaction(function () use ($sponsorInfo, $membership, $price, $planType)
        {
            $merchantTraceNo = "sok-" . time() . "-" . rand(1000, 9999);
            $sessionId = $this->pisopay->sessionGenerate();

            $postData = [
                'session_id' => $sessionId,
                'amount' => $price,
                'delivery_fees' => 0,
                'processor_name' => 'NA',
                'customer_name' => $sponsorInfo['first_name'] . ' ' . $sponsorInfo['last_name'],
                'customer_email' => $sponsorInfo['email'],
                'customer_phone' => $sponsorInfo['contact_number'],
                'customer_address' => 'PH',
                'merchant_trace_no' => $merchantTraceNo,
                'merchant_callback_url' => route('sponsor-pisopay-callback'),
                'callback_url' => route('payment.success'),
                'ip_address' => request()->ip(),
                'expiry_date' => now()->addDay()->format('Y-m-d H:i:s')
            ];
        

            $tokenData = $this->pisopay->generateToken([
                [
                    "name" => $membership->name . " Scholarship", 
                    "price" => $price, 
                    "quantity" => 1
                ],
            ], $postData);



            $decoded = json_decode($tokenData, true);

            if (empty($decoded['data']['url'])) {
                throw new \RuntimeException('PisoPay API error: No payment URL returned');
            }

            if (!isset($decoded['data']['url'])) {
                Log::error('PisoPay Error: Invalid checkout URL', $decoded);
                throw new \Exception('Payment gateway error. Please try again.');
            }

            Payment::create([
                'trace_no' => $merchantTraceNo,
                'amount' => $price,
                'plan_type' => $planType,
                'status' => PaymentStatus::PENDING,     
                'month_of_payment' => $sponsorInfo['month_of_payment'] ?? null,       
                'meta_data' => [
                    'first_name' => $sponsorInfo['first_name'],
                    'last_name' => $sponsorInfo['last_name'],
                    'contact_number' => $sponsorInfo['contact_number'],
                    'user_email' => $sponsorInfo['email'],
                    'membership_value' => $membership->value,
                    'membership_name' => $membership->name,
                ],
            ]);


            return $decoded['data']['url'];
        });
    }




    
    public function submitRecurring(ScholarSponsor $scholar_sponsor, string $membership, float $price, string $plan_type, string $traceNo): string
    {
        return DB::transaction(function () use ($scholar_sponsor, $membership, $price, $plan_type, $traceNo) {

            $sessionId = $this->pisopay->sessionGenerate();

            $postData = [
                'session_id' => $sessionId,
                'amount' => $price,
                'delivery_fees' => 0,
                'processor_name' => 'NA',
                'customer_name' => $scholar_sponsor->first_name . ' ' . $scholar_sponsor->last_name,
                'customer_email' => $scholar_sponsor->email,
                'customer_phone' => $scholar_sponsor->contact_number,
                'customer_address' => 'PH',
                'merchant_trace_no' => $traceNo,
                'merchant_callback_url' => route('pisopay-callback'),
                'ip_address' => request()->ip(),
                'expiry_date' => now()->addDay()->format('Y-m-d H:i:s'),
            ];

            $tokenData = $this->pisopay->generateToken([
                [
                    "name" => $membership,
                    "price" => $price,
                    "quantity" => 1
                ],
            ], $postData);

            Payment::create([
                'champion_id' => $scholar_sponsor->id,
                'amount' => $price,
                'trace_no' => $traceNo,
                'plan_type' => $plan_type,
                'status' => PaymentStatus::PENDING->value,
            ]);

            $decoded = json_decode($tokenData, true);

            if (!isset($decoded['data']['url'])) {
                Log::error('PisoPay Recurring Payment Error: Missing URL', [
                    'response' => $decoded,
                ]);
                throw new \Exception('Unable to generate recurring payment link.');
            }

            return $decoded['data']['url'];
        });
    }


    
}