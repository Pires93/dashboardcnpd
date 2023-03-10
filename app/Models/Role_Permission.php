<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role_Permission extends Model
{
    public $timestamps = false;
    protected $table = "role_has_permissions"; 
    protected $primaryKey="id";
    public $incrementing = true;

    
    protected $fillable = [
      'permission_id',
      'role_id', 
      'permission_name',
      'role_name'
    ];
}
