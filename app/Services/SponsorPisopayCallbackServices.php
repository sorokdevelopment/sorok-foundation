<?php

namespace App\Services;

use App\Models\Payment;
use App\Enums\PaymentStatus;
use App\Mail\NewSponsorMail;
use App\Enums\ChampionStatus;
use App\Models\ScholarSponsor;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use App\Enums\ScholarSponsorMembership;
use App\Mail\ScholarSponsorWelcomeEmail;
use App\Mail\AdminScholarSponsorExtension;
use App\Mail\ScholarSponsorAnotherTransaction;
use Illuminate\Http\Client\ConnectionException;

class SponsorPisopayCallbackServices
{

    
    /**
     * @param array $data a callback response from pisopay
     * @return bool
     */
    public function handle(array $data): bool
    {
        $requiredFields = ['timestamp', 'traceNo', 'amount', 'hd', 'transactionId', 'customerEmail'];

        foreach ($requiredFields as $field) {
            if (empty($data[$field])) {
                Log::error("PisoPay callback missing field: {$field}");
                return false;
            }
        }

        if (!$this->verifyHmac($data)) {
            Log::warning("PisoPay Callback Hash mismatch", [
                'traceNo' => $data['traceNo'],
                'receivedHd' => $data['hd'],
            ]);
            return false;
        }

        return DB::transaction(function () use ($data) {
            $payment = Payment::where('trace_no', $data['traceNo'])->first();

            if (! $payment) {
                Log::error("Payment not found for trace_no: {$data['traceNo']}");
                return false;
            }

            if ($payment->status === PaymentStatus::COMPLETED) {
                Log::info("PisoPay callback skipped — already completed", [
                    'traceNo'       => $data['traceNo'],
                    'transactionId' => $data['transactionId'],
                ]);
                return true;
            }

            $isInitialPayment = $payment->status === PaymentStatus::PENDING->value 
                && $payment->paymentable_type === null 
                && $payment->paymentable_id === null;

            if ($isInitialPayment) {
                $this->handleInitialPayment($payment, $data);
            } else {
                $this->handleRecurringPayment($payment, $data);
            }


            $payment->update([
                'status' => PaymentStatus::COMPLETED,
                'transaction_id' => $data['transactionId'],
                'paid_at' => now(),
                'next_payment_at' => now()->addMonths($payment->month_of_payment),
            ]);

            $this->sendNotifications($payment, $data, $isInitialPayment);


            Log::info("PisoPay payment processed successfully", [
                'traceNo'       => $data['traceNo'],
                'transactionId' => $data['transactionId'],
                'isInitial'     => $isInitialPayment,
            ]);

            return true;

        });
    }


    /**
     * @param array $data 
     * @return bool
     */
    private function verifyHmac(array $data): bool
    {
        $username = config('services.pisopay.username');
        $password = config('services.pisopay.password');
        $combined = $username . ':' . $password;

        $timestamp = $data['timestamp'];
        $traceNo   = $data['traceNo'];
        $amount = $data['amount'];

        Log::info('Verifying PisoPay HMAC', compact('amount', 'traceNo', 'timestamp'));

        $auth = substr(hash('sha256', $combined . $timestamp), 0, 10);
        $computedHd = hash_hmac('sha256', $auth . $traceNo . $amount, $timestamp);

        return hash_equals($computedHd, $data['hd']);
    }


    /**
     * Handle the First payment of the user
     * 
     * @param Payment $payment
     * @param array $data
     * @return void
     * 
     */
    protected function handleInitialPayment(Payment $payment, array $data): void
    {

        // Ensure meta_data exists
        if (empty($payment->meta_data)) {
            Log::warning("No pending user data found in payment", [
                'email' => $data['customerEmail']
            ]);
            return;
        }



        $baseData = [
            'first_name'     => $payment->meta_data['first_name'] ?? null,
            'last_name'      => $payment->meta_data['last_name'] ?? null,
            'email'          => $data['customerEmail'],
            'contact_number' => $payment->meta_data['contact_number'] ?? null,
            'status'         => ChampionStatus::ACTIVE,
            'membership'     => $payment->meta_data['membership_value'] ?? null,
        ];


        // Check if the membership is a scholar sponsor membership
        $scholarSponsor = ScholarSponsor::create($baseData);

        $payment->update([
            'paymentable_id' => $scholarSponsor->id,
            'paymentable_type' => ScholarSponsor::class,
        ]);

        Log::info("New scholar sponsor data created", [
            'email' => $data['customerEmail']
        ]);
        
    }


    /**
     * Handle Monthy or Annually Payment of the scholar sponsor
     * @param Payment $payment
     * @param array $data
     * 
     * @return void
     * 
     */
    protected function handleRecurringPayment(Payment $payment, array $data): void
    {
        if ($payment->champion) {
            $payment->champion->update([
                'status' => ChampionStatus::ACTIVE,
            ]);
        } else {
            Log::error("Champion not found for recurring payment", [
                'payment_id' => $payment->id,
                'trace_no' => $data['traceNo']
            ]);
            return;
        }
    }



    /**
     * Email Notification for Scholar Sponsor
     * 
     * @param Payment $payment
     * @param array $data
     * @param bool $isInitial
     * 
     * @return void
     */

    
    protected function sendNotifications(Payment $payment, array $data, bool $isInitial): void
    {

        try {
            $adminMailClass = $isInitial ? NewSponsorMail::class : AdminScholarSponsorExtension::class;
        


            Mail::to(config('mail.admin_email.email'))
                ->send(new $adminMailClass(
                    $data['customerName'],
                    $payment->amount,
                    $payment->month_of_payment . ' Month(s)',
                ));


            $mailClass = $isInitial ? ScholarSponsorWelcomeEmail::class : ScholarSponsorAnotherTransaction::class;

            $nextPayment = Carbon::parse($payment->next_payment_at)->format('F j, Y');
            $membership = ScholarSponsorMembership::from($payment->paymentable->membership)->name;

            
            Mail::to($data['customerEmail'])->send(new $mailClass(
                $data['customerName'],
                $payment->amount,
                $payment->month_of_payment . ' Month(s)',
                $membership,
                $nextPayment
            ));
        } catch (\Throwable $e) {
            Log::error('Failed to send notifications', [
                'payment_id' => $payment->id,
                'error' => $e->getMessage()
            ]);
        }
    }
    
}