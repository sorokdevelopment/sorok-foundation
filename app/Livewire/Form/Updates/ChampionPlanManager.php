<?php

namespace App\Livewire\Form\Updates;

use App\Models\Payment;
use Livewire\Component;
use Livewire\Attributes\On;
use App\Enums\PaymentPlanType;
use Illuminate\Validation\Rule;
use App\Enums\ChampionMembership;
use App\Services\ChampionPaymentServices;

class ChampionPlanManager extends Component
{
    public Payment $payment;
    public string $plan_type;
    public int $membership;
    public string $email_check = '';
    public float $price = 0;

    protected $monthlyRates = [
        1 => 100,
        2 => 1000, 
        3 => 10000
    ];

    public function mount(Payment $payment)
    {
        if (!$payment->champion) {
            return redirect()->route('home');
        }

        $this->payment = $payment;
        $this->plan_type = $payment->plan_type->value;
        $this->membership = $payment->champion->membership;
        $this->calculatePrice();
    }

    protected function rules(): array
    {
        return [
            'plan_type' => [
                'required', 
                Rule::in(array_column(PaymentPlanType::cases(), 'value'))
            ],
            'membership' => [
                'required', 
                Rule::in(array_column(ChampionMembership::cases(), 'value'))
            ], 
            'email_check' => [
                'required', 
                'email', 
                'in:' . $this->payment->champion->email
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'email_check.in' => 'The email does not match the one associated with this payment.',
            'plan_type.in' => 'The selected plan type is invalid.',
            'membership.in' => 'Please select a valid membership option.',
        ];
    }

    public function confirm()
    {
        $this->validate();
        $this->calculatePrice();
        
        $this->dispatch('confirm-dialog', [
            'title' => 'Update Subscription?',
            'description' => sprintf(
                "This will change your plan to %s (%s) for ₱%s. After confirming, you'll be redirected to the payment page. 
                Please complete the payment to activate your new subscription." ,
                ChampionMembership::from($this->membership)->name,
                $this->plan_type,
                number_format($this->price, 2)
            ),
        ]);
    }

    #[On('confirmed-action')]
    public function submit(ChampionPaymentServices $paymentService) 
    {
        $this->calculatePrice();
        $traceNo = 'sub-' . time() . '-' . $this->payment->champion_id;

        try {
            $checkoutUrl  = $paymentService->submitRecurring(
                $this->payment->champion,
                ChampionMembership::from($this->membership)->name,
                $this->price,
                $this->plan_type,
                $traceNo
            );


            return redirect()->away($checkoutUrl);


        } catch (\Exception $e) {
            session()->flash('error', 'Something went wrong. Please try again.');
            logger()->error('Subscription update failed', [
                'payment_id' => $this->payment->id,
                'error' => $e->getMessage()
            ]);
        }
    }

    protected function calculatePrice(): void
    {
        $monthly = $this->monthlyRates[$this->membership] ?? 0;
        $this->price = $this->plan_type === 'annually' ? $monthly * 12 : $monthly;
    }

    public function updated($property)
    {
        if (in_array($property, ['membership', 'plan_type'])) {
            $this->calculatePrice();
        }
    }

    public function render()
    {
        return view('livewire.form.updates.champion-plan-manager');
    }
}