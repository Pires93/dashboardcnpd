<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Legislacao;
use Illuminate\Http\Request; 
use Datatables;

use Illuminate\Support\Facades\Gate;
class LegislacaoController extends Controller
{

    public function index()
    {
        if (Gate::allows('admin-manager')) {
            $leis = Legislacao::orderBy('created_at')->get(); 
            return view('legislacao.index')->with('leis',$leis);
        }else{
            //abort(403);
            return back()->with('alerta','Sem permisão!');
        } 
    } 


    public function store(Request $request)
    {
        $leis = new Legislacao();
        $leis->titulo=$request->titulo;
        $leis->descricao=$request->descricao;
        $leis->estado=$request->estado; 
        if($request->anexo) { 
            $nameBd=now().'.'.$request->anexo->extension(); 
          $capaname = $request->anexo->storeAs('legislacaoPdf',$nameBd);//renomear noime da imagem na pasta 
          $leis->anexo=$nameBd;
        }   
        $leis->created_at=date('Y-m-d H:i:s');
        $leis->save();

        return redirect('/legislacao')->with('message','Legislação publicada com sucesso!');
    }

    public function show($id)
    {
        $leis = Legislacao::find($id);
        return view('legislacao.show')->with('leis',$leis);
    }  

    
    public function update(Request $request, $id)
    {
        $leis = Legislacao::find($id);
        $editarDados=$request->all();
        $leis->updated_at=date('Y-m-d H:i:s'); 
        $leis->titulo=$request->titulo;
        $leis->estado=$request->estado;
        $leis->descricao=$request->descricao;
        if($request->anexo) { 
            $nameBd=now().'.'.$request->anexo->extension(); 
          $capaname = $request->anexo->storeAs('legislacaoPdf',$nameBd);//renomear noime da imagem na pasta 
          $leis->anexo=$nameBd;
        }  
        $leis->save();
        //$leis->update($editarDados);

        return back()->with('message','Legislação editada com sucesso!');

       
    }
    public function unpublishl($id)
    {
        $leis = Legislacao::find($id);
        $leis->estado="Despublicado";
        $leis->save();
        return back()->with('message','Legislação despublicada com sucesso!');
    } 

    public function publishl($id)
    {
        $leis = Legislacao::find($id);
        $leis->estado="Publicado";
        $leis->save();
        return back()->with('message','Legislação publicada com sucesso!');
    } 


    public function destroy($id)
    {
        Legislacao::destroy($id); 
        return redirect('/legislacao')->with('message','Legislação apagada com sucesso!');
    }

     //api para site

     public function ListarLegislacao()
     { 
        $state="Publicado";
         return Legislacao::where('estado', $state)->orderBy('id', 'DESC')->get();
     }
      
 
     public function ListarIdLegislacao($id)
     {
         $leis = Legislacao::find($id);
         return response($leis,200);
     } 
}
