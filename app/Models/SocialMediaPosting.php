<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMediaPosting extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'link',
        'description',
        'image',
        'published_at'
    ];


    protected $casts = [
        'published_at' => 'datetime'
    ];


    public function getFormattedDateAttribute()
    {
        return $this->published_at->format('F j, Y');
    }
}
