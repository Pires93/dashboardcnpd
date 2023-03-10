<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipouser extends Model
{
    public $timestamps = false;
    protected $table = "tipousers";
    protected $primaryKey="id";
    protected $fillable = [  
        'name', 
        'estado',  
    ];

    public function tipo_user(){
        return $this->hasMany('App\Models\User');
    }

     

}
