<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispositivo extends Model
{
    public $timestamps = false;
    protected $table= 'dispositivos';
    protected $primaryKey='iddispositivo';
    protected $fillabel = [
        'iddispositivo', 'codigodispositivo', 'tipodispositivo', 'marca', 'color', 
        'serie', 'idalumno', 'facultad' , 'escuela', 'estado',
    ];

    public function alumno()
    {
        return $this->hasOne('App\Models\Alumno','idalumno','idalumno');
    }
}
