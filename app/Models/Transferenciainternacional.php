<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transferenciainternacional extends Model
{
    public $timestamps = false;
    protected $table = "transferenciainternacionais";
    protected $primaryKey="id";
    protected $fillable = [
        'idForm',
        'entidades',
        'pais',
        'dados_transferidos',
        'fundamento',
    ];

    public function forms(){
        return $this->hasOne('App\Models\Interconexao');
    }
    public function formsGeral(){
        return $this->hasOne('App\Models\Geral');
    }
}
