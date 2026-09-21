<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    protected $table = 'footer';

    protected $fillable = [
        'instagram_link',
        'facebook_link',
        'youtube_link',
        'linkedin_link',
        'description',
        'tagline'
    ];
}