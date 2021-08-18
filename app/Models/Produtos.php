<?php

namespace App\Models;

/**
 * Class Produtos
 * @package App\Models
 */
class Produtos extends BaseModel
{
    protected $table = 'produtos';
    protected $fillable = [
        'id',
        'codigo',
        'numero_nfe',
        'nome',
        'ncm',
        'cfop',
        'valor'
    ];
}
