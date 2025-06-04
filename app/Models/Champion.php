<?php

namespace App\Models;

use Yajra\Address\HasAddress;
use App\Enums\ChampionMembership;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Champion extends Model
{
    
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'contact_number',
        'membership'
    ];



    protected function fullName(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->first_name.' '.$this->last_name,
        );
    }






}
