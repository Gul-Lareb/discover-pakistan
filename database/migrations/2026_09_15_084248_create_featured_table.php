<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('featured', function (Blueprint $table) {

    $table->id();

    $table->string("title")->default("Featured Destinations");
    $table->string("sub_title")->default("Start with some of Pakistan's most iconic places.");

    // Card 1
    $table->string("card1_image")->nullable();
    $table->string("card1_region")->default("Gilgit-Baltistan");
    $table->string("card1_title")->default("Hunza Valley");
    $table->string("card1_description")->default("Mountain scenery, historic forts and peaceful valleys.");
    $table->string("card1_best_for")->default("Nature, hiking, photography");

    // Card 2
    $table->string("card2_image")->nullable();
    $table->string("card2_region")->default("Gilgit-Baltistan");
    $table->string("card2_title")->default("Skardu");
    $table->string("card2_description")->default("Lakes, deserts, valleys and dramatic mountain landscapes.");
    $table->string("card2_best_for")->default("Adventure, trekking, lakes");

    // Card 3
    $table->string("card3_image")->nullable();
    $table->string("card3_region")->default("Punjab");
    $table->string("card3_title")->default("Lahore");
    $table->string("card3_description")->default("Mughal heritage, traditional markets and famous food.");
    $table->string("card3_best_for")->default("History, culture, food");

    $table->timestamps();

});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('featured');
    }
};
