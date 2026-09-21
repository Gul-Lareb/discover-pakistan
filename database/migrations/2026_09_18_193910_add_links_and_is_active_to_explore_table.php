<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('explore', function (Blueprint $table) {
            $table->string('card1_link')->nullable();
            $table->string('card2_link')->nullable();
            $table->string('card3_link')->nullable();
            $table->boolean('is_active')->default(false);
        });
    }

    public function down(): void
    {
        Schema::table('explore', function (Blueprint $table) {
            $table->dropColumn(['card1_link','card2_link','card3_link','is_active']);
        });
    }
};