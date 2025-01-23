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
        Schema::table('classic_study_topics', function (Blueprint $table) {
            $table->text('title')->nullable()->change();
            $table->text('definition')->nullable()->change();
            $table->text('sub_title')->nullable()->after('title');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('classic_study_topics', function (Blueprint $table) {
            //
        });
    }
};
