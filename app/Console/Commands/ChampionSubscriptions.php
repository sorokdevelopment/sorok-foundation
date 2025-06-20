<?php

namespace App\Console\Commands;

use App\Models\Payment;
use App\Enums\PaymentStatus;
use Illuminate\Console\Command;
use App\Enums\ChampionMembership;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Services\ChampionPaymentServices;
use App\Mail\ChampionMonthlyPaymentNotice;

class ChampionSubscriptions extends Command
{


    public function __construct(
        private ChampionPaymentServices $paymentService,
    ) {
        parent::__construct();
    }
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:champion-subscriptions';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Charge active subscriptions';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $today = now()->toDateString();

        $payments = Payment::where('status', PaymentStatus::COMPLETED->value)
            ->whereDate('next_payment_at', $today)
            ->get();

        foreach ($payments as $payment) {
            $champion = $payment->champion;
            $price = $payment->amount;
            $traceNo = 'sub-' . time() . '-' . rand(100, 999);

        try {
            
            $checkoutUrl = $this->paymentService->submitRecurring(
                $champion,
                ChampionMembership::from($payment->champion->membership)->name,
                $price,
                $traceNo
            );


            Mail::to($champion->email)->send(new ChampionMonthlyPaymentNotice($champion, $checkoutUrl));

        } catch (\Throwable $e) {
            Log::error('Champion Payment Submission Failed', ['error' => $e->getMessage()]);
        }


            $this->info("Sent recurring payment link to {$champion->email}");
        }

        $this->info("Processed {$payments->count()} recurring payments.");

        
    }

    
}
