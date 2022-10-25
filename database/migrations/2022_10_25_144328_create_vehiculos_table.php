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
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id()->startingValue(2);
            $table->string('codigovehiculo');
            $table->string('tipovehiculo');
            $table->string('modelo');
            $table->string('placa');
            $table->string('soat');
            $table->string('facultad');
            $table->string('escuela');
            $table->unsignedBigInteger('alumno_id');
            $table->foreign('alumno_id')
                    ->references('id')
                    ->on('alumnos')
                    ->onDelete('cascade');
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
        Schema::dropIfExists('vehiculos');
    }
};
