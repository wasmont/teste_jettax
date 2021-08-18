<?php

namespace App\Models;

/**
 * Class Invoice
 * @package App\Models
 */
class Invoice extends BaseModel
{
    protected $fillable = [
        'clientId',
        'ide',
        'emit',
        'dest',
        'det',
        'total',
        'transp',
        'cobr',
        'pag',
        'infAdic'
    ];
}
