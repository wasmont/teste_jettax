<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->increments('id');
            
            //Cabe�alho NFE
            // $table->integer('codigo_cliente'); // Se o cliente j� existir no sistema deveria ter a referencia do mesmo para a nota em quest�o / por�m para este teste n�o tenho esta base de cadastro de clientes dispon�vel, motivo sem a grava��o com o c�digo do cliente 		
            $table->integer('numero'); 		
            $table->integer('codigo_notafiscal'); 		
            $table->integer('modelo'); 		
            $table->string('serie',10);
            $table->date('data_emissao');
            $table->date('data_saida');

            // _em : Emitente
            $table->string('cnpj_em',100); 		
            $table->string('nome_em',200); 		
            $table->string('nome_fantasia_em',200); 		
            $table->string('endereco_em',200); 		
            $table->integer('numero_endereco_em'); 		
            $table->string('bairro_em',200); 		
            $table->string('municipio_em',200); 		
            $table->string('uf_em',100); 		
            $table->string('cep_em',100); 		
            $table->string('pais_em',100); 		
            $table->string('fone_em',100); 		
            
            // _dest: Destinat�rio 
            $table->string('cnpj_dest',100); 		
            $table->string('nome_dest',200); 		
            $table->string('nome_fantasia_dest',200); 		
            $table->string('endereco_dest',200); 		
            $table->integer('numero_endereco_dest'); 		
            $table->string('bairro_dest',200); 		
            $table->string('municipio_dest',200); 		
            $table->string('uf_dest',100); 		
            $table->string('cep_dest',100); 		
            $table->string('pais_dest',100); 		
            $table->string('fone_dest',100); 		
            

            $table->decimal('valor_total', $precision = 10, $scale = 2);
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->collation = 'utf8mb4_unicode_ci';
            
        });
    }
    // $table->timestamps();

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notas');
    }
}
