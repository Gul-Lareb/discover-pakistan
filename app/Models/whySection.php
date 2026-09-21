<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WhySection extends Model
{
    protected $table = 'why_section';

    protected $fillable = [
        'title',
        'sub_title',
        'card1_number',
        'card1_text',
        'card2_number',
        'card2_text',
        'card3_number',
        'card3_text',
    ];
}