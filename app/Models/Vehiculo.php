<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    public $timestamps = false;
    protected $table= 'vehiculos';
    protected $fillable = [
        'codigovehiculo', 'tipovehiculo' , 'modelo', 'placa', 'soat',
        'facultad', 'escuela', 'user_id' , 'estado',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
        //return $this->hasOne('App\Models\User','id','id');
    }
}
