<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Log extends Model
{
    protected $collection = 'logs';

    protected $fillable = [
        'user_id', 'processo', 'status', 'mensagem'
    ];
}
