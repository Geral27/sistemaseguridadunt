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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id()->startingValue(4);
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('email');
            $table->unsignedBigInteger('rol_id');
            $table->foreign('rol_id')
                ->references('id')
                ->on('roles')
                ->onDelete('cascade');
            $table->string('usuario');
            $table->string('contraseña');
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
        Schema::dropIfExists('usuarios');
    }
};
