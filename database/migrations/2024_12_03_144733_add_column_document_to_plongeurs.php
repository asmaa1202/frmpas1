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
        Schema::table('plongeurs', function (Blueprint $table) {
            $table->unsignedBigInteger('type_club_id')->nullable();
            $table->foreign('type_club_id')->references('id')->on('type_clubs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('plongeurs', function (Blueprint $table) {
            //
        });
    }
};
