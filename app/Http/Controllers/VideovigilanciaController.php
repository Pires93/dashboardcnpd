<?php

namespace App\Http\Controllers;

use App\Models\Videovigilancia;
use Illuminate\Http\Request;

class VideovigilanciaController extends Controller
{

    public function index()
    {
        $pedidos = Videovigilancia::all();
        return view('videovigilancia.index')->with('pedidos',$pedidos);
    }


    public function create(Request $request)
    {
        $pedidos= new Videovigilancia();

        $pedidos->finalidade_cctv="Proteção de Pessoas e Bens";
        $pedidos->tipo_notificacao=$request->tipo_notificacao;
        $pedidos->tipo_cctv=$request->tipo_cctv;
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
        $pedidos->nome_representante_instalacao=$request->nome_representante_instalacao;
        $pedidos->rua_representante_instalacao=$request->rua_representante_instalacao;
        $pedidos->caixapostal_representante_instalacao=$request->caixapostal_representante_instalacao;
        $pedidos->local_representante_instalacao=$request->local_representante_instalacao;
        $pedidos->ilha_representante_instalacao=$request->ilha_representante_instalacao;
        $pedidos->concelho_representante_instalacao=$request->concelho_representante_instalacao;
        $pedidos->nome_pessoa_contato_representante_instalacao=$request->nome_pessoa_contato_representante_instalacao;
        $pedidos->email_pessoa_representante_instalacao=$request->email_pessoa_representante_instalacao;
        $pedidos->contato_representante_instalacao=$request->contato_representante_instalacao;
        $pedidos->entidade_processamento_informacao=$request->entidade_processamento_informacao;
        $pedidos->rua_processamento_informacao=$request->rua_processamento_informacao;
        $pedidos->caixapostal_processamento_informacao=$request->caixapostal_processamento_informacao;
        $pedidos->local_processamento_informacao=$request->local_processamento_informacao;
        $pedidos->ilha_processamento_informacao=$request->ilha_processamento_informacao;
        $pedidos->concelho_processamento_informacao=$request->concelho_processamento_informacao;
        $pedidos->numero_camaras=$request->numero_camaras;
        $pedidos->zonas_abrangidas=$request->zonas_abrangidas;
        $pedidos->local_transmissao_imagens=$request->local_transmissao_imagens;
        $pedidos->quem_tem_acesso_imagens=$request->quem_tem_acesso_imagens;
        $pedidos->outraszonas_abrangidas=$request->outraszonas_abrangidas;
        $pedidos->rua_direito_acesso=$request->rua_direito_acesso;
        $pedidos->caixapostal_direito_acesso=$request->caixapostal_direito_acesso;
        $pedidos->local_direito_acesso=$request->local_direito_acesso;
        $pedidos->ilha_direito_acesso=$request->ilha_direito_acesso;
        $pedidos->concelho_direito_acesso=$request->concelho_direito_acesso;
        $pedidos->email_direito_acesso=$request->email_direito_acesso;
        $pedidos->contato_direito_acesso=$request->contato_direito_acesso;
        $pedidos->forma_direito_acesso=$request->forma_direito_acesso;
        $pedidos->outraforma_direito_acesso=$request->outraforma_direito_acesso;
        $pedidos->medidas_fisicas_seguranca=$request->medidas_fisicas_seguranca;
        $pedidos->medidas_logicas_seguranca=$request->medidas_logicas_seguranca;
        //$pedidos->parecer_representante_trabalhadores=$request->parecer_representante_trabalhadores;

        if($request->parecer_representante_trabalhadores) { 
            $nameBd=now().'.'.$request->parecer_representante_trabalhadores->extension(); 
          $capaname = $request->parecer_representante_trabalhadores->storeAs('parecerTrabalhadores',$nameBd);//renomear noime da imagem na pasta 
          $pedidos->parecer_representante_trabalhadores=$nameBd;
        }   

        $pedidos->estado="Novo";
        $pedidos->created_at=date('Y-m-d H:i:s');

        $pedidos->save();
      return response()->json(["message" => "Dados submetidos com sucesso!"]);
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        $pedido = Videovigilancia::find($id);
        return view('videovigilancia.show')->with('pedido',$pedido);
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
