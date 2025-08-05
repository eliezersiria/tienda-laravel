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
        Schema::table('marcas_vehiculos', function (Blueprint $table) {
            // Esto agrega una columna 'deleted_at' que permite valores NULL
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('marcas_vehiculos', function (Blueprint $table) {
            // Elimina la columna 'deleted_at' si haces rollback
            $table->dropSoftDeletes();
        });
    }
};
