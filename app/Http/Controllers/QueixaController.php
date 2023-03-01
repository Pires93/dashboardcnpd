<?php

namespace App\Http\Controllers;

use App\Models\Queixa;
use Illuminate\Http\Request;


class QueixaController extends Controller
{
     
    public function index()
    {
        //
    }

     
    public function store()
    {
        //
    }
 
    public function create(Request $request)
    {    
        $q= new Queixa();
        $q->nome_queixoso=$request->nome_queixoso;
        $q->morada_queixoso=$request->morada_queixoso;
        $q->telefone_queixoso=$request->telefone_queixoso;
        $q->email_queixoso=$request->email_queixoso;
        $q->entidade_queixa=$request->entidade_queixa;
        $q->morada_queixa=$request->morada_queixa;
        $q->telefone_queixa=$request->telefone_queixa;
        $q->email_queixa=$request->email_queixa; 
        $q->assunto_queixa=$request->assunto_queixa;
        $q->descricao_queixa=$request->descricao_queixa;  
        if($request->anexo_queixa) { 
            $nameBd=now().'.'.$request->anexo_queixa->extension(); 
          $capaname = $request->anexo_queixa->storeAs('anexosQueixas',$nameBd);//renomear noime da imagem na pasta 
          $q->anexo_queixa=$nameBd;
        }    

        $q->created_at=date('Y-m-d H:i:s');
        $q->estado="Novo";
        $q->save();
        $q->num_q=$q->id ."_".date('Y');
        $q->save(); 
       
        return response()->json([
            "message" => "Queixa enviada com sucesso!"
        ], 201); 
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

     
    public function destroy($id)
    {
        //
    }
}
