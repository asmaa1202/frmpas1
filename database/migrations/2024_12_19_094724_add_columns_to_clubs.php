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
        Schema::table('clubs', function (Blueprint $table) {
            $table->string('Statut_document')->nullable();
            $table->string('liste_bureau_document')->nullable();
            $table->string('pv_document')->nullable();
            $table->string('recepisse_document')->nullable();
            $table->string('fiche_technique_document')->nullable();
            $table->string('ompic_document')->nullable();
            $table->string('demande_accreditation_document')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('clubs', function (Blueprint $table) {
            //
        });
    }
};
