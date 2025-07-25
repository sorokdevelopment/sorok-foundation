<?php

namespace App\Services;

use App\Models\Payment;
use App\Models\Champion;
use Illuminate\Support\Str;
use App\Enums\PaymentStatus;
use App\Enums\ChampionStatus;
use App\Mail\NewChampionMail;
use App\Enums\PaymentPlanType;
use App\Enums\ChampionMembership;
use App\Services\PisopayServices;
use App\Mail\ChampionWelcomeEmail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Container\Attributes\DB as AttributesDB;

class ChampionPaymentServices
{

    public function __construct(public PisopayServices $pisopay) {}




    /**
     * 
     * @param array $championInfo array of session champion
     * @param $membership 
     * @param float $price 
     * 
     * @return string
     */

    public function submit(array $championInfo, ChampionMembership $membership, float $price, PaymentPlanType $planType, string $sessionToken): string
    {       
        return DB::transaction(function () use ($championInfo, $membership, $price, $planType, $sessionToken)
        {
            // dd($championInfo, $membership, $price, $planType, $sessionToken);
            // $champion = Champion::create([
            //     'first_name'     => $championInfo['first_name'],
            //     'last_name'      => $championInfo['last_name'],
            //     'email'          => $championInfo['email'],
            //     'contact_number' => $championInfo['contact_number'],
            //     'membership'     => $membership->value,
            //     'status'         => ChampionStatus::INACTIVE->value,
            // ]);
            $merchantTraceNo = "sok-" . time() . "-" . rand(1000, 9999);
            $sessionId = $this->pisopay->sessionGenerate();

            $postData = [
                'session_id' => $sessionId,
                'amount' => $price,
                'delivery_fees' => 0,
                'processor_name' => 'NA',
                'customer_name' => $championInfo['first_name'] . ' ' . $championInfo['last_name'],
                'customer_email' => $championInfo['email'],
                'customer_phone' => $championInfo['contact_number'],
                'customer_address' => 'PH',
                'merchant_trace_no' => $merchantTraceNo,
                'merchant_callback_url' => route('pisopay-callback'),
                'callback_url' => route('payment.success'),
                'ip_address' => request()->ip(),
                'expiry_date' => now()->addDay()->format('Y-m-d H:i:s')
            ];
        

            $tokenData = $this->pisopay->generateToken([
                [
                    "name" => $membership->name, 
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
                'meta_data' => [
                    'session_token' => $sessionToken,
                    'user_email' => $championInfo['email'],
                    'membership' => $membership->value
                ]
            ]);


            // Payment::create([
            //     'champion_id' => $champion->id,
            //     'amount' => $price,
            //     'trace_no' => $merchantTraceNo,
            //     'plan_type' => $planType->value,
            //     'status' => PaymentStatus::PENDING->value,
            // ]);

                        
            return $decoded['data']['url'];
        });
           
    }





    public function submitRecurring(Champion $champion, string $membership, float $price, string $plan_type, string $traceNo): string
    {
        return DB::transaction(function () use ($champion, $membership, $price, $plan_type, $traceNo) {

            $sessionId = $this->pisopay->sessionGenerate();

            $postData = [
                'session_id' => $sessionId,
                'amount' => $price,
                'delivery_fees' => 0,
                'processor_name' => 'NA',
                'customer_name' => $champion->first_name . ' ' . $champion->last_name,
                'customer_email' => $champion->email,
                'customer_phone' => $champion->contact_number,
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
                'champion_id' => $champion->id,
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