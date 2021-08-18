<?php

namespace App\Models;
use Carbon\Carbon;

/**
 * Class NFE
 * @package App\Models
 */
class NFE extends BaseModel
{
    protected $table = 'notas';
    protected $fillable = [
        'id',
        'numero',
        'codigo_notafiscal',
        'modelo',
        'serie',
        'data_emissao',
        'data_saida',
        'cnpj_em',
        'nome_em',
        'nome_fantasia_em',
        'endereco_em',
        'numero_endereco_em',
        'bairro_em',
        'municipio_em',
        'uf_em',
        'cep_em',
        'pais_em',
        'fone_em',
        'cnpj_dest',
        'nome_dest',
        'nome_fantasia_dest',
        'endereco_dest',
        'numero_endereco_dest',
        'bairro_dest',
        'municipio_dest',
        'uf_dest',
        'cep_dest',
        'pais_dest',
        'fone_dest',
        'valor_total'
    ];

    public function setEmissaoAttribute($date) {
        $this->attributes['data_emissao'] = Carbon::createFromFormat('d/m/Y', $date)->format('Y-m-d');
    }

    public function setSaidaAttribute($date) {
        $this->attributes['data_saida'] = Carbon::createFromFormat('d/m/Y', $date)->format('Y-m-d');
    }

}
