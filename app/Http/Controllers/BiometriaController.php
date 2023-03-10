<?php

namespace App\Http\Controllers;


use App\Models\Biometria;
use Illuminate\Http\Request;
use App\http\Requests\UserStoreRequest;

class BiometriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = Biometria::all();
        return view('biometria.index')->with('pedidos',$pedidos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pedidos= new Biometria();

        $pedidos->tipo_notificacao=$request->tipo_notificacao;
        $pedidos->tipo_pessoa=$request->tipo_pessoa;
        $pedidos->nome_denominacao=$request->nome_denominacao;
        $pedidos->nome_comercial=$request->nome_comercial;
        $pedidos->atividade_desenvolvida=$request->atividade_desenvolvida;
        $pedidos->numero_nif=$request->numero_nif;
        $pedidos->rua_responsavel_tratamento=$request->rua_responsavel_tratamento;
        $pedidos->local_responsavel_tratamento=$request->local_responsavel_tratamento;
        $pedidos->ilha_responsavel_tratamento=$request->ilha_responsavel_tratamento;
        $pedidos->concelho_responsavel_tratamento=$request->concelho_responsavel_tratamento;
        $pedidos->caixapostal_responsavel_tratamento=$request->caixapostal_responsavel_tratamento;
        $pedidos->telefone_responsavel_tratamento=$request->telefone_responsavel_tratamento;
        $pedidos->email_responsavel_tratamento=$request->email_responsavel_tratamento;
        $pedidos->pais_responsavel_tratamento=$request->pais_responsavel_tratamento;
        $pedidos->nome_representante_tratamento=$request->nome_representante_tratamento;
        $pedidos->rua_representante_tratamento=$request->rua_representante_tratamento;
        $pedidos->local_representante_tratamento=$request->local_representante_tratamento;
        $pedidos->ilha_representante_tratamento=$request->ilha_representante_tratamento;
        $pedidos->caixapostal_representante_tratamento=$request->caixapostal_representante_tratamento;
        $pedidos->concelho_representante_tratamento=$request->concelho_representante_tratamento;
        $pedidos->nome_pessoa_contato=$request->nome_pessoa_contato;
        $pedidos->email_representante_tratamento=$request->email_representante_tratamento;
        $pedidos->telefone_representante_tratamento=$request->telefone_representante_tratamento;
        $pedidos->entidade_processamento_informacao=$request->entidade_processamento_informacao;
        $pedidos->rua_entidade_processamento=$request->rua_entidade_processamento;
        $pedidos->caixapostal_entidade_processamento=$request->caixapostal_entidade_processamento;
        $pedidos->local_entidade_processamento=$request->local_entidade_processamento;
        $pedidos->ilha_entidade_processamento=$request->ilha_entidade_processamento;
        $pedidos->concelho_entidade_processamento=$request->concelho_entidade_processamento;
        $pedidos->finalidade_tratamento=$request->finalidade_tratamento;
        $pedidos->numero_funcionarios=$request->numero_funcionarios;
        $pedidos->dados_registrados=$request->dados_registrados;
        $pedidos->outros_dados=$request->outros_dados;
        $pedidos->forma_registro=$request->forma_registro;
        $pedidos->forma_tratamento_informacao=$request->forma_tratamento_informacao;
        $pedidos->rua_direito_acesso=$request->rua_direito_acesso;
        $pedidos->caixapostal_direito_acesso=$request->caixapostal_direito_acesso;
        $pedidos->local_direito_acesso=$request->local_direito_acesso;
        $pedidos->ilha_direito_acesso=$request->ilha_direito_acesso;
        $pedidos->concelho_direito_acesso=$request->concelho_direito_acesso;
        $pedidos->email_direito_acesso=$request->email_direito_acesso;
        $pedidos->telefone_direito_acesso=$request->telefone_direito_acesso;
        $pedidos->forma_direito_acesso=$request->forma_direito_acesso;
        $pedidos->outrasformas_direito_acesso=$request->outrasformas_direito_acesso;
        $pedidos->medidade_seguranca_fisica=$request->medidade_seguranca_fisica;
        $pedidos->medidas_seguranca_logica=$request->medidas_seguranca_logica;
        $pedidos->created_at = date('Y-m-d H:i:s');
        $pedidos->estado =  'Novo'; 
        $pedidos->tipo =  'Biometria';     
        if($request->parecer_representante_trabalhadore) { 
            $nameBd=now().'.'.$request->parecer_representante_trabalhadore->extension(); 
          $capaname = $request->parecer_representante_trabalhadore->storeAs('parecerTrabalhadores',$nameBd);//renomear noime da imagem na pasta 
          $pedidos->parecer_representante_trabalhadore=$nameBd;
        }
        if($request->catalago_equipamento) { 
            $nameBd=now().'.'.$request->catalago_equipamento->extension(); 
          $capaname = $request->catalago_equipamento->storeAs('catalagoEquipamento',$nameBd);//renomear noime da imagem na pasta 
          $pedidos->catalago_equipamento=$nameBd;
        }

        
        $pedidos->save();
      
        

        return response()->json([
            "message" => "Sua mensagem foi enviada para o Central de Apoio da CNPD!"
        ], 201);
       // return redirect('/pedidoInformacao')->with('message','Registo efetuado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pedido = Biometria::find($id);
        return view('biometria.show')
        ->with('pedido',$pedido);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
