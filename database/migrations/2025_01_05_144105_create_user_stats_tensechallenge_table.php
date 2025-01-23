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
        Schema::create('user_stats_tensechallenge', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('total_points')->default(0);
            $table->integer('numOfGames')->default(0);
            $table->integer('numOfWins')->default(0);
            $table->integer('numOfLosses')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_stats_tensechallenge');
    }
};
