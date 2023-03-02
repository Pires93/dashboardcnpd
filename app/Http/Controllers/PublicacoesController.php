<?php

namespace App\Http\Controllers; 
use Illuminate\Http\Request;

use App\Models\Publicacoes;
class PublicacoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pubs = Publicacoes::orderBy('created_at')->get();
        return view('publicacoes.index')->with('pubs',$pubs);
    }

     
    public function create()
    {
        //
    }
 
    public function store(Request $request)
    {
        $public = new Publicacoes();  
        
        if($request->anexo) { 
            $nameBd=now().'.'.$request->anexo->extension(); 
          $capaname = $request->anexo->storeAs('publicacoesPdf',$nameBd); 
          $public->anexo=$nameBd;
        }   
        if($request->imagem) { 
            $nameBd=now().'.'.$request->imagem->extension(); 
          $capaname = $request->imagem->storeAs('publicacoesPdf',$nameBd); 
          $public->imagem=$nameBd;
        }     
        $public->titulo=$request->titulo; 
        $public->descricao=$request->descricao;
        $public->link=$request->link;
        $public->type=$request->type;  
        $public->estado = $request->estado;
        $public->created_at=date('Y-m-d H:i:s');
 
       $ultimoID=Publicacoes::where(['type'=>$request->type])->get()->last();
        if($ultimoID){
            $numDoc = $ultimoID['num_doc'];
            $newNumDoc=explode("_",$numDoc); //2_anoAtual

            if($newNumDoc[1]==date('Y')){//ultimo num doc e de 2023
                $newNum= $newNumDoc[0]+1;
                $public->num_doc =$newNum."_".date('Y');
            }else{                       //ultimo num doc e de ano anterior
                 $public->num_doc ="1_".date('Y');
            }  
        }else{
            $public->num_doc ="1_".date('Y');
        }
        

        $public->save();

        return redirect('/publicacoes')->with('message','Documento publicado com sucesso!');
    }

     
    public function show($id)
    {
        $pubs = Publicacoes::find($id); 
        return view('publicacoes.show')->with('pubs',$pubs);
    }

    
    public function update(Request $request, $id)
    {
        $pubs = Publicacoes::find($id);
        $editarDados=$request->all(); 
        $pubs->titulo=$request->titulo; 
        $pubs->estado=$request->estado; 
        $pubs->descricao=$request->descricao;
        $pubs->link=$request->link;
        if($request->anexo) { 
            $nameBd=now().'.'.$request->anexo->extension(); 
          $capaname = $request->anexo->storeAs('publicacoesPdf',$nameBd);//renomear noime da imagem na pasta 
          $pubs->anexo=$nameBd;
        }  
        if($request->imagem) { 
            $nameBd=now().'.'.$request->imagem->extension(); 
          $capaname = $request->imagem->storeAs('publicacoesPdf',$nameBd);//renomear noime da imagem na pasta 
          $pubs->imagem=$nameBd;
        } 

        $pubs->created_at=date('Y-m-d H:i:s');
        $pubs->save();
        //$pubs->update($editarDados);

        return back()->with('message','Publicação editada com sucesso!');

       
    }
    public function unpublishp($id)
    {
        $pubs = Publicacoes::find($id);
        $pubs->estado="Despublicado";
        $pubs->save();
        return back()->with('message','Documento despublicado com sucesso!');
    } 

    public function publishp($id)
    {
        $pubs = Publicacoes::find($id);
        $pubs->estado="Publicado";
        $pubs->save();
        return back()->with('message','Documento publicado com sucesso!');
    } 
    
    public function destroy($id)
    {
        Publicacoes::destroy($id); 
        return redirect('/publicacoes')->with('message','Publicação apagada com sucesso!');
    }


    //api para site 

    public function ListarIsencoes()
    { 
       $type="Isencao";
       $estado="Publicado";
       return Publicacoes::where(['type'=>$type,'estado'=>$estado])->orderBy('id', 'DESC')->get();
    } 
    public function IsencaoId($id)
    {
        $pubs = Publicacoes::find($id);
        return response($pubs,200);
    } 
    public function ListarDeliberacao()
    { 
       $type="Deliberacao";
       $estado="Publicado";
       return Publicacoes::where(['type'=>$type,'estado'=>$estado])->orderBy('id', 'DESC')->get(); 
    }
    public function ListarDiretivas()
    { 
       $type="Diretiva";
       $estado="Publicado";
       return Publicacoes::where(['type'=>$type,'estado'=>$estado])->orderBy('id', 'DESC')->get();
    }
    public function ListarRelatorios()
    { 
       $type="Relatorio Atividade";
       $estado="Publicado";
       return Publicacoes::where(['type'=>$type,'estado'=>$estado])->orderBy('id', 'DESC')->get();
    }
    public function ListarPlanos()
    { 
       $type="Plano Atividade";
       $estado="Publicado";
       return Publicacoes::where(['type'=>$type,'estado'=>$estado])->orderBy('id', 'DESC')->get();
    }
    public function ListarComunicados()
    { 
       $type="Comunicado";
       $estado="Publicado";
       return Publicacoes::where(['type'=>$type,'estado'=>$estado])->orderBy('id', 'DESC')->get();
    }
    public function ListarPanfletos()
    { 
       $type="Panfleto";
       $estado="Publicado";
       return Publicacoes::where(['type'=>$type,'estado'=>$estado])->orderBy('id', 'DESC')->get();
    }

     
}
