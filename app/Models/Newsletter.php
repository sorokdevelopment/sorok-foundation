<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Newsletter extends Model
{
    use HasFactory; 

    protected $fillable = [
        'title',
        'slug',
        'description',
        'thumbnail',
        'published_at',
        'content'
    ];


    protected $casts = [
        'published_at' => 'datetime'
    ];


    public function getFormattedDateAttribute()
    {
        return $this->published_at->format('F j, Y');
    }
}
