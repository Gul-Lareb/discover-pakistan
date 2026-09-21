<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Explore extends Model
{
    protected $table = 'explore';

    protected $fillable = [
        'card1_title',
        'card1_description',
        'card1_button',
        'card1_link',

        'card2_title',
        'card2_description',
        'card2_button',
        'card2_link',

        'card3_title',
        'card3_description',
        'card3_button',
        'card3_link',

        'is_active'
    ];
}