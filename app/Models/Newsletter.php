<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'thumbnail',
        'published_at',
        'content'
    ];


    protected $casts = [
        'published_at' => 'date'
    ];
}
