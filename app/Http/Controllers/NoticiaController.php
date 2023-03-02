<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Noticia;
class NoticiaController extends Controller
{
     
    public function index()
    {
         $news = Noticia::orderBy('created_at')->get();
        return view('noticia.index')->with('news',$news);
    }
 

    public function store(Request $request)
    {
        $news = new Noticia();  
        
        if($request->capa) {
            $capaname = $request->capa;
            $nameBd=now().'.'.$request->capa->extension();
          //$capaname = $request->capa->store('capanoticia');//salvar na pasta normal
          $capaname = $request->capa->storeAs('capanoticia',$nameBd);//renomear noime da imagem na pasta 
          $news->imagem=$nameBd;
        }        
        $news->titulo=$request->titulo;
        $news->subtitulo=$request->subtitulo;
        $news->autor=$request->autor;
        $news->conteudo=$request->conteudo;
        $news->type=$request->type;
        $news->estado = $request->estado;  
        $news->created_at=date('Y-m-d H:i:s');
        $news->save();

        return redirect('/noticia')->with('message','Notícia publicada com sucesso!');
    }
 
 
    public function show($id)
    {
        $news = Noticia::find($id);
        return view('noticia.show')->with('news',$news);
    } 

   
 
    public function update(Request $request, $id)
    {
        $news = Noticia::find($id);
        $news->updated_at=date('Y-m-d H:i:s');  
        $news->titulo=$request->titulo;
        $news->subtitulo=$request->subtitulo;
        $news->autor=$request->autor;
        $news->conteudo=$request->conteudo;
        $news->type=$request->type;
        $news->estado = $request->estado;  
        
        if($request->capa) {
            $capaname = $request->capa;
            $nameBd=now().'.'.$request->capa->extension(); 
          $capaname = $request->capa->storeAs('capanoticia',$nameBd);//renomear noime da imagem na pasta 
          $news->imagem=$nameBd;
        }  
        $news->save();

        return back()->with('message','Notícia editada com sucesso!');
    }

    
    public function destroy($id)
    {
        Noticia::destroy($id);  
        return redirect('/noticia')->with('message','Notícia apagada com sucesso!');
    }
    
    public function unpublishn($id)
    {
        $news = Noticia::find($id);
        $news->estado="Despublicado";
        $news->save();
        return back()->with('message','Notícia despublicada com sucesso!');
    } 
    public function publishn($id)
    {
        $news = Noticia::find($id);
        $news->estado="Publicado";
        $news->save();
        return back()->with('message','Notícia publicada com sucesso!');
    } 

    //api para site

    public function ListarTodasApi()//pegar todos os ids
    { 
        $state="Publicado";
        return Noticia::where('estado', $state)->orderBy('id', 'DESC')->get();
    }
    public function listarUltimos3()//pegar ultimos 3 ids
    { 
        return Noticia::limit(3)->latest()->orderBy('id', 'DESC')->get();
        return response($leis,200);
    }

    public function ultimaNoticia() //pegar ultimo id
    { 
        return Noticia::latest()->get();
        return response($leis,200); 
    }

    public function listarApiId($id)//pegar um id
    {
        $leis = Noticia::find($id);
        return response($leis,200);
    } 
    
}
