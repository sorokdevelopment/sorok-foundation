<?php

namespace App\Models;

use Yajra\Address\HasAddress;
use App\Enums\ChampionMembership;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Champion extends Model
{
    use HasAddress;
    
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'birthdate',
        'contact_number',
        'postal_code',
        'street',
        'barangay_id',
        'city_id',
        'province_id',
        'region_id',
        'membership'
    ];



    protected function fullName(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->first_name.' '.$this->last_name,
        );
    }


    protected function fullAddress(): Attribute
    {
        return Attribute::make(
            get: fn () => 
                $this->street . ' ' .
                $this->barangay->name . ' ' .
                $this->city->name . ' ' .
                $this->province->name . ' ' .
                $this->region->name . ' - ' .
                $this->postal_code,
        );
    }





}
