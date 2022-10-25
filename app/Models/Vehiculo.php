<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    public $timestamps = false;
    protected $table= 'vehiculos';
    protected $fillabel = [
        'codigovehiculo', 'tipovehiculo' , 'modelo', 'placa', 'soat',
        'facultad', 'escuela', 'alumno_id' , 'estado',
    ];

    public function alumno()
    {
        return $this->belongsTo(Alumno::class);
        #return $this->hasOne('App\Models\Alumno','alumno_id','alumno_id');
    }
}
