<?php

namespace App\Services;

use App\Models\Payment;
use App\Enums\PaymentStatus;
use App\Mail\NewChampionMail;
use Illuminate\Support\Facades\Mail;

class PisopayCallbackServices
{
    /**
     * @param array $data a callback response from pisopay
     * @return bool
     */
    public function handle(array $data): bool
    {
        $username = config('services.pisopay.username');
        $password = config('services.pisopay.password');
        $combined = $username . ':' . $password;

        $timestamp = $data['timestamp'] ?? '';
        $traceNo = $data['traceNo'] ?? '';
        $amount = $data['amount'] ?? '';
        $receivedHd = $data['hd'] ?? '';
        $transactionId = $data['transactionId'] ?? '';

        $auth = substr(hash('sha256', $combined . $timestamp), 0, 10);
        $computedHd = hash_hmac('sha256', $auth . $traceNo . $amount, $timestamp);

        if (!hash_equals($computedHd, $receivedHd)) {
            \Log::warning("PisoPay Callback Hash mismatch", compact('traceNo'));
            return false;
        }

        $payment = Payment::where('trace_no', $traceNo)->update([
            'status' => PaymentStatus::COMPLETED->value,
            'transaction_id' => $transactionId,
            'paid_at' => now(),
            'next_payment_at' => now()->addMonth(),
        ]);

        if($payment->status === PaymentStatus::COMPLETED->value) 
        {
            Mail::to('fcd@sorokuni.com')->send(new NewChampionMail(
                $data['customerName'],
            ));
        }

        return $payment > 0;
    }
}