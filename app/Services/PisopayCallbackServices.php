<?php

namespace App\Services;

use App\Models\Payment;
use App\Models\Champion;
use App\Enums\PaymentStatus;
use App\Enums\ChampionStatus;
use App\Mail\NewChampionMail;
use App\Enums\PaymentPlanType;
use Illuminate\Support\Carbon;
use App\Enums\ChampionMembership;
use App\Mail\ChampionWelcomeEmail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Mail\AdminChampionExtension;
use Illuminate\Support\Facades\Mail;
use App\Enums\ScholarSponsorMembership;
use App\Mail\ChampionAnotherTransaction;
use App\Models\ScholarSponsor;

class PisopayCallbackServices
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

            $isInitialPayment = $payment->status === PaymentStatus::PENDING->value &&
                $payment->champion_id === null;

            if ($isInitialPayment) {
                $this->handleInitialPayment($payment, $data);
            } else {
                $this->handleRecurringPayment($payment, $data);
            }


            $payment->update([
                'status' => PaymentStatus::COMPLETED,
                'transaction_id' => $data['transactionId'],
                'paid_at' => now(),
                'next_payment_at' => $this->calculateNextPaymentDate($payment->plan_type)
            ]);

            $this->sendNotifications($payment, $data, $isInitialPayment);


            Log::info("PisoPay payment processed successfully", [
                'traceNo'       => $data['traceNo'],
                'transactionId' => $data['transactionId'],
                'isInitial'     => $isInitialPayment,
            ]);

            return true;

            // if (!$payment) {
            //     Log::error("Payment not found for trace_no: {$data['traceNo']}");
            //     return false;
            // }

            // $payment->update([
            //     'status' => PaymentStatus::COMPLETED->value,
            //     'transaction_id' => $data['transactionId'],
            //     'paid_at' => now(),
            //     'next_payment_at' => $this->calculateNextPaymentDate($payment),
            // ]);

            // $payment->champion->update([
            //     'status' => ChampionStatus::ACTIVE->value,
            // ]);

            // Mail::to(config('mail.admin_email.email'))
            //     ->send(new NewChampionMail($data['customerName']));

            // Mail::to($data["customerEmail"])
            //     ->send(new ChampionWelcomeEmail($data['customerName']));

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
     * Choosing between yearly or monthly payment
     * 
     * @param Payment $payment 
     * @return DateTime
     */
    protected function calculateNextPaymentDate(Payment $payment): \DateTime
    {
        return match($payment->plan_type) {
            PaymentPlanType::MONTHLY => now()->addMonth(),
            PaymentPlanType::ANNUALLY => now()->addYear(),
            default => now()->addMonth()
        };
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
        $pendingData = session('pending_user');

        // If no pending user in session, fallback to firstOrCreate champion
        if (!$pendingData) {
            Log::warning("No pending user data found in session for payment", [
                'payment_id' => $payment->id,
                'trace_no' => $data['traceNo'] ?? null,
                'email' => $data['customerEmail']
            ]);
            
            $fullName = $data['customerName'] ?? '';
            $nameParts = explode(' ', trim($fullName), 2);
            
            $champion = Champion::firstOrCreate(
                ['email' => $data['customerEmail']],
                [
                    'first_name' => $nameParts[0] ?? null,
                    'last_name' => $nameParts[1] ?? null,
                    'email' => $data['customerEmail'],
                    'contact_number' => $data['customerPhone'] ?? null,
                    'status' => ChampionStatus::ACTIVE,
                    'membership' => ChampionMembership::AWARENESS,
                ]
            );
            
            $payment->update([
                'champion_id' => $champion->id,
            ]);
            
            Log::info("Champion created/found for payment without session data", [
                'champion_id' => $champion->id,
                'payment_id' => $payment->id,
                'email' => $data['customerEmail'],
                'used_fallback_data' => true
            ]);
            
            return;
        }

        $baseData = [
            'first_name'     => $pendingData['info']['first_name'] ?? null,
            'last_name'      => $pendingData['info']['last_name'] ?? null,
            'email'          => $data['customerEmail'],
            'contact_number' => $pendingData['info']['contact_number'] ?? null,
            'status'         => ChampionStatus::ACTIVE,
            'membership'     => $pendingData['membership']->value,

        ];

        $champion = Champion::create($baseData);

        $payment->update([
            'champion_id'   => $champion->id,
        ]);

        Log::info("New champion created from session data", [
            'champion_id' => $champion->id,
            'payment_id' => $payment->id,
            'email' => $data['customerEmail']
        ]);
        

        session()->forget('pending_user');

    }


    /**
     * Handle Monthy or Annually Payment of the champion
     * 
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
     * Email Notification for Champion
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
            $adminMailClass = $isInitial ? NewChampionMail::class : AdminChampionExtension::class;
        


            Mail::to(config('mail.admin_email.email'))
                ->send(new $adminMailClass(
                    $data['customerName'],
                    $payment->amount,
                    $payment->plan_type->value
                ));


            $mailClass = $isInitial ? ChampionWelcomeEmail::class : ChampionAnotherTransaction::class;

            $nextPayment = Carbon::parse($payment->next_payment_at)->format('F j, Y');
            $membership = ChampionMembership::from($payment->champion->membership)->name;

            
            Mail::to($data['customerEmail'])->send(new $mailClass(
                $data['customerName'],
                $payment->amount,
                $payment->plan_type->value,
                $payment->champion->membership->name,
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