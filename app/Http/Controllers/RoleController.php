<?php

namespace App\Http\Controllers;
 
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Gate;

class RoleController extends Controller
{
     
    public function index()
    { 
         
            if (Gate::allows('admin-manager')) {
                $roles = Role::orderBy('created_at')->get();
                return view('roles.index')->with('roles',$roles);
            
             }else{
                //abort(403);
                return back()->with('alerta','Sem permisão!');
            }  
    } 
     
    public function store(Request $request)
    {
        $role = new Role();
        $role->name = $request->name;
        $role->guard_name = $request->guard_name; 
        $role->created_at = date('Y-m-d H:i:s');
        $role->save(); 
        return back()->with('message','Role criado com sucesso!');
    }

     
    public function show($id)
    { 
            $role = Role::find($id);
            return view('roles.show')->with('role',$role);
         
    } 
    
    public function update(Request $request, $id)
    {
        $role = Role::find($id);
        $update=$request->all();
        $role->updated_at=date('Y-m-d H:i:s'); 
        $role->name=$request->name;
        $role->guard_name=$request->guard_name; 
        
        $role->save();
        return back()->with('message','Role editado com sucesso!');
    }
 
     public function destroy($id)
    {
        Role::destroy($id);  
        return redirect('/roles')->with('message','Role eliminado com sucesso!');
    }
 
}
