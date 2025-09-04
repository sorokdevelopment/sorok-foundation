<?php

namespace App\Livewire\Form;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Enums\PaymentPlanType;
use Illuminate\Support\Facades\Log;
use App\Services\ChampionPaymentServices;

class ChampionPayment extends Component
{

    
    public $errorMessage = null;
    public $successMessage = null;


    public array $info;

    public string $price;

    public string $membership;

    public ?string $monthlyPrice = null;
    public string $billingType = PaymentPlanType::MONTHLY->value;
    

    public function render()
    {
        return view('livewire.form.champion-payment', [
            'finalPrice' => $this->finalPrice,
            'billingDescription' => $this->billingDescription
        ]);
    }

    public function getFinalPriceProperty()
    {
        return $this->billingType === PaymentPlanType::MONTHLY->value
            ? $this->price
            : $this->price * 12;
    }

    public function getBillingDescriptionProperty()
    {
        return $this->billingType === PaymentPlanType::MONTHLY->value
            ? "₱{$this->price}/month"
            : "₱".($this->price * 12)."/year (12 months)";
    }


    public function setBillingType($type)
    {
        $this->billingType = $type;
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
            return redirect()->route('home');
        }

        try {

            $pendingData = [
                'info' => session('champion_info'),
                'membership' => session('champion_membership'),
                'price' => $this->finalPrice,
                'plan_type' => $this->billingType,
            ];


            $url = $paymentService->submit(
                $pendingData['info'],
                $pendingData['membership'],
                $pendingData['price'],
                PaymentPlanType::from($pendingData['plan_type']),
            );


            session()->forget([
                'champion_info', 
                'champion_membership', 
                'champion_membership_price',
            ]);
            
            return redirect()->away($url);


        } catch (\Throwable $e) {
            Log::error('Payment Error: '.$e->getMessage());
            $this->dispatch('alert', [
                'title' => 'Something went wrong',
                'type' => 'danger',
                'message' => 'We couldn\'t process your payment. Please try again.',
            ]);

            $this->dispatch('delayed-redirect');
        }
    }



    public function backStep(): void
    {
        $this->dispatch('goToPreviousStep');
    }


    



}
