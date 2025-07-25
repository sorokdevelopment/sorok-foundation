<?php

namespace App\Console\Commands;

use App\Models\Payment;
use App\Enums\PaymentStatus;
use App\Enums\ChampionStatus;
use App\Mail\DuePaymentNotice;
use Illuminate\Support\Carbon;
use Illuminate\Console\Command;
use App\Enums\ChampionMembership;
use App\Mail\ChampionPaymentNotice;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\ChampionAnotherTransaction;
use App\Services\ChampionPaymentServices;

class ChampionSubscriptions extends Command
{
    public function __construct(
        private ChampionPaymentServices $paymentService,
    ) {
        parent::__construct();
    }

    protected $signature = 'app:champion-subscriptions';
    protected $description = 'Charge active subscriptions and send reminders';

    public function handle()
    {
        $this->info('Starting champion subscriptions processing...');
        
        $this->sendReminders();
        
        $this->processPaymentsDueToday();
        
        $this->info('Champion subscriptions processing completed.');
    }

    protected function processPaymentsDueToday()
    {
        $today = now()->toDateString();
        
        $payments = Payment::with('champion')
            ->where('status', PaymentStatus::COMPLETED->value)
            ->whereDate('next_payment_at', $today)
            ->get();

        if ($payments->isEmpty()) {
            $this->info('No payments due today.');
            return;
        }

        foreach ($payments as $payment) {
            try {
                $checkoutUrl = $this->generatePaymentLink($payment);

                
                $membership = ChampionMembership::from($payment->champion->membership)->name;
                $nextPayment = Carbon::parse($payment->next_payment_at)->format('F j, Y');


                $addedData = [
                    'amount' => $payment->amount,
                    'plan_type' => $payment->plan_type->value,
                    'membership' => $membership,
                    'next_payment' => $nextPayment,
                ];


                
                $payment->champion->update([
                    'status' => ChampionStatus::INACTIVE->value,
                ]);

                
                Mail::to($payment->champion->email)->send(
                    new DuePaymentNotice(
                        $payment->champion, 
                        $checkoutUrl,
                        $addedData,

                    )
                );

                
                $this->info("Sent payment due notice to {$payment->champion->email}");
                
            } catch (\Throwable $e) {
                Log::error('Payment processing failed', [
                    'payment_id' => $payment->id,
                    'champion_email' => $payment->champion->email,
                    'error' => $e->getMessage()
                ]);
                $this->error("Failed to process payment for {$payment->champion->email}");
            }
        }

        $this->info("Processed {$payments->count()} payments due today.");
    }

    protected function generatePaymentLink(Payment $payment): string
    {
        $traceNo = 'sub-' . time() . '-' . $payment->champion_id;
        
        return $this->paymentService->submitRecurring(
            $payment->champion,
            ChampionMembership::from($payment->champion->membership)->name,
            $payment->amount,
            $payment->plan_type->value,
            $traceNo
        );
    }

    protected function sendReminders()
    {
        $reminderDate = now()->addWeek()->toDateString();

        $upcomingPayments = Payment::with('champion')
            ->where('status', PaymentStatus::COMPLETED->value)
            ->whereDate('next_payment_at', $reminderDate)
            ->get();

        if ($upcomingPayments->isEmpty()) {
            $this->info('No payment reminders to send.');
            return;
        }

        $this->info("Found {$upcomingPayments->count()} payments requiring reminders.");

        foreach ($upcomingPayments as $payment) {
            $this->sendReminderForPayment($payment);
        }

        $this->info("Sent reminders processing complete.");
    }

    protected function sendReminderForPayment(Payment $payment)
    {
        try {
            $checkoutUrl = $this->generatePaymentLink($payment);

            $membership = ChampionMembership::from($payment->champion->membership)->name;
            $nextPayment = Carbon::parse($payment->next_payment_at)->format('F j, Y');


            $addedData = [
                'amount' => $payment->amount,
                'plan_type' => $payment->plan_type->value,
                'membership' => $membership,
                'next_payment' => $nextPayment,
                'change_plan_link' => route('champion.plan-manager', $payment)
            ];

            Mail::to($payment->champion->email)->send(
                new ChampionPaymentNotice(
                    $payment->champion, 
                    $checkoutUrl,
                    $addedData,

                )
            );


            $this->info("Sent reminder to {$payment->champion->email}");
            
        } catch (\Throwable $e) {
            Log::error("Reminder failed for payment", [
                'payment_id' => $payment->id,
                'champion_email' => $payment->champion->email,
                'error' => $e->getMessage()
            ]);
            $this->error("Failed to send reminder to {$payment->champion->email}");
        }
    }
}