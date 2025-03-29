<?php
namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class PrecatórioNegociado extends Model {
    protected $connection = 'mongodb';
    protected $collection = 'precatorios';

    protected $fillable = [
        'processo_id', 'valor_negociado', 'parte_vendedora',
        'comprador', 'data_negociacao', 'status', 'observacoes'
    ];
}