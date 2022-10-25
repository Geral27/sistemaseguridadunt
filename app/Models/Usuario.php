<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public $timestamps = false;
    protected $table= 'usuarios';
    protected $fillabel = [
        'nombres', 'apellidos', 'email', 'idrol',
        'usuario', 'contraseña', 'estado',
    ];

    public function rol()
    {
        return $this->belongsTo(Alumno::class);
        #return $this->hasOne('App\Models\Rol','idrol','idrol');
    }
}
