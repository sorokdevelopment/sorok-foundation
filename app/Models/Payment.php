<?php

namespace App\Models;

use App\Models\Champion;
use App\Enums\PaymentStatus;
use App\Enums\PaymentPlanType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    protected $fillable = [
        'champion_id',
        'status',
        'trace_no',
        'amount',
        'transaction_id',
        'paid_at',
        'next_payment_at',
        'plan_type',
        'meta_data'
    ];


    
    protected $casts = [
        'payment' => PaymentStatus::class,
        'plan_type' => PaymentPlanType::class,
        'meta_data' => 'array',
    ];


    public function getRouteKeyName()
    {
        return 'trace_no';
    }


    public function champion(): BelongsTo
    {
        return $this->belongsTo(Champion::class);
    }
}
