<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'user_name',
        'action',
        'ip_address',
        'user_agent',
        'id_evento',
        'tipo_evento'
        

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
