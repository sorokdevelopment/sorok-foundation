<?php

namespace App\Services;

use App\Models\Payment;
use App\Models\Champion;
use Illuminate\Support\Str;
use App\Enums\PaymentStatus;
use App\Services\PisopayServices;
use Illuminate\Container\Attributes\DB as AttributesDB;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\ConnectionException;

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

    public function submit(array $championInfo, $membership, float $price): string
    {       
        return DB::transaction(function () use ($championInfo, $membership, $price)
        {
              $champion = Champion::create([
                'first_name'     => $championInfo['first_name'],
                'last_name'      => $championInfo['last_name'],
                'email'          => $championInfo['email'],
                'contact_number' => $championInfo['contact_number'],
                'membership'     => $membership->value,
            ]);
            $merchantTraceNo = "sok-" . time() . "-" . rand(100, 999);
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
                // 'callback_url' => 
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

            Payment::create([
                'champion_id' => $champion->id,
                'amount' => $price,
                'trace_no' => $merchantTraceNo,
                'status' => PaymentStatus::PENDING->value,
            ]);

            $decoded = json_decode($tokenData, true);

            if (!isset($decoded['data']['url'])) {
                \Log::error('PisoPay Error: Invalid checkout URL', $decoded);
                throw new \Exception('Payment gateway error. Please try again.');
            }
                        
            return $decoded['data']['url'];
        });
           


       
    }

}