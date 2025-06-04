<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;


/**
 * MainProcess class
 *
 * @category Module
 * @package  CheckoutApi
 * @author   Christian Villegas <cv@pisopay.com.ph>
 * @license  Proprietary License
 **/
class PisopayPaymentServices
{



    public $url;
    public $version;
    public $creds;

    public function __construct(string $url, string $version, string $creds)
    {
        $this->url = $url;
        $this->version = $version;
        $this->creds = $creds;
    }

    /**
     * SessionGenerate Function
     *
     * @return bool|string
     * @author   Christian Villegas <cv@pisopay.com.ph>
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
        dd($data);
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
     * @author   Christian Villegas <cv@pisopay.com.ph>
     */
    public function generateToken(array $details, array $arrayData)
    {
        $details = [[
            "payment" => $details,
            "name" => null, // Add company name if needed
        ]];

        $arrayData["details"] = json_encode($details);

        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => "Basic {$this->creds}",
            'Content-Type' => 'application/json',
        ])->post("{$this->url}/api/{$this->version}/token", $arrayData);

        if ($response->failed()) {
            throw new \Exception("PisoPay token generation failed: " . $response->body());
        }

        return $response->body();
    }


    /**
     * GenerateReferenceNumber Function
     *
     * @param array $arrayData
     * @return bool|string
     * @author   Christian Villegas <cv@pisopay.com.ph>
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
     * @author   Christian Villegas <cv@pisopay.com.ph>
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
     * @author   Christian Villegas <cv@pisopay.com.ph>
     */
    public function hashMaker1(string $y, string $merchant_trace_no, int $time)
    {
        $auth = substr($y, strlen($y) - 30, strlen($y));
        return hash_hmac("sha256", $auth . $merchant_trace_no, $time);
    }


    

}