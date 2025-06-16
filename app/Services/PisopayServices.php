<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\ConnectionException;


/**
 * MainProcess class
 *
 * @category Module
 * @package  CheckoutApi
 * @license  Proprietary License
 **/
class PisopayServices
{



    public $url;
    public $version;
    public $creds;

    public function __construct()
    {
        $this->url = config('services.pisopay.endpoint');
        $this->version = config('services.pisopay.api');
        $this->creds = base64_encode(config('services.pisopay.username') . ":" . config('services.pisopay.password'));
    }

    /**
     * SessionGenerate Function
     *
     * @return bool|string
     */
    public function sessionGenerate()
    {

        $response = Http::withHeaders([
            'Authorization' => "Basic {$this->creds}",
            'Content-Type'  => 'application/json',
        ])->get("{$this->url}/api/{$this->version}/session");

        if ($response->failed()) {
            throw new \Exception("PisoPay session failed: " . $response->body());
        }

        $data = $response->json();
        if (!isset($data['status']) || $data['status'] != 0) {
            return false;
        }

        return $data['data']['session_id'] ?? false;
    }

    /**
     * GenerateToken Function
     *
     * @param array $details
     * @param array $arrayData
     * @return bool|string
     */
    public function generateToken(array $details, array $arrayData)
    {
        $details = json_encode([[
            "payment" => $details,
            "name" => null, // company name if exists
        ]]);

        $arrayData["details"] = $details;

        try {
            $response = Http::withHeaders([
                'Authorization' => "Basic {$this->creds}",
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ])
            ->post("{$this->url}/api/{$this->version}/token", $arrayData);

            if ($response->failed()) {
                \Log::error('PisoPay Token Generation Failed', [
                    'response' => $response->body(),
                    'status' => $response->status()
                ]);
                return false;
            }
            return $response->body(); // You can also return $response->json() if you want it decoded
        } catch (\Exception $e) {
            \Log::error('PisoPay Token Exception', ['error' => $e->getMessage()]);
            return false;
        }
    }


    /**
     * GenerateReferenceNumber Function
     *
     * @param array $arrayData
     * @return bool|string
     */
    public function generateReferenceNumber(array $arrayData)
    {

         $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => "Basic {$this->creds}",
            'Content-Type' => 'application/json',
        ])->post("{$this->url}/api/{$this->version}/transaction", $arrayData);

        if ($response->failed()) {
            throw new \Exception("PisoPay reference number generation failed: " . $response->body());
        }

        return $response->body();
    }

    /**
     * HashMaker Function
     *
     * @param int $time
     * @param string merchant_trace_no
     * @param string $payment_channel_code
     * @return bool|string
     */
    public function hashMaker(int $time, string $merchant_trace_no, string $payment_channel_code)
    {
        return hash("sha256", $time . $merchant_trace_no . $payment_channel_code);
    }

    /**
     * HashMaker1 Function
     *
     * @param string $y
     * @param string $merchant_trace_no
     * @param int $time
     * @return false|string
     */
    public function hashMaker1(string $y, string $merchant_trace_no, int $time)
    {
        $auth = substr($y, strlen($y) - 30, strlen($y));
        return hash_hmac("sha256", $auth . $merchant_trace_no, $time);
    }

    


    

}