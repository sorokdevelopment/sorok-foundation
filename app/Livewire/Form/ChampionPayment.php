<?php

namespace App\Livewire\Form;

use GuzzleHttp\Client;
use App\Models\Payment;
use Livewire\Component;
use App\Models\Champion;
use App\Enums\PaymentStatus;
use App\Mail\NewChampionMail;
use App\Services\PisopayServices;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use App\Services\ChampionPaymentServices;
use Livewire\Features\SupportEvents\Event;
use Livewire\Features\SupportRedirects\Redirector;

class ChampionPayment extends Component
{


    public $errorMessage = null;
    public $successMessage = null;


    public array $info;

    public string $price;

    public string $membership;
    

    public function render()
    {
        return view('livewire.form.champion-payment');
    }


    public function mount()
    {
        $this->info = session()->get('champion_info');
        $this->price = session()->get('champion_membership_price');
        $this->membership = session()->get('champion_membership')->name;
    }


    /**
     * @param ChampionPaymentServices $paymentService
     * @return mixed return redirect response and a event.
     * 
     */
    public function submit(ChampionPaymentServices $paymentService)
    {
        if (!session()->has('champion_info') || !session()->has('champion_membership') || !session()->has('champion_membership_price')) {
            return redirect()->away('home');


        }

        try {
            $url = $paymentService->submit(
                $this->info,
                session()->get('champion_membership'),
                $this->price,
            );


            session()->forget(['champion_info', 'champion_membership', 'champion_membership_price']);

            return redirect()->away($url);

        } catch (\Throwable $e) {
            \Log::error('Champion Payment Submission Failed', ['error' => $e->getMessage()]);

            $this->dispatch('alert', [
                'title' => 'Something went wrong',
                'type' => 'danger',
                'message' => $e->getMessage(),
            ]);

            $this->dispatch('delayed-redirect');
        }


    }










    // /**
    //  * Submit a request data for a champion user
    //  * 
    //  * @return Redirector|RedirectResponse 
    //  */
    // public function submit(): RedirectResponse|Redirector
    // {
    //     if (!session()->has('champion_info') || !session()->has('champion_membership') || !session()->has('champion_membership_price')) {
    //         return to_route('home');

    //     }
        
    //     $url = config('services.pisopay.endpoint');
    //     $version = config('services.pisopay.api');
    //     $creds = base64_encode(config('services.pisopay.username') . ":" . config('services.pisopay.password'));
    //     $pisopay = new PisopayServices($url, $version, $creds);

    //     // Generate a unique transaction ID
    //     $merchant_trace_no = "sorok-uni-" . rand(10000, 99999);


    //     $member = session()->get('champion_membership')->value;
       

    //     $champion = Champion::create([
    //         'first_name'     => $this->info['first_name'],
    //         'last_name'      => $this->info['last_name'],
    //         'email'          => $this->info['email'],
    //         'contact_number' => $this->info['contact_number'],
    //         'membership'     => $member
    //     ]);

    //     $ipAddress = request()->ip();

    //     if ($ipAddress === '127.0.0.1') {
    //         $ipAddress = '119.92.138.21'; // Override for local testing
    //     }


    //     $arrayPostData = [
    //         'session_id' => $pisopay->sessionGenerate(),
    //         'amount' => $this->price,
    //         'delivery_fees' => 0,
    //         'processor_name' => 'NA',
    //         'customer_name' => $this->info['first_name'] . ' ' . $this->info['last_name'],
    //         'customer_email' => $this->info['email'],
    //         'customer_phone' => $this->info['contact_number'],
    //         'customer_address' => 'PH',
    //         'merchant_trace_no' => $merchant_trace_no,
    //         'merchant_callback_url' => route('pisopay-callback'),
    //         'ip_address' => $ipAddress,
    //         'expiry_date' => now()->addDay()->format('Y-m-d H:i:s')
    //     ];

    //     // Generate token
    //     $tokenResponse = $pisopay->generateToken([
    //         [
    //             "name" => $this->membership, 
    //             "price" => $this->price, 
    //             "quantity" => 1
    //         ],
    //     ], $arrayPostData);



    //     Payment::create([
    //         'champion_id' => $champion->id,
    //         'amount' => $this->price,
    //         'trace_no' => $merchant_trace_no,
    //         'status' => PaymentStatus::PENDING->value, 
    //     ]);


    //     $decoded = json_decode($tokenResponse, true);
    //     if (!isset($decoded['data']['url'])) {
    //         \Log::error('PisoPay Error: Invalid checkout URL', $decoded);
    //         return back()->with('error', 'Payment gateway error. Please try again.');
    //     }

    //     session()->forget(['champion_info', 'champion_membership', 'champion_membership_price']);

    //     return redirect()->away($decoded['data']['url']);


    

    //     // $this->dispatch('delayed-redirect');

                

    // }


    



}
