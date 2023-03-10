@extends('layouts.master')
@section('title', 'Lista Biometria')

@section('content')

@if($pedido) 
      <!-- Breadcrumbs -->
    {{ Breadcrumbs::render('Ver GERAL', $pedido) }}

    <div class="row" id="geral">  
        <div class="col-md-12" id="cabecalho">
            Notificação de Tratamento de Dados <b> - Biometria</b>
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
            Processamento da informação
        </div>
        <div class="col-md-12"><br></div>

        <div class="col-md-3" id="name"> Processamento da informação:</div>
        <div class="col-md-9" id="descricao">{{ $pedido->nome_representante_tratamento}}<br></div>
        <div class="col-md-3" id="name"> Rua:</div>
        <div class="col-md-9" id="descricao">{{ $pedido->rua_representante_tratamento }}<br></div>
        <div class="col-md-3" id="name"> Caixa Postal:</div>
        <div class="col-md-9" id="descricao">{{ $pedido->caixapostal_representante_tratamento}}<br></div>
        <div class="col-md-3" id="name"> Cidade/Vila/Zona/Lugar:</div>
        <div class="col-md-9" id="descricao">{{ $pedido->local_representante_tratamento }}<br></div>
        <div class="col-md-3" id="name"> Ilha: </div>
        <div class="col-md-3" id="descricao">{{ $pedido->ilha_representante_tratamento }}</div>
        <div class="col-md-3" id="name" style="text-align: right"> Concelho:</div>
        <div class="col-md-3" id="descricao">{{ $pedido->concelho_representante_tratamento }}<br></div>
        

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
        <div class="col-md-3" id="name"> <br>Número de funcionários:</div>
        <div class="col-md-9" id="descricao"> {{$pedido->numero_funcionarios}}</div>
           
        <div class="col-md-12"><br></div>
        

 


        <div class="col-md-12"><br></div>
        <div class="col-md-12" id="cabecalho">
            3. Dados pessoais contidos em cada registro
        </div>
        <div class="col-md-12"><br></div>
        <div class="col-md-3" id="name"> <br>Dados registrados:</div>
        <div class="col-md-9" id="descricao">
            @if ($pedido->dados_registrados)
                @foreach ($pedido->dados_registrados as $finalidades)
                    {{ $finalidades }}<b> | </b>
                @endforeach
            @endif
        </div>
        <div class="col-md-12"><br></div>
        <div class="col-md-3" id="name"> <br>Outros dados:</div>
        <div class="col-md-9" id="descricao">
            @if ($pedido->outros_dados)
                @foreach ($pedido->outros_dados as $categorias)
                    {{ $categorias }}<b> | </b>
                @endforeach
            @endif
        </div>
        <div class="col-md-12"><br></div>
        <div class="col-md-12" id="cabecalho">
            4. Forma de armazenamento do dado biométrico
        </div>
        <div class="col-md-12"><br></div>
        <div class="col-md-3" id="name"> <br>Forma de registro:</div>
        <div class="col-md-9" id="descricao">
            @if ($pedido->forma_registro)
                @foreach ($pedido->forma_registro as $finalidades)
                    {{ $finalidades }}<b> | </b>
                @endforeach
            @endif
        </div>
        
        
        <div class="col-md-12"><br></div>
        <div class="col-md-12" id="cabecalho">
            5. Tratamento da informação
        </div>
        <div class="col-md-3" id="name"> <br>Forma de tratamento da informação:</div>
        <div class="col-md-9" id="descricao">{{$pedido->forma_tratamento_informacao }} </div>
          
               
                  
              
         
       

        <div class="col-md-12"><br></div>
        <div class="col-md-12" id="cabecalho">
            6. Exercicio do direito de acesso às imagens gravadas
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
        <div class="col-md-3" id="descricao">{{ $pedido->telefone_direito_acesso }}<br></div>
        
       
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
        <div class="col-md-9" id="descricao">{{ $pedido->outrasformas_direito_acesso }}<br></div>


        <div class="col-md-12"><br></div>
        <div class="col-md-12" id="cabecalho">
            7. Medidas de segurança a implementar.
        </div>
        <div class="col-md-12"><br></div>
        <div class="col-md-3" id="name"> Medidas Físicas:</div>
        <div class="col-md-9" id="descricao">{{ $pedido->medidade_seguranca_fisica }}<br></div>
        <div class="col-md-12"><br></div>
        <div class="col-md-3" id="name"> Medidas Lógicas:</div>
        <div class="col-md-9" id="descricao">{{ $pedido->medidas_seguranca_logica }}<br></div>
        <div class="col-md-12"><br></div>
        <div class="col-md-12" id="cabecalho">
            8. Representante dos Trabalhadores
        </div>
        <div class="col-md-12"><br></div>
        @if ($pedido->parecer_representante_trabalhadore)
        <a href="" data-toggle="modal" data-target="#reptrab"> Ver Anexo Representante Trabalhadores</a>
        @elseif (!$pedido->parecer_representante_trabalhadore)
            <p>Não existe representante dos Trabalhadores.</p>
        @endif
                <div id="reptrab" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="my-modal-title">Ver Anexo Representante Trabalhadores</h5>
                                <button class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                             <div class="row row-cols-1"> 
                                 <embed
                                    class="borda"
                                    src="{{ url('storage/parecerTrabalhadores/{$pedido->parecer_representante_trabalhadore}')}}"
                                    width="100%"
                                    height="800px"
                                />
                                </div>                            
                        </div>
                    </div>
                </div>

                


    </div>
    <div class="col-md-12"><br></div>
                <div class="col-md-12" id="cabecalho">
                    9. Catálago do equipamento
                </div>
                <div class="col-md-12"><br></div>
                @if ($pedido->catalago_equipamento)
                <a href="" data-toggle="modal" data-target="#reptrab"> Ver Anexo catálago do equipamento </a>
                @elseif (!$pedido->catalago_equipamento)
                    <p>Não existe catálago do equipamento.</p>
                @endif
                        <div id="reptrab" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="my-modal-title">Ver Anexo Representante Trabalhadores</h5>
                                        <button class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                     <div class="row row-cols-1"> 
                                         <embed
                                            class="borda"
                                            src="{{ url('storage/catalagoEquipamento/{$pedido->catalago_equipamento}')}}"
                                            width="100%"
                                            height="800px"
                                        />
                                        </div>                            
                                </div>
                            </div>
                        </div>
        
    @else  
<!-- Breadcrumbs -->
{{ Breadcrumbs::render('Formulários Biometria') }}
<div class="col-md-12" id="notFound">
    <br>
    <p>ID não encontrado.</p>
</div>

@endif



    <style>
        table, th, td {
         border:1px solid black;
        }
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

        #reptrab{      
        height:auto;
        z-index: 10000000;
        }
    </style>


@endsection
