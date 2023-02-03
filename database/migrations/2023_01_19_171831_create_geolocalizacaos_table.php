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
        Schema::create('geolocalizacaos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('tipo_notificacao')->nullable();
            $table->string('tipo_pessoa')->nullable();
            $table->string('nome_denominacao')->nullable();
            $table->string('nome_comercial')->nullable();
            $table->string('atividade_desenvolvida')->nullable();
            $table->integer('numero_nif')->nullable();
            $table->string('rua_responsavel_tratamento')->nullable();
            $table->string('local_responsavel_tratamento')->nullable();
            $table->string('ilha_responsavel_tratamento')->nullable();
            $table->string('concelho_responsavel_tratamento')->nullable();
            $table->string('caixapostal_responsavel_tratamento')->nullable();
            $table->integer('telefone_responsavel_tratamento')->nullable();
            $table->string('email_responsavel_tratamento')->nullable();
            $table->string('pais_responsavel_tratamento')->nullable();
            $table->string('nome_representante_instalacao')->nullable();
            $table->string('rua_representante_instalacao')->nullable();
            $table->string('caixapostal_representante_instalacao')->nullable();
            $table->string('local_representante_instalacao')->nullable();
            $table->string('ilha_representante_instalacao')->nullable();
            $table->string('concelho_representante_instalacao')->nullable();
            $table->string('nome_pessoa_contato_representante_instalacao')->nullable();
            $table->string('email_pessoa_representante_instalacao')->nullable();
            $table->integer('contato_representante_instalacao')->nullable();
            $table->string('entidade_processamento_informacao')->nullable();
            $table->string('rua_processamento_informacao')->nullable();
            $table->string('caixapostal_processamento_informacao')->nullable();
            $table->string('local_processamento_informacao')->nullable();
            $table->string('ilha_processamento_informacao')->nullable();
            $table->string('concelho_processamento_informacao')->nullable();
            $table->json('finalidade_tratamento')->nullable();
            $table->json('categoria_dados')->nullable();
            $table->json('outros_dados')->nullable();
            $table->string('rua_direito_acesso')->nullable();
            $table->string('caixapostal_direito_acesso')->nullable();
            $table->string('local_direito_acesso')->nullable();
            $table->string('ilha_direito_acesso')->nullable();
            $table->string('concelho_direito_acesso')->nullable();
            $table->string('email_direito_acesso')->nullable();
            $table->integer('contato_direito_acesso')->nullable();
            $table->string('forma_direito_acesso')->nullable();
            $table->string('outraforma_direito_acesso')->nullable();
            $table->string('medidas_fisicas_seguranca')->nullable();
            $table->string('medidas_logicas_seguranca')->nullable();
            $table->string('parecer_representante_trabalhadores')->nullable();
            $table->string('estado')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('geolocalizacaos');
    }
};
