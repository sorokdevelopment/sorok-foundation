<?php

namespace App\Models;

use App\Models\Champion;
use App\Enums\PaymentStatus;
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
    ];


    
    protected $casts = [
        'payment' => PaymentStatus::class,
    ];


    public function champion(): BelongsTo
    {
        return $this->belongsTo(Champion::class);
    }
}
