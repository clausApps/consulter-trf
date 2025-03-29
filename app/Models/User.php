<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class User extends Model implements AuthenticatableContract
{
    use Authenticatable;

    protected $collection = 'users';

    protected $fillable = [
        'name', 'email', 'password', 'role'
    ];

    protected $hidden = ['password'];
}
