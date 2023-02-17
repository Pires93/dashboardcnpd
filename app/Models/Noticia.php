<?php

namespace App\Models;
//use Ramsey\Uuid\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    public $timestamps = false;
    protected $table = "noticias"; 
    protected $primaryKey="id";
    public $incrementing = true;

   /* protected $keyType = 'string';

    public $incrementing = false;

    protected static function boot()
    {
        parent::boot();

        static::creating(function (Model $model) {
            $model->setAttribute($model->getKeyName(), Uuid::uuid4());
        });
    }*/
    protected $fillable = [
      'titulo',
      'subtitulo',
      'conteudo',
      'autor',
      'type',
      'imagem',
      'anexo', 
      'estado',  
    ];
}
