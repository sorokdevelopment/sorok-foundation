<?php

namespace App\Livewire\Form;

use GuzzleHttp\Client;
use Livewire\Component;
use App\Models\Champion;
use Illuminate\Http\RedirectResponse;
use App\Services\PisopayPaymentServices;

class ChampionPayment extends Component
{

 

    public function render()
    {
        return view('livewire.form.champion-payment');
    }


    // /**
    //  * Submit a request data for a champion user
    //  * 
    //  * @return Champion|RedirectResponse $champion
    //  */
    public function submit(): Champion|RedirectResponse
    {
        if (!session()->has('champion_info') || !session()->has('champion_membership')) {
            return to_route('home');

        }
        
        $info = session()->get('champion_info');
        $member = session()->get('champion_membership')->value;

        $champion = Champion::create([
            'first_name'     => $info['first_name'],
            'last_name'      => $info['last_name'],
            'email'          => $info['email'],
            'contact_number' => $info['contact_number'],
            'membership'     => $member
        ]);


        $this->dispatch('alert', [
            'title' => 'Thank You, Champion!',
            'type' => 'success',
            'message' => 'You are now officially a Champion of the SOROK UNI Foundation. Welcome aboard!',
        ]);

        $this->dispatch('delayed-redirect');

                
        session()->forget(['champion_info', 'champion_membership']);
        return $champion;
    }




    /**
     * Submit a request data for a champion user
     * 
     * 
     */
    //  public function submit()
    // {
    //     $url = config('services.pisopay.endpoint');
    //     $version = config('services.pisopay.api');
    //     $creds = base64_encode(config('services.pisopay.username') . ":" . config('services.pisopay.password'));
    //     $pisopay = new PisopayPaymentServices($url, $version, $creds);

    //     // Generate a unique transaction ID
    //     $merchant_trace_no = "sorok-uni-" . rand(10000, 99999);

    //     // Dynamic IP handling
    //     $ipAddress = request()->ip();
    //     if ($ipAddress === '127.0.0.1') {
    //         $ipAddress = '119.92.138.21'; // Override for local testing
    //     }

    //     $arrayPostData = [
    //         'session_id' => $pisopay->sessionGenerate(),
    //         'amount' => 100,
    //         'processor_name' => 'Cashier01',
    //         'customer_name' => 'John Doe',
    //         'customer_email' => 'sorokdevelopment@gmail.com',
    //         'customer_phone' => '09617493859',
    //         'customer_address' => 'PH',
    //         'merchant_trace_no' => $merchant_trace_no,
    //         'merchant_callback_url' => 'https://devcbh.com/response',
    //         'callback_url' => 'https://devcbh.com/response',
    //         'ip_address' => $ipAddress, // Use the corrected IP
    //         'expiry_date' => now()->addDay()->format('Y-m-d H:i:s')
    //     ];

    //     // Generate token
    //     $tokenResponse = $pisopay->generateToken([
    //         ["name" => "itemSample", "price" => "105.50", "quantity" => "1"],
    //         ["name" => "itemSample1", "price" => "205.50", "quantity" => "2"]
    //     ], $arrayPostData);

    //     $decoded = json_decode($tokenResponse, true);

    //     if (!isset($decoded['data']['checkout_url'])) {
    //         \Log::error('PisoPay Error: Invalid checkout URL', $decoded);
    //         return back()->with('error', 'Payment gateway error. Please try again.');
    //     }

    //     return redirect()->away($decoded['data']['checkout_url']);
    // }






    //  public function store(Request $request)
    // {

    //     $client = new Client();
    //     $apiKey = config('services.xendit.secret');
    //     $uuid = (string) Str::uuid();



    //     $params = [
    //         'external_id' => "DF-" . $uuid,
    //         'amount' => $request->input('amount'),
    //         'payer_email' => $request->input('email'),
    //         'description' => $request->input('description'),
    //     ];

    //     // $createInvoiceRequest = new CreateInvoiceRequest($params);


