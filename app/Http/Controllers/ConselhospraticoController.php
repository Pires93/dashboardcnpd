<?php

namespace App\Http\Controllers;

use App\Models\Conselhospratico;

use Illuminate\Http\Request;

class ConselhospraticoController extends Controller
{
    
    public function index()
    {
         $consels = Conselhospratico::orderBy('created_at')->get();
        return view('conselhopratico.index')->with('consels',$consels);
    }
 

    public function store(Request $request)
    {
        $consel = new Conselhospratico();  
        
        if($request->imagem) {
            $imagemname = $request->imagem;
            $nameBd=now().'.'.$request->imagem->extension(); 
          $imagemname = $request->imagem->storeAs('conselhopratico',$nameBd); 
          $consel->imagem=$nameBd;
        }   
        if($request->anexo) {
            $imagemname = $request->anexo;
            $nameBd=now().'.'.$request->anexo->extension(); 
          $imagemname = $request->anexo->storeAs('conselhopratico',$nameBd); 
          $consel->anexo=$nameBd;
        }       
        $consel->titulo=$request->titulo; 
        $consel->descricao=$request->descricao; 
        $consel->estado = $request->estado;  
        $consel->created_at=date('Y-m-d H:i:s');
        $consel->save();

        return redirect('/conselhopratico')->with('message','Conselho prático publicado com sucesso!');
    }

    
   
    public function show($id)
    {
        $consels = Conselhospratico::find($id);
        return view('conselhopratico.show')->with('consels',$consels);
    } 
 
    public function update(Request $request, $id)
    {
        $consels = Conselhospratico::find($id); 
        if($request->imagem) {
            $imagemname = $request->imagem;
            $nameBd=now().'.'.$request->imagem->extension(); 
          $imagemname = $request->imagem->storeAs('conselhopratico',$nameBd); 
          $consels->imagem=$nameBd;
        }   
        if($request->anexo) {
            $imagemname = $request->anexo;
            $nameBd=now().'.'.$request->anexo->extension(); 
          $imagemname = $request->anexo->storeAs('conselhopratico',$nameBd); 
          $consels->anexo=$nameBd;
        }       
        $consels->titulo=$request->titulo;  
        $consels->estado = $request->estado;  
        $consels->descricao=$request->descricao;

        $consels->updated_at=date('Y-m-d H:i:s');  
        $consels->save();

        return back()->with('message','Conselho Prático editado com sucesso!');
    }

    
    public function destroy($id)
    {
        Conselhospratico::destroy($id);  
        return redirect('/conselhopratico')->with('message','Conselho Prático apagado com sucesso!');
    }

    public function unpublish($id)
    {
        $news = Conselhospratico::find($id);
        $news->estado="Despublicado";
        $news->save();
        return back()->with('message','Conselho Prático despublicado com sucesso!');
    } 
    public function publish($id)
    {
        $news = Conselhospratico::find($id);
        $news->estado="Publicado";
        $news->save();
        return back()->with('message','Conselho Prático publicado com sucesso!');
    } 



    //api para site

    public function ListarTodasApi()//pegar todos os ids
    { 
        $state="Publicado";
        return Conselhospratico::where('estado', $state)->orderBy('id', 'DESC')->get();
    }
    public function listarUltimos5()//pegar ultimos 3 ids
    { 
        $leis = Conselhospratico::limit(5)->latest()->orderBy('id', 'DESC')->get();
        return response($leis,200);
    }
    public function listarApiId($id)//pegar um id
    {
        $leis = Conselhospratico::find($id);
        return response($leis,200);
    } 
}
