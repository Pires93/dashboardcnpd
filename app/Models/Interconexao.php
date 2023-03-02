<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interconexao extends Model
{
    public $timestamps = false;
    protected $table = "interconexaos";
    protected $primaryKey="id";
    protected $fillable = [
       'tipo_notificacao',
       'tipo_pessoa',
       'nome_denominacao',
       'nome_comercial',
       'atividade_desenvolvida',
        'numero_nif',
       'rua_responsavel_tratamento',
       'local_responsavel_tratamento',
       'ilha_responsavel_tratamento',
       'concelho_responsavel_tratamento',
       'caixapostal_responsavel_tratamento',
        'contato_responsavel_tratamento',
       'email_responsavel_tratamento',
       'pais_responsavel_tratamento',
       'nome_representante_instalacao',
       'rua_representante_instalacao',
       'caixapostal_representante_instalacao',
       'local_representante_instalacao',
       'ilha_representante_instalacao',
       'pais_representante_instalacao',
       'concelho_representante_instalacao',
       'nome_pessoa_contato_representante_instalacao',
       'email_pessoa_representante_instalacao',
        'contato_representante_instalacao',
       'entidade_processamento_informacao',
       'rua_processamento_informacao',
       'caixapostal_processamento_informacao',
       'local_processamento_informacao',
       'ilha_processamento_informacao',
       'concelho_processamento_informacao',
       'tipo_pessoaSR',
       'nome_denominacaoSR',
       'nome_comercialSR',
       'atividade_desenvolvidaSR',
        'numero_nifSR',
       'rua_responsavel_tratamentoSR',
       'local_responsavel_tratamentoSR',
       'ilha_responsavel_tratamentoSR',
       'concelho_responsavel_tratamentoSR',
       'caixapostal_responsavel_tratamentoSR',
       'contato_responsavel_tratamentoSR',
       'email_responsavel_tratamentoSR',
       'pais_responsavel_tratamentoSR',
       'nome_representante_instalacaoSR',
       'rua_representante_instalacaoSR',
       'caixapostal_representante_instalacaoSR',
       'local_representante_instalacaoSR',
       'ilha_representante_instalacaoSR',
       'concelho_representante_instalacaoSR',
       'pais_representante_instalacaoSR',
       'nome_pessoa_contato_representante_instalacaoSR',
       'email_pessoa_representante_instalacaoSR',
        'contato_representante_instalacaoSR',
       'entidade_processamento_informacaoSR',
       'rua_processamento_informacaoSR',
       'caixapostal_processamento_informacaoSR',
       'local_processamento_informacaoSR',
       'ilha_processamento_informacaoSR',
       'concelho_processamento_informacaoSR',
       'descricao_forma_interconexao',
       'outraFinalidadeTratamento',       
       'dados_pessoais_tratado',
       'outros_dados_art8e11',
       'listadados_pessoais_tratados',
       'prazo_conservacao_dados',
       'rua_direito_acesso',
       'caixapostal_direito_acesso',
       'local_direito_acesso',
       'ilha_direito_acesso',
       'concelho_direito_acesso',
       'email_direito_acesso',
       'contato_direito_acesso',
       'forma_direito_acesso',
       'outraforma_direito_acesso',
       'medidas_fisicas_seguranca',
       'medidas_logicas_seguranca',
       'estado',
       'tipo'



        ];

        protected $casts = [
            'dados_pessoais_tratado' => 'array',
            'forma_direito_acesso' => 'array'
            ];


        public function finalidade_tratament(){
            return $this->hasMany('App\Models\Finalidadetratamento');
        }

        public function comunicacao_terceiros(){
            return $this->hasMany('App\Models\Comunicacaoterceiro');
        }

}
