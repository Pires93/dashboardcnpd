@extends('layouts.master')
@section('title', 'Lista GPS')

@section('content')

 
@if($pedido) 
<!-- Breadcrumbs -->
{{ Breadcrumbs::render('Ver GPS', $pedido) }}

    <div class="row" id="geral">  
        <div class="col-md-12" id="cabecalho">
            Notificação de Tratamento de Dados <b> - Geolocalização</b>
        </div>
    <div class="col-md-12" id="right"><b>Criado em:</b> {{ $pedido->created_at }}</div> 
        <div class="col-lg-4 mb-4">
            <div class="card-body">
                Tipo Notificação : <input type="checkbox" checked disabled> {{ $pedido->tipo_notificacao }}
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card-body">
                Nº Processo:
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card-body">
                Ano:
            </div>
        </div>
        <div class="col-md-12" id="cabecalho">
            1. Responsável pelo Tratamento
        </div>
        <div class="col-md-12"><br></div>
        <div class="col-md-12" id="nameCenter"><b>Pessoa:</b> {{ $pedido->tipo_pessoa }}</div>
        <div class="col-md-3" id="name">Nome Denominação: </div>
        <div class="col-md-9" id="descricao">{{ $pedido->nome_denominacao }}</div>
        <div class="col-md-3" id="name">Nome Comercial: </div>
        <div class="col-md-9" id="descricao">{{ $pedido->nome_comercial }}</div>
        <div class="col-md-3" id="name">Actividade Desenvolvida: </div>
        <div class="col-md-9" id="descricao">{{ $pedido->atividade_desenvolvida }}</div>
        <div class="col-md-3" id="name">Nif: </div>
        <div class="col-md-9" id="descricao">{{ $pedido->numero_nif }}</div>
        <div class="col-md-3" id="name"> Rua: </div>
        <div class="col-md-9" id="descricao">{{ $pedido->rua_responsavel_tratamento }}</div>
        <div class="col-md-3" id="name">Caixa Postal:</div>
        <div class="col-md-9" id="descricao">{{ $pedido->caixapostal_responsavel_tratamento }}</div>
        <div class="col-md-3" id="name"> Cidade/Vila/Zona/Lugar: </div>
        <div class="col-md-9" id="descricao">{{ $pedido->local_responsavel_tratamento }}</div>
        <div class="col-md-3" id="name"> Ilha: </div>
        <div class="col-md-3" id="descricao">{{ $pedido->ilha_responsavel_tratamento }}</div>
        <div class="col-md-3" id="name" style="text-align: right"> Concelho:</div>
        <div class="col-md-3" id="descricao">{{ $pedido->concelho_responsavel_tratamento }}<br></div>
        <div class="col-md-3" id="name"> Email: </div>
        <div class="col-md-3" id="descricao">{{ $pedido->email_responsavel_tratamento }}</div>
        <div class="col-md-3" id="name" style="text-align: right"> Telefone:</div>
        <div class="col-md-3" id="descricao">{{ $pedido->telefone_responsavel_tratamento }}<br></div>
        <div class="col-md-12">
            <b>País</b> <input type="checkbox" checked disabled> {{ $pedido->pais_responsavel_tratamento }}
        </div>
        <div class="col-md-12"><br></div>
        <div class="col-md-12" id="cabecalho">
            Morada Local de Instalação
        </div>
        <div class="col-md-12"><br></div>

        <div class="col-md-3" id="name"> Morada local de Instalação:</div>
        <div class="col-md-9" id="descricao">{{ $pedido->nome_representante_instalacao }}<br></div>
        <div class="col-md-3" id="name"> Rua:</div>
        <div class="col-md-9" id="descricao">{{ $pedido->rua_representante_instalacao }}<br></div>
        <div class="col-md-3" id="name"> Caixa Postal:</div>
        <div class="col-md-9" id="descricao">{{ $pedido->caixapostal_representante_instalacao }}<br></div>
        <div class="col-md-3" id="name"> Cidade/Vila/Zona/Lugar:</div>
        <div class="col-md-9" id="descricao">{{ $pedido->local_representante_instalacao }}<br></div>
        <div class="col-md-3" id="name"> Ilha: </div>
        <div class="col-md-3" id="descricao">{{ $pedido->ilha_representante_instalacao }}</div>
        <div class="col-md-3" id="name" style="text-align: right"> Concelho:</div>
        <div class="col-md-3" id="descricao">{{ $pedido->concelho_representante_instalacao }}<br></div>
        <div class="col-md-3" id="name"> Nome da Pessoa de Contacto:</div>
        <div class="col-md-9" id="descricao">{{ $pedido->nome_pessoa_contato_representante_instalacao }}<br></div>
        <div class="col-md-3" id="name"> Email: </div>
        <div class="col-md-3" id="descricao">{{ $pedido->email_pessoa_representante_instalacao }}</div>
        <div class="col-md-3" id="name" style="text-align: right"> Telefone:</div>
        <div class="col-md-3" id="descricao">{{ $pedido->contato_representante_instalacao }}<br></div>

        <div class="col-md-12"><br></div>
        <div class="col-md-12" id="cabecalho">
            Processamento de Informação
        </div>
        <div class="col-md-12"><br></div>
        <div class="col-md-3" id="name"> Entidade Subcontratada:</div>
        <div class="col-md-9" id="descricao">{{ $pedido->entidade_processamento_informacao }}<br></div>
        <div class="col-md-3" id="name"> Rua:</div>
        <div class="col-md-9" id="descricao">{{ $pedido->rua_processamento_informacao }}<br></div>
        <div class="col-md-3" id="name"> Caixa Postal:</div>
        <div class="col-md-9" id="descricao">{{ $pedido->caixapostal_processamento_informacao }}<br></div>
        <div class="col-md-3" id="name"> Cidade/Vila/Zona/Lugar:</div>
        <div class="col-md-9" id="descricao">{{ $pedido->local_processamento_informacao }}<br></div>
        <div class="col-md-3" id="name"> Ilha: </div>
        <div class="col-md-3" id="descricao">{{ $pedido->ilha_processamento_informacao }}</div>
        <div class="col-md-3" id="name" style="text-align: right"> Concelho:</div>
        <div class="col-md-3" id="descricao">{{ $pedido->concelho_processamento_informacao }}<br></div>
        <div class="col-md-12"><br></div>
        <div class="col-md-12" id="cabecalho">
            2. Finalidades do Tratamento
        </div>
        <div class="col-md-12"><br></div>
        <div class="col-md-3" id="name"> <br>Finalidades do tratamento:</div>
        <div class="col-md-9" id="descricao">
            @if ($pedido->finalidade_tratamento)
                @foreach ($pedido->finalidade_tratamento as $finalidades)
                    {{ $finalidades }}<b> | </b>
                @endforeach
            @endif
        </div>
        <div class="col-md-12"><br></div>
        <div class="col-md-3" id="name"> <br>Categorias dos dados pessoais tratados:</div>
        <div class="col-md-9" id="descricao">
            @if ($pedido->categoria_dados)
                @foreach ($pedido->categoria_dados as $categorias)
                    {{ $categorias }}<b> | </b>
                @endforeach
            @endif
        </div>
        <div class="col-md-12"><br></div>
        <div class="col-md-3" id="name"> <br>Outros dados pessoais tratados:</div>
        <div class="col-md-9" id="descricao">
            @if ($pedido->outros_dados)
                @foreach ($pedido->outros_dados as $outrosdados)
                    {{ $outrosdados }}<b> | </b>
                @endforeach
            @endif
        </div>




        <div class="col-md-12"><br></div>
        <div class="col-md-12" id="cabecalho">
            3. Exercicio do direito de acesso às imagens gravadas
        </div>
        <div class="col-md-12"><br></div>
        <div class="col-md-3" id="name"> Rua:</div>
        <div class="col-md-9" id="descricao">{{ $pedido->rua_direito_acesso }}<br></div>
        <div class="col-md-3" id="name"> Caixa Postal:</div>
        <div class="col-md-9" id="descricao">{{ $pedido->caixapostal_direito_acesso }}<br></div>
        <div class="col-md-3" id="name"> Local para exercer direito de acesso:</div>
        <div class="col-md-9" id="descricao">{{ $pedido->local_direito_acesso }}<br></div>
        <div class="col-md-3" id="name"> Ilha: </div>
        <div class="col-md-3" id="descricao">{{ $pedido->ilha_direito_acesso }}</div>
        <div class="col-md-3" id="name" style="text-align: right"> Concelho:</div>
        <div class="col-md-3" id="descricao">{{ $pedido->concelho_direito_acesso }}<br></div>
        <div class="col-md-3" id="name"> Email: </div>
        <div class="col-md-3" id="descricao">{{ $pedido->email_direito_acesso }}</div>
        <div class="col-md-3" id="name" style="text-align: right"> Telefone:</div>
        <div class="col-md-3" id="descricao">{{ $pedido->contato_direito_acesso }}<br></div>
        <div class="col-md-12"><br></div>
        <div class="col-md-12" id="cabecalho">
            De que forma e exercido o direito de acesso?
        </div>
        <div class="col-md-12"><br></div>
        <div class="col-md-3" id="name"> Forma de direito de acesso::</div>
        <div class="col-md-9" id="descricao">
            @if ($pedido->forma_direito_acesso)
                @foreach ($pedido->forma_direito_acesso as $forma)
                    {{ $forma }},
                @endforeach
            @endif
        </div>
        <div class="col-md-3" id="name"> Outra forma:</div>
        <div class="col-md-9" id="descricao">{{ $pedido->outraforma_direito_acesso }}<br></div>


        <div class="col-md-12"><br></div>
        <div class="col-md-12" id="cabecalho">
            4. Medidas de segurança a implementar.
        </div>
        <div class="col-md-12"><br></div>
        <div class="col-md-3" id="name"> Medidas Físicas:</div>
        <div class="col-md-9" id="descricao">{{ $pedido->medidas_fisicas_seguranca }}<br></div>
        <div class="col-md-12"><br></div>
        <div class="col-md-3" id="name"> Medidas Lógicas:</div>
        <div class="col-md-9" id="descricao">{{ $pedido->medidas_logicas_seguranca }}<br></div>
        <div class="col-md-12"><br></div>
        <div class="col-md-12" id="cabecalho">
            5. Representante dos Trabalhadores
        </div>
        <div class="col-md-12"><br></div>
        @if ($pedido->parecer_representante_trabalhadores)
            <a href=""> Anexo do Representante dos Trabalhadores.</a>
        @elseif (!$pedido->parecer_representante_trabalhadores)
            <p>Não existe representante dos Trabalhadores.</p>
        @endif

    </div>
@else  
<!-- Breadcrumbs -->
{{ Breadcrumbs::render('Formulários GPS') }}
<div class="col-md-12" id="notFound">
    <br>
    <p>ID não encontrado.</p>
</div>

@endif
    <style>
       #notFound {
            color: #ffffff;
            border-style: ridge;
            border-radius: 10px;
            background-color: #990000;
            text-align:center;
        }
        #geral {
            font-size: 14px;
            background-color: #fff;
            color: #061536;
            font-family: "Times New Roman", Times, serif;
            margin-left: 5px;
            margin-right: 10px
        }

        #cabecalho {
            color: #ffffff;
            border-style: ridge;
            border-radius: 10px;
            background: #061536;
        }

        #name {
            font-weight: bold;
            color: #061536;
        }

        #nameCenter {
            text-align: center;
        }
        #right {
            text-align: right;
        }
        #descricao {
            color: #061536;
            border-style: ridge;
        }

    </style>


@endsection
