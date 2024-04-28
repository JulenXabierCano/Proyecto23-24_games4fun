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
        Schema::create('salas', function (Blueprint $table) {
            $table->string('id_sala')->primary();
            $table->string('jugador_1');
            $table->string('jugador_2');
            $table->string('movimiento_j1');
            $table->string('movimiento_j2');
            $table->string('mensaje_j1');
            $table->string('mensaje_j2');
            $table->boolean('publica');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salas');
    }
};
