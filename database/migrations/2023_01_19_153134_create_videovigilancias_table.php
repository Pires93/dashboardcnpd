<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videovigilancias', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('finalidade_cctv');
            $table->string('tipo_notificacao');
            $table->string('tipo_cctv');
            $table->string('tipo_pessoa');
            $table->string('nome_denominacao');
            $table->string('nome_comercial');
            $table->string('atividade_desenvolvida');
            $table->integer('numero_nif');
            $table->string('rua_responsavel_tratamento');
            $table->string('local_responsavel_tratamento');
            $table->string('ilha_responsavel_tratamento');
            $table->string('concelho_responsavel_tratamento');
            $table->string('caixapostal_responsavel_tratamento');
            $table->integer('telefone_responsavel_tratamento');
            $table->string('email_responsavel_tratamento');
            $table->string('pais_responsavel_tratamento');
            $table->string('nome_representante_instalacao');
            $table->string('rua_representante_instalacao');
            $table->string('caixapostal_representante_instalacao');
            $table->string('local_representante_instalacao');
            $table->string('ilha_representante_instalacao');
            $table->string('concelho_representante_instalacao');
            $table->string('nome_pessoa_contato_representante_instalacao');
            $table->string('email_pessoa_representante_instalacao');
            $table->integer('contato_representante_instalacao');
            $table->string('entidade_processamento_informacao');
            $table->string('rua_processamento_informacao');
            $table->string('caixapostal_processamento_informacao');
            $table->string('local_processamento_informacao');
            $table->string('ilha_processamento_informacao');
            $table->string('concelho_processamento_informacao');
            $table->string('numero_camaras');
            $table->json('zonas_abrangidas')->nullable();
            $table->string('local_transmissao_imagens');
            $table->string('quem_tem_acesso_imagens');
            $table->string('outraszonas_abrangidas');
            $table->string('rua_direito_acesso');
            $table->string('caixapostal_direito_acesso');
            $table->string('local_direito_acesso');
            $table->string('ilha_direito_acesso');
            $table->string('concelho_direito_acesso');
            $table->string('email_direito_acesso');
            $table->integer('contato_direito_acesso');
            $table->string('forma_direito_acesso');
            $table->string('outraforma_direito_acesso');
            $table->string('medidas_fisicas_seguranca');
            $table->string('medidas_logicas_seguranca');
            $table->string('parecer_representante_trabalhadores');
            $table->string('estado');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videovigilancias');
    }
};
