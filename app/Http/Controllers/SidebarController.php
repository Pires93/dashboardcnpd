<?php

namespace App\Http\Controllers;

use App\Models\Sidebar;
use Illuminate\Http\Request;

class SidebarController extends Controller
{
     
    public function index()
    { 
        $side = Sidebar::orderBy('created_at')->get();
        return view('sidebar.index')->with('side',$side);
    }

     
    public function create(Request $request)
    {
       
    }

     
    public function store(Request $request)
    {
        $side = new Sidebar();
        $side->titulo = $request->titulo;
        $side->icon = $request->icon;
        $side->type = $request->type; 
        $side->estado = $request->estado; 
        $side->url=$request->url;
        $side->created_at = date('Y-m-d H:i:s');
        $side->save(); 
        return back()->with('message','Menu criado com sucesso!');
    }

     
    public function show($id)
    {
        $side = Sidebar::find($id);
        return view('sidebar.show')->with('side',$side);
    }



    
    public function edit(Sidebar $sidebar)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        $side = Sidebar::find($id);
        $update=$request->all();
        $side->updated_at=date('Y-m-d H:i:s'); 
        $side->titulo=$request->titulo;
        $side->icon=$request->icon;
        $side->type = $request->type; 
        $side->estado=$request->estado;
        $side->url=$request->url;
        
        $side->save();
        return back()->with('message','Menu editado com sucesso!');
    }
 
     public function destroy($id)
    {
        Sidebar::destroy($id);  
        return redirect('/sidebar')->with('message','Menu eliminado com sucesso!');
    }

    public function habilitar($id)
    {
        $side = Sidebar::find($id);
        $side->estado="Ativo";
        $side->save();
        return back()->with('message','Menu mostrado com sucesso!');
    } 
    public function desabilitar($id)
    {
        $side = Sidebar::find($id);
        $side->estado="Inativo";
        $side->save();
        return back()->with('message','Menu desabilitado com sucesso!');
    } 
}
