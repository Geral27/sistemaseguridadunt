<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    public $timestamps = false;
    protected $table= 'alumnos';
    protected $fillabel = [
        'dni', 'nombres', 'apellidos', 'codigomatricula',
        'facultad', 'escuela', 'telefono', 'correo', 'estado',
    ];
}
