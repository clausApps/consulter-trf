<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Site extends Model
{
    protected $collection = 'sites';

    protected $fillable = [
        'nome',
        'url',
        'login_field',
        'password_field', 'campos_interesse'
    ];
}


    protected $casts = [
        'campos_interesse' => 'array'
    ];
