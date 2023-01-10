<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{


    public function index()
    {
        //
    }


    public function create(Request $request)
    {
        $cont = new Contato();
        $cont->nome=$request->nome;
        $cont->nome=$request->morada;
        $cont->email=$request->email;
        $cont->telefone=$request->telefone;
        $cont->assunto=$request->assunto;
        $cont->duvida=$request->duvida;
        $cont->created_at=date('Y-m-d H:i:s');
        $cont->save();

        return response()->json([
            "message" => "Sua mensagem foi enviada para o Central de Apoio da CNPD!"
        ], 201);
    }


    public function store(Request $request)
    {
        //
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
