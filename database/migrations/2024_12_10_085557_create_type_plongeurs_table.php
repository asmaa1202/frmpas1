<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('type_plongeurs', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        DB::table('type_plongeurs')->insert([
            ['id' => 1, 'type' => 'athlète'],
            ['id' => 2, 'type' => 'plongeur'],
            ['id' => 3, 'type' => 'moniteur'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('type_plongeurs');
    }
};
