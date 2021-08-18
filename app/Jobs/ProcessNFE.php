<?php

namespace App\Jobs;

use App\Models\NFE;
use App\Models\Produtos;
use Illuminate\Support\Facades\Log;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProcessNFE implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {        
        $nota = array();
        $produtos = array();
        for ($i = 0; $i <= 100; $i++) {
            $xml = simplexml_load_file(public_path('/sample.xml'));
            $json = json_encode($xml);
            $array = json_decode($json,true);

            //Nota
            $nota['numero'] = $array['NFe']['infNFe']['ide']['nNF'];    
            $nota['codigo_notafiscal'] = $array['NFe']['infNFe']['ide']['cNF'];    
            $nota['modelo'] = $array['NFe']['infNFe']['ide']['mod'];    
            $nota['serie'] = $array['NFe']['infNFe']['ide']['serie'];        
            $nota['data_emissao'] = substr($array['NFe']['infNFe']['ide']['dhEmi'],0,-15);    
            $nota['data_saida'] = substr($array['NFe']['infNFe']['ide']['dhSaiEnt'],0,-15); //date("Y-m-d",'');    
            
            $nota['cnpj_em'] = $array['NFe']['infNFe']['emit']['CNPJ'];    
            $nota['nome_em'] = $array['NFe']['infNFe']['emit']['xNome'];    
            $nota['nome_fantasia_em'] = $array['NFe']['infNFe']['emit']['xFant'];    
            $nota['endereco_em'] = $array['NFe']['infNFe']['emit']['enderEmit']['xLgr'];    
            $nota['numero_endereco_em'] = $array['NFe']['infNFe']['emit']['enderEmit']['nro'];    
            $nota['bairro_em'] = $array['NFe']['infNFe']['emit']['enderEmit']['xBairro'];    
            $nota['municipio_em'] = $array['NFe']['infNFe']['emit']['enderEmit']['xMun'];    
            $nota['uf_em'] = $array['NFe']['infNFe']['emit']['enderEmit']['UF'];    
            $nota['cep_em'] = $array['NFe']['infNFe']['emit']['enderEmit']['CEP'];    
            $nota['pais_em'] = $array['NFe']['infNFe']['emit']['enderEmit']['xPais'];    
            $nota['fone_em'] = $array['NFe']['infNFe']['emit']['enderEmit']['fone'];    
            
            $nota['cnpj_dest'] = $array['NFe']['infNFe']['dest']['CNPJ'];     
            $nota['nome_dest'] = $array['NFe']['infNFe']['dest']['xNome'];    
            $nota['nome_fantasia_dest'] = $array['NFe']['infNFe']['dest']['xNome'];    
            $nota['endereco_dest'] = $array['NFe']['infNFe']['dest']['enderDest']['xLgr'];    
            $nota['numero_endereco_dest'] = $array['NFe']['infNFe']['dest']['enderDest']['nro'];    
            $nota['bairro_dest'] = $array['NFe']['infNFe']['dest']['enderDest']['xBairro'];    
            $nota['municipio_dest'] = $array['NFe']['infNFe']['dest']['enderDest']['xMun'];    
            $nota['uf_dest'] = $array['NFe']['infNFe']['dest']['enderDest']['UF'];    
            $nota['cep_dest'] = $array['NFe']['infNFe']['dest']['enderDest']['CEP'];    
            $nota['pais_dest'] = $array['NFe']['infNFe']['dest']['enderDest']['xPais'];    
            $nota['fone_dest'] = $array['NFe']['infNFe']['dest']['enderDest']['fone'];    
            $nota['valor_total'] = $array['NFe']['infNFe']['total']['ICMSTot']['vNF'];    
        }
        
        // Verificar se a nota já não havia sido gravada anteriormente no banco de dados / se já estiver sido não faz nada
        $buscaNota = NFE::where('codigo_notafiscal', $nota['codigo_notafiscal'])->first();
        if(empty($buscaNota)){
            $setNota = NFE::create($nota);
        
            //Produtos
            if(!empty($setNota)){
                foreach($array['NFe']['infNFe']['det'] as $item){
                    $produtos['codigo'] = $item['prod']['cProd'];
                    $produtos['numero_nfe'] = $array['NFe']['infNFe']['ide']['cNF'];
                    $produtos['nome'] = $item['prod']['xProd'];
                    $produtos['ncm'] = $item['prod']['NCM'];
                    $produtos['cfop'] = $item['prod']['CFOP'];
                    $produtos['valor'] = $item['prod']['vProd'];
                    Produtos::create($produtos);
                }    
            }
        }
    }
}
