<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispositivo extends Model
{
    public $timestamps = false;
    protected $table= 'dispositivos';
    protected $primaryKey = 'iddispositivo';
    protected $fillable = [
        'codigodispositivo', 'tipodispositivo', 'marca', 'color',
        'serie', 'id_user', 'facultad' , 'escuela', 'estado',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
        //return $this->hasOne('App\Models\User','id','id');
    }
}
