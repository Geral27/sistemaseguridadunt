<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vigilante extends Model
{
    public $timestamps = false;
    protected $table= 'vigilantes';
    protected $fillabel = [
        'id', 'nombres', 'apellidos', 'dni', 'turno', 'estado'
    ];
}
