<?php

namespace App\Http\Controllers;

use App\Models\Legislacao;
use Illuminate\Http\Request;

class LegislacaoController extends Controller
{

    public function index()
    {
        return Legislacao::all();
       /* $listar = Legislacao::all();
        return view('legislacao')->with('users',$listar);*/
    }



    public function create(Request $request)
    {
        $leis = new Legislacao();
        $leis->titulo=$request->titulo;
        $leis->descricao=$request->descricao;
        $leis->estado=$request->estado;
        $leis->created_at=date('d-m-Y H:i:s');
        $leis->save();

        return response()->json([
            "message" => "Registo salvo com sucesso!"
        ], 201);
    }

    public function show($id)
    {
        $leis = Legislacao::find($id);
        return response($leis,200);

    }

    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        $leis = Legislacao::find($id);
        $editarDados=$request->all();
        $leis->updated_at=date('d-m-Y H:i:s');
        $leis->update($editarDados);

        return response()->json([
            "message" => "Dados alterados com sucesso!"
        ], 200);
    }

    public function destroy($id)
    {
        Legislacao::destroy($id);
        return response()->json([
            "message" => "Item deletado com sucesso!"
        ], 200);
    }
}
