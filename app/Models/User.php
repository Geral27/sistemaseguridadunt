<?php

namespace App\Models;
use App\Models\Role;
use App\Models\User;
use App\Models\Dispositivo;
use App\Models\Vehiculo;
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

    public function dispositivo()
    {
        return $this->hasMany(Dispositivo::class,'iddispositivo','iddispositivo');
    }
    public function vehiculo()
    {
        return $this->hasMany(Vehiculo::class,'idvehiculo','idvehiculo');
    }
}
