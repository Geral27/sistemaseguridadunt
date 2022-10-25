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
        Schema::create('dispositivos', function (Blueprint $table) {
            $table->id();
            $table->string('codigodispositivo');
            $table->string('tipodispositivo');
            $table->string('marca');
            $table->string('color');
            $table->string('serie');
            $table->unsignedBigInteger('alumno_id');
            $table->foreign('alumno_id')
                    ->references('id')
                    ->on('alumnos')
                    ->onDelete('cascade');
            $table->string('facultad');
            $table->string('escuela');
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
        Schema::dropIfExists('dispositivos');
    }
};
