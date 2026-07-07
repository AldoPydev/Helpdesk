<?php

/* CREACION DE LA TABLA TICKETS */

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
        Schema::create('tickets', function (Blueprint $table) {
            // CAMPOS DE TABLA
            $table->id();
            $table->timestamps(); //Campo de creación y actualización del registro
            $table->string("empleado");
            $table->integer("alumno");
            $table->string("medio");
            $table->string("seccion");
            $table->string("solicitud");
            $table->string("categoria");
            $table->string("area");
            $table->string("responsable");
            $table->string("atendio");
            $table->string("descripcion");
            $table->string("solucion");
            $table->string("evidencia");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
