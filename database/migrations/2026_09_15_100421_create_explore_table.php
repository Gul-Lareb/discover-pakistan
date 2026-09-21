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
        Schema::create('explore', function (Blueprint $table) {

        $table->id();
        $table->string("title")->default("Explore More");

        // Card 1
        $table->string("card1_title")->default("Culture");
        $table->string("card1_description")
            ->default("Discover regional traditions, cuisine and heritage.");
        $table->string("card1_button")->default("Explore Culture");

        // Card 2
        $table->string("card2_title")->default("Travel Tips");
        $table->string("card2_description")
            ->default("Prepare for a safer and more comfortable journey.");
        $table->string("card2_button")->default("Read Tips");

        // Card 3
        $table->string("card3_title")->default("Visitor Stories");
        $table->string("card3_description")
            ->default("Read experiences and share your own travel story.");
        $table->string("card3_button")->default("View Reviews");

        $table->timestamps();

});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('explore');
    }
};
