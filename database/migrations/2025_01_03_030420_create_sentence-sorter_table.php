<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sentence-sorter_table', function (Blueprint $table) {
            $table->id();
            $table->text('sentence'); 
            $table->enum('type', ['declarative', 'interrogative', 'imperative', 'exclamatory']);
            $table->enum('difficulty', ['easy', 'mid', 'hard']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sentence-sorter_table');
    }
};
