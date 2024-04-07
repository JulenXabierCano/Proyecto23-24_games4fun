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
        Schema::create('salas_hundir_flota', function (Blueprint $table) {
            $table->integer('id_sala')->primary();
            $table->string('jugador_1');
            $table->string('jugador_2');
            $table->string('objetivo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salas_hundir_flota');
    }
};
