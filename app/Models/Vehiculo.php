<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    public $timestamps = false;
    protected $table= 'vehiculos';
    protected $primaryKey='idvehiculo';
    protected $fillabel = [
        'idvehiculo', 'codigovehiculo', 'tipovehiculo' , 'modelo', 'placa', 'soat', 
        'facultad', 'escuela', 'idalumno' , 'estado',
    ];

    public function alumno()
    {
        return $this->hasOne('App\Models\Alumno','idalumno','idalumno');
    }
}
