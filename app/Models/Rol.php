<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    public $timestamps = false;
    protected $table= 'roles';
    protected $primaryKey='idrol';
    protected $fillabel = [
        'idrol', 'descripcion','estado',
    ];
}
