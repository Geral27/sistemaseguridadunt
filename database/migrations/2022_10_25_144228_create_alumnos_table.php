<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id()->startingValue(5);;
            $table->string('dni');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('codigomatricula');
            $table->string('facultad');
            $table->string('escuela');
            $table->string('telefono');
            $table->string('correo');
            $table->smallInteger('estado')->default(1)->comment('0: inactivo; 1: activo;');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
};
