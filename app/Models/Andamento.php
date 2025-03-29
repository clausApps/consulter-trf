<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Andamento extends Model
{
    protected $collection = 'andamentos';

    protected $fillable = [
        'processo_id', 'user_id', 'descricao', 'data'
    ];

    protected $casts = [
        'data' => 'datetime'
    ];
}
