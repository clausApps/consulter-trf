<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Processo extends Model
{
    protected $collection = 'processos';

    protected $fillable = [
        'numero',
        'site_id', 'user_id',
        'dados_extras',
        'arquivos'
    ];

    protected $casts = [
        'dados_extras' => 'array',
        'arquivos' => 'array',
    ];
}
