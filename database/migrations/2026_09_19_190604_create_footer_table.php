<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('footer', function (Blueprint $table) {
            $table->id();

            $table->string('instagram_link')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('youtube_link')->nullable();
            $table->string('linkedin_link')->nullable();

            $table->string('description')->default(
                'Discover beautiful destinations, rich cultures and helpful travel information across Pakistan.'
            );

            $table->string('tagline')->default(
                'Explore. Experience. Discover Pakistan.'
            );

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('footer');
    }
};