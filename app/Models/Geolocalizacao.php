<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Geolocalizacao extends Model
{
    public $timestamps = false;
    protected $table = "geolocalizacaos";
    protected $primaryKey="id";
    protected $fillable = [
            'tipo_notificacao',
            'tipo_cctv',
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
            'telefone_responsavel_tratamento',
            'email_responsavel_tratamento',
            'pais_responsavel_tratamento',
            'nome_representante_instalacao',
            'rua_representante_instalacao',
            'caixapostal_representante_instalacao',
            'local_representante_instalacao',
            'ilha_representante_instalacao',
            'concelho_representante_instalacao',
            'nome_pessoa_contato_representante_instalacao',
            'email_pessoa_representante_instalacao',
            'contato_representante_instalacao',
            'paisRep',
            'entidade_processamento_informacao',
            'rua_processamento_informacao',
            'caixapostal_processamento_informacao',
            'local_processamento_informacao',
            'ilha_processamento_informacao',
            'concelho_processamento_informacao',
            'finalidade_tratamento',
            'categoria_dados',
            'outros_dados',
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
            'parecer_representante_trabalhadores',
            'estado',
            'tipo'
        ];

        protected $casts = [
           'forma_direito_acesso' => 'array',
           'finalidade_tratamento'=> 'array',
           'categoria_dados'=> 'array',
           'outros_dados'=> 'array',
            ];
}
