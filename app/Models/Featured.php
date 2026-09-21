<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Featured extends Model
{
    protected $table='featured';

    protected $fillable=[
        'card1_image','card1_region','card1_title','card1_description','card1_best_for','card1_btn_txt','card1_btn_link',
        'card2_image','card2_region','card2_title','card2_description','card2_best_for','card2_btn_txt','card2_btn_link',
        'card3_image','card3_region','card3_title','card3_description','card3_best_for','card3_btn_txt','card3_btn_link',
        'is_active'
    ];
}