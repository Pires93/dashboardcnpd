<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finalidadetratamento extends Model
{
    public $timestamps = false;
    protected $table = "finalidadetratamentos";
    protected $primaryKey="id";
    protected $fillable = [
        'idForm',
        'categorias_finalidade',
        'finalidades',
    ];

    public function forms(){
        return $this->hasOne('App\Models\Interconexao');
    }


    protected $casts = [
       'categorias_finalidade' => 'array',
       'finalidades'=> 'array',
        ];
}
