<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('why_section', function (Blueprint $table) {

            $table->id();

            $table->string('title')
                ->default('Why Pakistan?');

            $table->string('sub_title')
                ->default("Pakistan offers dramatic mountain landscapes, historic cities, diverse traditions and rich regional cuisines.");

            $table->string('card1_number')
                ->default('4+');

            $table->string('card1_text')
                ->default('Major Provinces & Regions');


            $table->string('card2_number')
                ->default('10+');

            $table->string('card2_text')
                ->default('Tourist Destinations');


            $table->string('card3_number')
                ->default('5');

            $table->string('card3_text')
                ->default('Ways to Explore Pakistan');


            $table->boolean('is_active')
                ->default(false);


            $table->timestamps();

        });
    }


    public function down(): void
    {
        Schema::dropIfExists('why_section');
    }

};