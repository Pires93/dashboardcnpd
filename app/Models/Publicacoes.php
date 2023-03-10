<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacoes extends Model
{
    public $timestamps = false;
    protected $table = "publicacoes";
    protected $primaryKey="id";
    protected $fillable = [  
       'num_doc',
       'titulo',
        'imagem',
        'anexo',
        'link',
        'descricao',
        'type', 
        'estado',
    ]; 
      
}
