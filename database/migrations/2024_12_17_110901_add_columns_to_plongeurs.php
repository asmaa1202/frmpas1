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
            $table->string('titulaire_enfant')->nullable();
            $table->string('act_naissance_document')->nullable();
            $table->string('engagement_document')->nullable();
            $table->string('cin_document')->nullable();
            $table->string('document_medicale')->nullable();
            // $table->string('type_sports')->unique()->nullable();
            // $table->unsignedBigInteger('type_sport_id')->nullable();
            // $table->foreign('type_sport_id')->references('id')->on('type_sports');
            
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
