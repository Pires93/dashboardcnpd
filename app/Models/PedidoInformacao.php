<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoInformacao extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "pedido_informacao";
    protected $primaryKey="id";
    protected $fillable = ['num_p','nome','morada','telefone','email','assunto','duvida','resposta','estado'];
}


