<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biometria extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "biometrias";
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
                 'telefone_responsavel_tratamento',
                 'email_responsavel_tratamento',
                 'pais_responsavel_tratamento',
                 'nome_representante_tratamento',
                 'rua_representante_tratamento',
                 'caixapostal_representante_tratamento',
                 'local_representante_tratamento',
                 'ilha_representante_tratamento',
                'concelho_representante_tratamento',
                'nome_pessoa_contato',
                'email_representante_tratamento',
                'telefone_representante_tratamento',
                'entidade_processamento_informacao',
                'rua_entidade_processamento',
                'caixapostal_entidade_processamento',
               
                'local_entidade_processamento',
                'ilha_entidade_processamento',
                'concelho_entidade_processamento',
                'finalidade_tratamento',
                'numero_funcionarios',
                'dados_registrados',
                'outros_dados',
                'forma_registro',
                'forma_tratamento_informacao',
                'rua_direito_acesso',
                'caixapostal_direito_acesso',
                'local_direito_acesso',
                'ilha_direito_acesso',
                'concelho_direito_acesso',
                'email_direito_acesso',
                'telefone_direito_acesso',
                'forma_direito_acesso',
                'outrasformas_direito_acesso',
                'medidade_seguranca_fisica',
                'medidas_seguranca_logica',
                'parecer_representante_trabalhadore',
                'catalago_equipamento',
                'estado',
                'tipo'

    ];

    protected $casts = [
        'finalidade_tratamento' => 'array',
        'dados_registrados' =>'array',
        'outros_dados' => 'array',
        'forma_registro'=> 'array',
        'forma_tratamento_informacao'=>'array',
        'forma_direito_acesso' => 'array',
         
        ];
}

