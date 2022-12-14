<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VerificarDis extends Model
{
    public $timestamps = false;
    protected $table= 'verificardisp';
    //protected $primaryKey = 'idvdisp';
    protected $fillable = [
        'dispositivo_id', 'user_id', 'estado',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
        //return $this->hasOne('App\Models\User','id','id');
    }
    public function dispositivo()
    {
        return $this->belongsTo(Dispositivo::class);
        //return $this->hasOne('App\Models\User','id','id');
    }

}
