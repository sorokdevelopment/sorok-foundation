<?php

namespace App\Services;

use App\Models\Payment;
use App\Enums\PaymentStatus;
use App\Enums\ChampionStatus;
use App\Mail\ChampionWelcomeEmail;
use App\Mail\NewChampionMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

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

            if (!$payment) {
                Log::error("Payment not found for trace_no: {$data['traceNo']}");
                return false;
            }

            $payment->update([
                'status' => PaymentStatus::COMPLETED->value,
                'transaction_id' => $data['transactionId'],
                'paid_at' => now(),
                'next_payment_at' => now()->addMonth(),
            ]);

            $payment->champion->update([
                'status' => ChampionStatus::ACTIVE->value,
            ]);

            Mail::to(config('mail.admin_email.email'))
                ->send(new NewChampionMail($data['customerName']));

            Mail::to($data["customerEmail"])
                ->send(new ChampionWelcomeEmail($data['customerName']));

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

}