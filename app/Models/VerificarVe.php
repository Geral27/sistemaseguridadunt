<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VerificarVe extends Model
{
    public $timestamps = false;
    protected $table= 'verificarve';
    //protected $primaryKey = 'idvdisp';
    protected $fillable = [
        'vehiculo_id', 'user_id', 'estado',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
        //return $this->hasOne('App\Models\User','id','id');
    }
    public function vehiculo()
    {
        return $this->belongsTo(Vehiculo::class);
        //return $this->hasOne('App\Models\User','id','id');
    }
}
