<?php

namespace App\Models;

use App\Models\User;
use Spatie\Permission\Models\Role;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role_User extends Model
{
    public $timestamps = false;
    protected $table = "role_user"; 
    protected $primaryKey="id";
    public $incrementing = true;

    
    protected $fillable = [
      'user_id',
      'role_id', 
    ];

    public function users(){
        return $this->hasMany('App\Models\User');
    } 

    public function roles(){
        return $this->hasMany('Spatie\Permission\Models\Role');
    }
}
