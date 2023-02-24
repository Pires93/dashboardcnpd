<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Video;
class VideoController extends Controller
{
     
    public function index()
    {
        $vide = Video::orderBy('created_at')->get();
        return view('video.index')->with('vide',$vide);
    }

     
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $vide= new Video();
        $vide->titulo=$request->titulo; 
        $vide->link=$request->link; 
        $vide->capa=$request->capa;
        $vide->type=$request->type;
        if($request->anexo) { 
            $nameBd=now().'.'.$request->anexo->extension(); 
          $capaname = $request->anexo->storeAs('videos',$nameBd);//renomear noime da imagem na pasta 
          $vide->anexo=$nameBd;
        } 
        if($request->capa) { 
            $nameBd=now().'.'.$request->capa->extension(); 
          $capaname = $request->capa->storeAs('videos',$nameBd);//renomear noime da imagem na pasta 
          $vide->capa=$nameBd;
        }     
        $vide->estado=$request->estado;
        $vide->save();  
       
        return redirect('/video')->with('message','Video publicado com sucesso!');
    }

    
    public function show($id)
    {
        $vide = Video::find($id);
        return view('video.show')->with('vide',$vide);
    }

    
    public function edit($id)
    {
        //
    }
 
    public function update(Request $request, $id)
    {
        $vide = Video::find($id);
        $update=$request->all();
        $vide->updated_at=date('Y-m-d H:i:s'); 
        $vide->titulo=$request->titulo;
        $vide->link=$request->link;
       /* if($request->anexo) { 
            $nameBd=now().'.'.$request->anexo->extension(); 
          $capaname = $request->anexo->storeAs('videos',$nameBd);//renomear noime da imagem na pasta 
          $vide->anexo=$nameBd;
        }   */
        if($request->capa) { 
            $nameBd=now().'.'.$request->capa->extension(); 
          $capaname = $request->capa->storeAs('videos',$nameBd);//renomear noime da imagem na pasta 
          $vide->capa=$nameBd;
        }  
       // $vide->update($update);
        $vide->save();
        return back()->with('message','Video editado com sucesso!');
    }

     
    public function destroy($id)
    {
        Video::destroy($id);  
        return redirect('/video')->with('message','Video apagado com sucesso!');
    }

    public function unpublishv($id)
    {
        $vide = Video::find($id);
        $vide->estado="Unpublish";
        $vide->save();
        return back()->with('message','Video despublicado com sucesso!');
    } 
    public function publishv($id)
    {
        $vide = Video::find($id);
        $vide->estado="Publish";
        $vide->save();
        return back()->with('message','Video publicado com sucesso!');
    } 


    //api para site

    public function ListarVideos()//pegar todos os ids
    { 
        $state="Publish";
        return Video::where('estado', $state)->orderBy('id', 'DESC')->get();
    } 
}
