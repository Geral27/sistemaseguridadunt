<?php

namespace App\Models;
use App\Models\Role;
use App\Models\Dispositivo;
use App\Models\Vehiculo;
use App\Models\VerificarDis;
use App\Models\VerificarVe;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     *
     */
    protected $table= 'users';
    protected $fillable = [
        'name',
        'email',
        'password',
        'dni',
        'direccion',
        'codigoi',
        'telefono',
        'turno',
        'facultad',
        'escuela',
        'estado',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->hasOne(Role::class, 'role_id', 'id');
        #return $this->hasOne('App\Models\Rol','idrol','idrol');
    }

    public function dispositivos()
    {
        return $this->hasMany(Dispositivo::class);
    }
    public function vehiculos()
    {
        return $this->hasMany(Vehiculo::class);
    }
    public function verificardis()
    {
        return $this->hasMany(VerificarDis::class);
    }
    public function verificarves()
    {
        return $this->hasMany(VerificarVe::class);
    }
}
