<?php

namespace App\Http\Controllers;

use App\Models\Role_Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Gate;

class RoleUserController extends Controller
{
    
    public function index()
    {
        if (Gate::allows('admin-manager')) {
            $idd=1;
            $upermissions = Role_Permission::all();
            $permissions = Permission::all(); 
            $roles = Role::all(); 
            return view('userpermissions.index')
            ->with('upermissions',$upermissions)
            ->with('permissions',$permissions)
            ->with('roles',$roles)
            ->with('idd',$idd);
         }else{
            //abort(403);
            return back()->with('alerta','Sem permisão!');
        }  
    }

    
    public function create()
    {
        //
    }
 
    public function store(Request $request)
    {
        $rp = new Role_Permission(); 

        $Permissions = explode('_', $request->permissions);
        $roles = explode('_', $request->roles);
        
        $rp->permission_id = $Permissions[0];
        $rp->permission_name = $Permissions[1];
        $rp->role_id = $roles[0];
        $rp->role_name = $roles[1];
        $rp->save(); 
        return back()->with('message','Permissão criado com sucesso!');
    }

     
    public function show(Role_User $role_User)
    {
        //
    }

    
    public function edit(Role_User $role_User)
    {
        //
    }

    
    public function update(Request $request, Role_User $role_User)
    {
        //
    }

     
    public function destroy(Role_User $role_User)
    {
        //
    }
}
