<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Processo extends Model {
    protected $connection = 'mongodb';
    protected $collection = 'processos';
}