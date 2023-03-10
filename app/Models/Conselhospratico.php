<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conselhospratico extends Model
{
    public $timestamps = false;
    protected $table = "conselhospraticos"; 
    protected $primaryKey="id";
    public $incrementing = true; 
    protected $fillable = [
      'titulo',
      'descricao',
      'imagem',
      'anexo', 
      'estado',  
    ];
}
