<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::table('featured', function (Blueprint $table) {


            // Section Button
            $table->string('btn_txt')->nullable();
            $table->string('btn_link')->nullable();


            // Card 1 Button
            $table->string('card1_btn_txt')->nullable();
            $table->string('card1_btn_link')->nullable();


            // Card 2 Button
            $table->string('card2_btn_txt')->nullable();
            $table->string('card2_btn_link')->nullable();


            // Card 3 Button
            $table->string('card3_btn_txt')->nullable();
            $table->string('card3_btn_link')->nullable();


        });
    }



    public function down(): void
    {
        Schema::table('featured', function (Blueprint $table) {


            $table->dropColumn([

                'btn_txt',
                'btn_link',

                'card1_btn_txt',
                'card1_btn_link',

                'card2_btn_txt',
                'card2_btn_link',

                'card3_btn_txt',
                'card3_btn_link',

            ]);


        });
    }

};