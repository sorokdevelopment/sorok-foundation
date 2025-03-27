<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialMediaPosting extends Model
{
    protected $fillable = [
        'title',
        'link',
        'description',
        'image',
        'published_at'
    ];


    protected $casts = [
        'published_at' => 'date'
    ];
}
