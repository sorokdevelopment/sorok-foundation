<?php

namespace App\Models;

use App\Models\Payment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ScholarSponsor extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'contact_number',
        'membership',
        'status'
    ];



    protected function fullName(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->first_name.' '.$this->last_name,
        );
    }


    public function payments()
    {
        return $this->morphMany(Payment::class, 'paymentable');
    }
    
}
