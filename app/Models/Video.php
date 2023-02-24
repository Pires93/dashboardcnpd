<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public $timestamps = false;
    protected $table = "videos";
    protected $primaryKey="id";
    protected $fillable = [  
       
         'titulo',
         'anexo',
         'link',
         'capa',
         'type',
         'estado',
    ];
}
