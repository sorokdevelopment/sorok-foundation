<?php

namespace App\Livewire\Modal;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Enums\ChampionStatus;
use App\Enums\PaymentPlanType;
use App\Models\ScholarSponsor;
use Illuminate\Support\Facades\Log;
use App\Enums\ScholarSponsorMembership;
use App\Services\ScholarSponsorPaymentServices;

class DreamProjectScholarshipModalForm extends Component
{
    public string $first_name = '';
    public string $last_name = '';
    public string $email = '';
    public string $contact_number = '';
    public int $month_of_payment = 1;
    public int $step = 1;

    public bool $agreed = false;
    public string $billingType = PaymentPlanType::MONTHLY->value;


    public int $membership = 1;






    public function rules()
    {
        return [
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'email' => ['required', 'max:100', 'email', 'unique:scholar_sponsors,email'],
            'contact_number' => ['required', 'regex:/^(09|\+639|9)\d{9}$/'],
            'membership' => ['required', 'in:1,2'],
            'month_of_payment' => ['required', 'integer'],
            'agreed' => ['required', 'accepted'],
        ];
    }
    public function messages()
    {
        return [
            'contact_number.regex' => 'The contact number must be a valid mobile number.',
            'membership.required' => 'Please select a sponsorship level.',
            'membership.in' => 'Please select a valid sponsorship level.',
            'agreed.accepted' => 'You must agree to the privacy policy to continue.',
        ];
    }



    public function nextStep() 
    {
        $this->validate();

        return $this->step = 2;
    }

    public function previousStep() 
    {
        return $this->step = 1;
    }




    public function submit(ScholarSponsorPaymentServices $paymentService) 
    {



        try {

            $scholarSponsorInfo = [
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'email' => $this->email,
                'contact_number' => $this->contact_number,
                'membership' => $this->membership,
                'month_of_payment' => $this->month_of_payment,
            ];

            $pendingData = [
                'info' => $scholarSponsorInfo,
                'membership' => $this->membership == 1 ? ScholarSponsorMembership::DREAM : ScholarSponsorMembership::FAITH,
                'price' => $this->finalPrice,
                'plan_type' => $this->billingType,
            ];



            $url = $paymentService->submit(
                $scholarSponsorInfo,
                $pendingData['membership'],
                $pendingData['price'],
                PaymentPlanType::from($pendingData['plan_type']),
            );

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


        $this->reset(['first_name', 'last_name', 'email', 'contact_number', 'membership', 'agreed']);

        $this->dispatch('alert', [
            'title' => 'Thank you!',
            'type' => 'success',
            'message' => 'Your application has been submitted successfully.',
        ]);



    }


    public function getFinalPriceProperty()
    {
        if (!$this->membership || !$this->month_of_payment) {
            return null;
        }

        return $this->membership === 2
            ? 1500 * $this->month_of_payment
            : 6500 * $this->month_of_payment;
    }



    public function render()
    {
        return view('livewire.modal.dream-project-scholarship-modal-form', [
            'finalPrice' => $this->finalPrice,
        ]);
    }
}
