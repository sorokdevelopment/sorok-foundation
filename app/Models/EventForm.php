<?php

namespace App\Models;

use App\Models\Event;
use App\Enums\ChampionDecision;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EventForm extends Model
{
    protected $fillable = [
        'event_id',
        'email',
        'name',
        'contact_number',
        'decision',
        'notes',
    ];


    protected $casts = [
        'decision' => ChampionDecision::class,
    ];


    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
}
