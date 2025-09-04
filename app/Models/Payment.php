<?php

namespace App\Models;

use App\Models\Champion;
use App\Enums\PaymentStatus;
use App\Enums\PaymentPlanType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    protected $fillable = [
        'status',
        'trace_no',
        'amount',
        'transaction_id',
        'paid_at',
        'next_payment_at',
        'plan_type',
        'meta_data',
        'champion_id',
        'paymentable_id',
        'paymentable_type',
        'month_of_payment',
    ];


    
    protected $casts = [
        'plan_type' => PaymentPlanType::class,
        'meta_data' => 'array',
    ];

    public function champion(): BelongsTo
    {
        return $this->belongsTo(Champion::class);
    }


    public function getRouteKeyName()
    {
        return 'trace_no';
    }

    public function paymentable(): MorphTo
    {
        return $this->morphTo();
    }

}
