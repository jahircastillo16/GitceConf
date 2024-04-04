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
        Schema::create('actividades', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->unsignedBigInteger('tipo_actividad_id');
            $table->unsignedBigInteger('evento_id');
            $table->date('fecha_actividad');
            $table->timestamps();
            $table->foreign('tipo_actividad_id')->references('id')->on('tipo_actividades');
            $table->foreign('evento_id')->references('id')->on('eventos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actividades');
    }
};
