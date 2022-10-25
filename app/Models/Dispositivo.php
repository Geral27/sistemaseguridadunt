<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispositivo extends Model
{
    public $timestamps = false;
    protected $table= 'dispositivos';
    protected $fillabel = [
        'codigodispositivo', 'tipodispositivo', 'marca', 'color',
        'serie', 'alumno_id', 'facultad' , 'escuela', 'estado',
    ];

    public function alumno()
    {

        return $this->belongsTo(Alumno::class);
        #return $this->hasOne('App\Models\Alumno','idalumno','idalumno');
    }
}
