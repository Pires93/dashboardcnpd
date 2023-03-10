<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Queixa extends Model
{
    public $timestamps = false;
    protected $table = "queixas";
    protected $primaryKey="id";
    protected $fillable = [  
       'num_q',
       'nome_queixoso',
        'morada_queixoso',
        'telefone_queixoso',
        'email_queixoso',
        'entidade_queixa',
        'morada_queixa',
        'telefone_queixa',
        'email_queixa',
         'assunto_queixa',
         'descricao_queixa',
         'anexo_queixa',
        'estado',
    ];
}
