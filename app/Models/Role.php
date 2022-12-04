<?php

namespace App\Models;
use App\Models\Role;
use App\Models\User;

use Laratrust\Models\LaratrustRole;

class Role extends LaratrustRole
{
    public $guarded = [];
    protected $table= 'roles';

    protected $fillable = [
        'name',
        'display_name',
        'description',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
        #return $this->hasOne('App\Models\Rol','idrol','idrol');
    }
}
