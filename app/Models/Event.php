<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Event extends Model
{
    
    protected $fillable = [
        'title',
        'description',
        'location',
        'type_of_events',
        'start_at',
        'slug'
    ];


    protected $casts = [
        'start_at' => 'datetime'
    ];


    public function event_form(): HasOne
    {
        return $this->hasOne(EventForm::class);
    }

    // public function getFormattedDateAttribute()
    // {
    //     return $this->start_at->format('F j, Y');
    // }


}
