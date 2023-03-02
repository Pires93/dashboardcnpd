<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DadosContidoEmCadaRegistro extends Model
{
  

    public $timestamps = false;
    protected $table = "dados_contido_em_cada_registros";
    protected $primaryKey="id";
    protected $fillable = [
        'idForm',
        'categorias',
        'finalidades',
       

    ];

    public function forms(){
        return $this->hasOne('App\Models\Tic');
    }

    protected $casts = [
        'categorias' => 'array',
        'finalidades'=> 'array',
         ];
}
