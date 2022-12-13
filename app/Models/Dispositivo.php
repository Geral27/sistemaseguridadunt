<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Dispositivo extends Model
{
    public $timestamps = false;
    protected $table= 'dispositivos';
    protected $fillable = [
        'codigodispositivo', 'tipodispositivo', 'marca', 'color',
        'serie', 'user_id', 'facultad' , 'escuela', 'estado',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
