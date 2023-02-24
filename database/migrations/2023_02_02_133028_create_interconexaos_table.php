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
        Schema::create('interconexaos', function (Blueprint $table) {
            $table->id();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
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
            $table->integer('contato_responsavel_tratamento')->nullable();
            $table->string('email_responsavel_tratamento')->nullable();
            $table->string('pais_responsavel_tratamento')->nullable();
            $table->string('nome_representante_instalacao')->nullable();
            $table->string('rua_representante_instalacao')->nullable();
            $table->string('caixapostal_representante_instalacao')->nullable();
            $table->string('local_representante_instalacao')->nullable();
            $table->string('ilha_representante_instalacao')->nullable();
            $table->string('pais_representante_instalacao')->nullable();
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
            $table->string('tipo_pessoaSR')->nullable();
            $table->string('nome_denominacaoSR')->nullable();
            $table->string('nome_comercialSR')->nullable();
            $table->string('atividade_desenvolvidaSR')->nullable();
            $table->integer('numero_nifSR')->nullable();
            $table->string('rua_responsavel_tratamentoSR')->nullable();
            $table->string('local_responsavel_tratamentoSR')->nullable();
            $table->string('ilha_responsavel_tratamentoSR')->nullable();
            $table->string('concelho_responsavel_tratamentoSR')->nullable();
            $table->string('caixapostal_responsavel_tratamentoSR')->nullable();
            $table->integer('contato_responsavel_tratamentoSR')->nullable();
            $table->string('email_responsavel_tratamentoSR')->nullable();
            $table->string('pais_responsavel_tratamentoSR')->nullable();
            $table->string('nome_representante_instalacaoSR')->nullable();
            $table->string('rua_representante_instalacaoSR')->nullable();
            $table->string('caixapostal_representante_instalacaoSR')->nullable();
            $table->string('local_representante_instalacaoSR')->nullable();
            $table->string('ilha_representante_instalacaoSR')->nullable();
            $table->string('concelho_representante_instalacaoSR')->nullable();
            $table->string('pais_representante_instalacaoSR')->nullable();
            $table->string('nome_pessoa_contato_representante_instalacaoSR')->nullable();
            $table->string('email_pessoa_representante_instalacaoSR')->nullable();
            $table->integer('contato_representante_instalacaoSR')->nullable();
            $table->string('entidade_processamento_informacaoSR')->nullable();
            $table->string('rua_processamento_informacaoSR')->nullable();
            $table->string('caixapostal_processamento_informacaoSR')->nullable();
            $table->string('local_processamento_informacaoSR')->nullable();
            $table->string('ilha_processamento_informacaoSR')->nullable();
            $table->string('concelho_processamento_informacaoSR')->nullable();
            $table->string('descricao_forma_interconexao')->nullable();
            $table->text('outraFinalidadeTratamento')->nullable();
            $table->json('dados_pessoais_tratado')->nullable(); 
            $table->text('outros_dados_art8e11')->nullable();
            $table->text('listadados_pessoais_tratados')->nullable(); 
            $table->text('prazo_conservacao_dados')->nullable(); 
            $table->string('rua_direito_acesso')->nullable();
            $table->string('caixapostal_direito_acesso')->nullable();
            $table->string('local_direito_acesso')->nullable();
            $table->string('ilha_direito_acesso')->nullable();
            $table->string('concelho_direito_acesso')->nullable();
            $table->string('email_direito_acesso')->nullable();
            $table->integer('contato_direito_acesso')->nullable();
            $table->string('forma_direito_acesso')->nullable();
            $table->text('outraforma_direito_acesso')->nullable();
            $table->text('medidas_fisicas_seguranca')->nullable();
            $table->text('medidas_logicas_seguranca')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interconexaos');
    }
};
