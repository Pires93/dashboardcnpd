<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sidebar extends Model
{
    public $timestamps = false;
    protected $table = "sidebars";
    protected $primaryKey="id";
    protected $fillable = [  
        'titulo',
        'icon',
        'estado', 
        'type', 
        'url', 
    ];
}
