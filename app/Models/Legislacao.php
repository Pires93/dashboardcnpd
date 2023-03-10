<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Legislacao extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "legislacaos";
    protected $primaryKey="id";
    protected $fillable = ['titulo','descricao','anexo','estado'];
}
