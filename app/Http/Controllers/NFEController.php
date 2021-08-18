<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class NFEController extends Controller
{
    /**
     * Listar notas de um ou vários clientes
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function listarNotas($id)
    {
        $notas = ""; 	 
        $notas = DB::table('notas')->select('id AS ID', 'numero AS NUMERO', 'nome_em as NOME', 'codigo_notafiscal AS CODIGO','modelo AS MODELO','serie AS SERIE','cnpj_em AS CNPJ','valor_total AS TOTAL')->selectRaw('DATE_FORMAT(data_emissao, \'%d/%m/%Y\') AS EMISSAO')->selectRaw('DATE_FORMAT(data_saida, \'%d/%m/%Y\') AS SAIDA')->get();
        $notasTotal = DB::table('notas')->select('cnpj_em')->selectRaw('SUM(valor_total) as total_notas')->groupByRaw('cnpj_em')->get();
        //Preparar Cabeçalho do GRID
        $header = ['dataHeader' => array('ID','NUMERO','CODIGO','NOME','MODELO','SERIE','EMISSAO','SAIDA','CNPJ','TOTAL')];
        $header = json_encode($header);
        return view('nfe', ['data' => json_encode($notas),'dataHeader'=>$header,'totaisNFE'=>json_encode($notasTotal)]);
        // NFE::findOrFail($id)
    }
    
    /**
     * Listar produtos de uma nota
     *
     * @param  int  $nfe
     * @return \Illuminate\View\View
     */
    public function listarProdutos(Request $request)
    {
        $nfe = $request->input('numero_nfe');
        $produtos = ""; 
        $produtos = DB::table('produtos')->where('numero_nfe', '=', $nfe)->get();
        return response()->json(['dataProdutos' => $produtos]);
    }

}

