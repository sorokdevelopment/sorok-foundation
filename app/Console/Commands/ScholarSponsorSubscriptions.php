<?php

namespace App\Console\Commands;

use App\Models\Payment;
use App\Enums\PaymentStatus;
use App\Enums\ChampionStatus;
use App\Mail\DuePaymentNotice;
use Illuminate\Support\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Enums\ScholarSponsorMembership;
use App\Mail\ScholarSponsorPaymentNotice;
use App\Mail\ScholarSponsorDuePaymentNotice;
use App\Services\ScholarSponsorPaymentServices;

class ScholarSponsorSubscriptions extends Command
{


    public function __construct(
        private ScholarSponsorPaymentServices $paymentService,
    ) {
        parent::__construct();
    }


    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:scholar-sponsor-subscriptions';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Charge active subscriptions and send reminders';

    public function handle()
    {
        $this->info('Starting scholar sponsor subscriptions processing...');

        // Send reminders for upcoming payments
        $this->sendReminders();
        
        // Process payments due today
        $this->processPaymentsDueToday();

        $this->info('Scholar sponsor subscriptions processing completed.');
    }

    protected function processPaymentsDueToday()
    {
        $today = now()->toDateString();
        
        $payments = Payment::with('paymentable')
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

                
                $membership = ScholarSponsorMembership::from($payment->paymentable->membership)->name;
                $nextPayment = Carbon::parse($payment->next_payment_at)->format('F j, Y');


                $addedData = [
                    'amount' => $payment->amount,
                    'plan_type' => $payment->plan_type->value,
                    'membership' => $membership,
                    'next_payment' => $nextPayment,
                    // 'change_plan_link' => route('champion.plan-manager', $payment) need to add route for scholar sponsor
                ];


                $payment->paymentable->update([
                    'status' => ChampionStatus::INACTIVE->value,
                ]);

                
                Mail::to($payment->paymentable->email)->send(
                    new ScholarSponsorDuePaymentNotice(
                        $payment->paymentable, 
                        $checkoutUrl,
                        $addedData,
                        
                    )
                );

                $this->info("Sent payment due notice to {$payment->paymentable->email}");

            } catch (\Throwable $e) {
                Log::error('Payment processing failed', [
                    'payment_id' => $payment->id,
                    'sponsor_email' => $payment->paymentable->email,
                    'error' => $e->getMessage()
                ]);
                $this->error("Failed to process payment for {$payment->paymentable->email}");
            }
        }

        $this->info("Processed {$payments->count()} payments due today.");
    }

    protected function generatePaymentLink(Payment $payment): string
    {
        $traceNo = 'sub-' . time() . '-' . $payment->paymentable->id;

        return $this->paymentService->submitRecurring(
            $payment->paymentable,
            ScholarSponsorMembership::from($payment->paymentable->membership)->name,
            $payment->amount,
            $payment->month_of_payment,
            $traceNo
        );
    }

    protected function sendReminders()
    {
        $reminderDate = now()->addWeek()->toDateString();

        $upcomingPayments = Payment::with('paymentable')
            ->where('status', PaymentStatus::COMPLETED->value)
            ->whereDate('next_payment_at', $reminderDate)   
            ->get();

        if ($upcomingPayments->isEmpty()) {
            $this->info('No payment reminders to send.');
            return;
        }


        foreach ($upcomingPayments as $payment) {
            if(is_null($payment->month_of_payment)) {
                $this->info("Found payment without month_of_payment, skipping reminder for payment ID {$payment->id}");
                break;
            }

            $this->sendReminderForPayment($payment);

        }


        $this->info("Sent reminders processing complete.");
    }

    

    protected function sendReminderForPayment(Payment $payment)
    {
        try {
            $checkoutUrl = $this->generatePaymentLink($payment);

            $membership = ScholarSponsorMembership::from($payment->paymentable->membership)->name;
            $nextPayment = Carbon::parse($payment->next_payment_at)->format('F j, Y');


            $addedData = [
                'amount' => $payment->amount,
                'plan_type' => $payment->month_of_payment . ' Month(s)',
                'membership' => $membership,
                'next_payment' => $nextPayment,
                // 'change_plan_link' => route('champion.plan-manager', $payment) need to add route for scholar sponsor
            ];

            Mail::to($payment->paymentable->email)->send(
                new ScholarSponsorPaymentNotice(
                    $payment->paymentable, 
                    $checkoutUrl,
                    $addedData,
                )
            );


            $this->info("Sent reminder to {$payment->paymentable->email}");
            
        } catch (\Throwable $e) {
            Log::error("Reminder failed for payment", [
                'payment_id' => $payment->id,
                'champion_email' => $payment->paymentable->email,
                'error' => $e->getMessage()
            ]);
            $this->error("Failed to send reminder to {$payment->paymentable->email}");
        }
    }
}
