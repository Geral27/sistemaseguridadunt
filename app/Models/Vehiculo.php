<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    public $timestamps = false;
    protected $table= 'vehiculos';
    protected $primaryKey = 'idvehiculo';
    protected $fillable = [
        'codigovehiculo', 'tipovehiculo' , 'modelo', 'placa', 'soat',
        'facultad', 'escuela', 'id_user' , 'estado',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
        //return $this->hasOne('App\Models\User','id','id');
    }
}
