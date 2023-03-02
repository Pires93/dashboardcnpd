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
        Schema::create('tics', function (Blueprint $table) {
            $table->id();
            $table->string('created_at')->nullable();
            $table->string('updated_at')->nullable();
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
            $table->string('nome_representante_tratamento')->nullable();
            $table->string('rua_representante_tratamento')->nullable();
            $table->string('caixapostal_representante_tratamento')->nullable();
            $table->string('local_representante_tratamento')->nullable();
            $table->string('ilha_representante_tratamento')->nullable();
            $table->string('concelho_representante_tratamento')->nullable();
            $table->string('nome_pessoa_contato')->nullable();
            $table->string('email_representante_tratamento')->nullable();
            $table->integer('telefone_representante_tratamento')->nullable();
            $table->string('entidade_processamento_informacao')->nullable();
            $table->string('rua_entidade_processamento')->nullable();
            $table->string('caixapostal_entidade_processamento')->nullable();
            $table->string('local_entidade_processamento')->nullable();
            $table->string('ilha_entidade_processamento')->nullable();
            $table->string('concelho_entidade_processamento')->nullable();
            $table->string('finalidade_tratamento')->nullable();
            $table->string('trabalhadores_abrangido_obrigacao_sigilo')->nullable();
            $table->string( 'rua_direito_acesso')->nullable();
            $table->string( 'caixapostal_direito_acesso')->nullable();
            $table->string( 'local_direito_acesso')->nullable();
            $table->string( 'ilha_direito_acesso')->nullable();
            $table->string( 'concelho_direito_acesso')->nullable();
            $table->string( 'email_direito_acesso')->nullable();
            $table->string( 'telefone_direito_acesso')->nullable();
            $table->string( 'forma_direito_acesso')->nullable();
            $table->string( 'outrasformas_direito_acesso')->nullable();
            $table->string( 'parecer_representante_trabalhadore')->nullable();
            $table->text( 'medidade_seguranca_fisica')->nullable();
            $table->text( 'medidas_seguranca_logica')->nullable();
            $table->string( 'regulamento_interno')->nullable();
            $table->string( 'estado')->nullable();
            $table->string( 'tipo')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tics');
    }
};
