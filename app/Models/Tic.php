<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tic extends Model
{
    use HasFactory;
    protected $table = "tics";
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
        'trabalhadores_abrangido_obrigacao_sigilo',
        'rua_direito_acesso',
        'caixapostal_direito_acesso', 
        'local_direito_acesso',
        'ilha_direito_acesso',
        'concelho_direito_acesso',
        'email_direito_acesso',
        'telefone_direito_acesso',
        'forma_direito_acesso', 
        'outrasformas_direito_acesso',
        'parecer_representante_trabalhadore',
        'medidade_seguranca_fisica',
        'medidas_seguranca_logica',
        'regulamento_interno',
        'estado',
         'tipo'
        

    ];

    protected $casts = [
        'finalidade_tratamento' => 'array',
        'trabalhadores_abrangido_obrigacao_sigilo' => 'array',
        'forma_direito_acesso'=>'array'

        ];
}
