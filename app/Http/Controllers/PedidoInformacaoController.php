<?php

namespace App\Http\Controllers;

use App\Models\PedidoInformacao;
use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Http\Request;

class PedidoInformacaoController extends Controller
{

    public function index()
    {
        $pedidos = PedidoInformacao::all();
        return view('pedidoInformacao.index')->with('pedidos',$pedidos);
    }


    public function create()
    {
        return view('pedidoInformacao.create');
    }


    public function store(Request $request)
    {
        $pedidos= new PedidoInformacao();

        $pedidos->nome=$request->nome;
        $pedidos->morada=$request->morada;
        $pedidos->telefone=$request->telefone;
        $pedidos->email=$request->email;
        $pedidos->assunto=$request->assunto;
        $pedidos->duvida=$request->duvida;
        $pedidos->data_p=date('d-m-Y H:i:s');
        $pedidos->estado="Novo";
        $pedidos->save();
        $pedidos->num_p=$pedidos->id ."_".date('Y');
        $pedidos->save();

        return redirect('/pedidoInformacao')->with('message','Registo efetuado com sucesso!');
    }

    public function show($id)
    {
        $pedido = PedidoInformacao::find($id);
        return view('pedidoInformacao.show')->with('pedido',$pedido);
    }

    public function edit($id)
    {
        $pedido = PedidoInformacao::find($id);
        return view('pedidoInformacao.edit')->with('pedido',$pedido);
    }


    public function update(Request $request, $id)
    {
        $pedido = PedidoInformacao::find($id);
        $update=$request->all();
        $pedido->data_r=date('d-m-Y H:i:s');
        $pedido->update($update);

        return redirect('pedidoInformacao')->with('flash_message','Pedido Updated!');
    }

    public function destroy($id)
    {

    }
}