    //     // $apiInstance = new InvoiceApi();
    //     try {

    //         $response = Http::post('https://api.xendit.co/v2/invoices', [
    //             'auth' => [$apiKey, ''],
    //             'json' => $params,
    //             'headers' => [
    //                 'Content-Type' => 'application/json',
    //             ],
    //         ]);
    //         $result = json_decode($response->getBody(), true);
    //         $data = [
    //             'checkout_link' => $result['invoice_url'],
    //             'external_id'   => $params['external_id'],
    //             'status'        => 'pending',
    //             "success_redirect_url" => "http://dreamfactory.test",
    //             "failure_redirect_url" => "http://dreamfactory.test/jobs",
    //         ];

    //         Payment::create($data);

    //         return redirect($result['invoice_url']);
    //     } catch (\Xendit\XenditSdkException $e) {
    //         return response()->json([
    //                 'error' => 'Exception when creating invoice: ' . $e->getMessage(),
    //                 'full_error' => json_encode($e->getFullError())
    //             ], 500);
    //     }

    // }



    

    public function getWebhook(Request $request)
    {


        // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //     $uname = ''; //input api_username
        //     $pass = ''; //input api_password

        //     $combined = $uname . ":" . $pass;

        //     $postBody = file_get_contents("php://input");
        //     $details = json_decode($postBody);

        //     $t = $details->data->timestamp;
        //     $getTrace = $details->data->traceNo;
        //     $allAmount = $details->data->amount;

        //     $auth = hash("sha256", $combined . $t);
        //     $auth = substr($auth, 0, 10);
        //     $hd1 = hash_hmac("sha256", $auth . $getTrace . $allAmount, $t);
        //     $hd2 = $details->data->hd;

        //     if (hash_equals($hd1, $hd2)) { // EXTREMELY IMPORTANT !!
        //         if ($hd1 === $hd2) { // EXTREMELY IMPORTANT !!
        //             // Check if Existing on your DB

        //             //THE GATEWAY NEEDS RESPONSE "OK" IF SUCCESSFUL
        //             echo "OK";
        //         } else {
        //             var_dump("FAILED VALIDATION2"); //HASH DATA NOT MATCHED
        //         }
        //     } else {
        //         var_dump("FAILED VALIDATION1"); //HASH DATA NOT MATCHED
        //     }
        // } else {
        //     http_response_code('405'); //method not allowed
        //     exit();
        // }



        $getToken = $request->headers->get('x-callback-token');
        $webhookToken = config('services.xendit.callback');


        try {
            $payment = Payment::where('external_id', $request->external_id)->first();

            if (!$webhookToken) {
                return response()->json([
                    'status' => 'Error',
                    'message' => 'Webhook token xendit not exists'
                ], Response::HTTP_NOT_FOUND);
            }


            if ($getToken !== $webhookToken) {
                return response()->json([
                    'status' => 'Error',
                    'message' => 'Token callback invalid'
                ], Response::HTTP_INTERNAL_SERVER_ERROR);
            }

            if ($payment) {
                if ($request->status === 'PAID') {
                    $quantity = $request->items[0]['quantity'];
                    $description = $request->description;
                    $tickets = [];
                    for ($i = 0; $i < $quantity; $i++) {
                        if ($description === "Purchasing Job Ticket")
                        {
                            $tickets[] = [
                                'type' => TicketType::Job,
                            ];
                        } else {
                            $tickets[] = [
                                'type' => TicketType::Business,
                            ];
                        }
                    }

                    $payment->promoter->tickets()->createMany($tickets);
                    $payment->update([
                        'status' => 'paid'
                    ]);

                    event(new XenditPayment($payment->promoter, $payment));
                    event(new PortalXenditPayment($payment));
                    
                } else {
                    $payment->update([
                        'status' => 'failed'
                    ]);
                }
            }

            return response()->json([
                'status' => Response::HTTP_OK,
                'message' => 'callback sent'
            ]);


        } catch (Throwable $th)
        {
            throw $th;
        }
    }
}
