@extends('layouts.master')
@section('title', 'Lista Interconexão')

@section('content')

@if($pedido) 
      <!-- Breadcrumbs -->
    {{ Breadcrumbs::render('Ver Interconexão', $pedido) }}

    <div class="row" id="geral">     
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
        1.1. Primeira entidade de interconexão (destinatário de dados na interconexão)
        <br>1.1.1. Responsável pelo Tratamento
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
        <div class="col-md-3" id="descricao">{{ $pedido->contato_responsavel_tratamento }}<br></div>
        <div class="col-md-12">
            <b>País</b> <input type="checkbox" checked disabled> {{ $pedido->pais_responsavel_tratamento }}
        </div>
        <div class="col-md-12"><br></div>
        <div class="col-md-12" id="cabecalho">
        1.1.2. Representante do Primeiro Responsável pelo Tratamento
        </div>
        <div class="col-md-12"><br></div>
        <div class="col-md-3" id="name"> Representante: </div>
        <div class="col-md-9" id="descricao">{{ $pedido->nome_representante_instalacao }}</div>
        <div class="col-md-3" id="name"> Rua: </div>
        <div class="col-md-9" id="descricao">{{ $pedido->rua_representante_instalacao }}</div>
        <div class="col-md-3" id="name">Caixa Postal:</div>
        <div class="col-md-9" id="descricao">{{ $pedido->caixapostal_representante_instalacao }}</div>
        <div class="col-md-3" id="name"> Cidade/Vila/Zona/Lugar: </div>
        <div class="col-md-9" id="descricao">{{ $pedido->local_representante_instalacao }}</div>
        <div class="col-md-3" id="name"> Ilha: </div>
        <div class="col-md-3" id="descricao">{{ $pedido->ilha_representante_instalacao }}</div>
        <div class="col-md-3" id="name" style="text-align: right"> Concelho:</div>
        <div class="col-md-3" id="descricao">{{ $pedido->concelho_representante_instalacao }}<br></div> 
        <div class="col-md-12">
            <b>País</b> <input type="checkbox" checked disabled> {{ $pedido->pais_representante_instalacao }}
        </div>
        <div class="col-md-12"><br></div>
        <div class="col-md-12" id="cabecalho">
        1.1.3. Pessoa de Contato do Primeiro Responsável pelo Tratamento
        </div>
        <div class="col-md-12"><br></div>
        <div class="col-md-3" id="name"> Nome da Pessoa de Contato: </div>
        <div class="col-md-9" id="descricao">{{ $pedido->nome_pessoa_contato_representante_instalacao }}</div>
        <div class="col-md-3" id="name"> Email: </div>
        <div class="col-md-9" id="descricao">{{ $pedido->email_pessoa_representante_instalacao }}</div>
        <div class="col-md-3" id="name">Telefone:</div>
        <div class="col-md-9" id="descricao">{{ $pedido->contato_representante_instalacao }}</div> 
        <div class="col-md-12"><br></div>
        <div class="col-md-12" id="cabecalho">
        1.1.4. Processamento da informação do Primeiro Responsável
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
        1.2. Segunda entidade de interconexão (fornecedor de dados na interconexão)
        <br>1.2.1. Responsável pelo Tratamento
        </div>
        <div class="col-md-12"><br></div>
        <div class="col-md-12" id="nameCenter"><b>Pessoa:</b> {{ $pedido->tipo_pessoaSR	 }}</div>
        <div class="col-md-3" id="name">Nome Denominação: </div>
        <div class="col-md-9" id="descricao">{{ $pedido->nome_denominacaoSR }}</div>
        <div class="col-md-3" id="name">Nome Comercial: </div>
        <div class="col-md-9" id="descricao">{{ $pedido->nome_comercialSR }}</div>
        <div class="col-md-3" id="name">Actividade Desenvolvida: </div>
        <div class="col-md-9" id="descricao">{{ $pedido->atividade_desenvolvidaSR }}</div>
        <div class="col-md-3" id="name">Nif: </div>
        <div class="col-md-9" id="descricao">{{ $pedido->numero_nifSR }}</div>
        <div class="col-md-3" id="name"> Rua: </div>
        <div class="col-md-9" id="descricao">{{ $pedido->rua_responsavel_tratamentoSR }}</div>
        <div class="col-md-3" id="name">Caixa Postal:</div>
        <div class="col-md-9" id="descricao">{{ $pedido->caixapostal_responsavel_tratamentoSR }}</div>
        <div class="col-md-3" id="name"> Cidade/Vila/Zona/Lugar: </div>
        <div class="col-md-9" id="descricao">{{ $pedido->local_responsavel_tratamentoSR }}</div>
        <div class="col-md-3" id="name"> Ilha: </div>
        <div class="col-md-3" id="descricao">{{ $pedido->ilha_responsavel_tratamentoSR }}</div>
        <div class="col-md-3" id="name" style="text-align: right"> Concelho:</div>
        <div class="col-md-3" id="descricao">{{ $pedido->concelho_responsavel_tratamentoSR }}<br></div>
        <div class="col-md-3" id="name"> Email: </div>
        <div class="col-md-3" id="descricao">{{ $pedido->email_responsavel_tratamentoSR }}</div>
        <div class="col-md-3" id="name" style="text-align: right"> Telefone:</div>
        <div class="col-md-3" id="descricao">{{ $pedido->contato_responsavel_tratamentoSR }}<br></div>
        <div class="col-md-12">
            <b>País</b> <input type="checkbox" checked disabled> {{ $pedido->pais_responsavel_tratamentoSR }}
        </div>
        <div class="col-md-12"><br></div>
        <div class="col-md-12" id="cabecalho">
        1.2.2. Representante do Segundo Responsável pelo Tratamento
        </div>
        <div class="col-md-12"><br></div>
        <div class="col-md-3" id="name"> Representante: </div>
        <div class="col-md-9" id="descricao">{{ $pedido->nome_representante_instalacaoSR }}</div>
        <div class="col-md-3" id="name"> Rua: </div>
        <div class="col-md-9" id="descricao">{{ $pedido->rua_representante_instalacaoSR }}</div>
        <div class="col-md-3" id="name">Caixa Postal:</div>
        <div class="col-md-9" id="descricao">{{ $pedido->caixapostal_representante_instalacaoSR }}</div>
        <div class="col-md-3" id="name"> Cidade/Vila/Zona/Lugar: </div>
        <div class="col-md-9" id="descricao">{{ $pedido->local_representante_instalacaoSR }}</div>
        <div class="col-md-3" id="name"> Ilha: </div>
        <div class="col-md-3" id="descricao">{{ $pedido->ilha_representante_instalacaoSR }}</div>
        <div class="col-md-3" id="name" style="text-align: right"> Concelho:</div>
        <div class="col-md-3" id="descricao">{{ $pedido->concelho_representante_instalacaoSR }}<br></div> 
        <div class="col-md-12">
            <b>País</b> <input type="checkbox" checked disabled> {{ $pedido->pais_representante_instalacaoSR }}
        </div>
        <div class="col-md-12"><br></div>
        <div class="col-md-12" id="cabecalho">
        1.2.3. Pessoa de Contato do Segundo Responsável pelo Tratamento
        </div>
        <div class="col-md-12"><br></div>
        <div class="col-md-3" id="name"> Nome da Pessoa de Contato: </div>
        <div class="col-md-9" id="descricao">{{ $pedido->nome_pessoa_contato_representante_instalacaoSR }}</div>
        <div class="col-md-3" id="name"> Email: </div>
        <div class="col-md-9" id="descricao">{{ $pedido->email_pessoa_representante_instalacaoSR }}</div>
        <div class="col-md-3" id="name">Telefone:</div>
        <div class="col-md-9" id="descricao">{{ $pedido->contato_representante_instalacaoSR }}</div> 
        <div class="col-md-12"><br></div>
        <div class="col-md-12" id="cabecalho">
        1.2.4. Processamento da informação do Segundo Responsável
        </div>
        <div class="col-md-12"><br></div>
        <div class="col-md-3" id="name"> Entidade Subcontratada:</div>
        <div class="col-md-9" id="descricao">{{ $pedido->entidade_processamento_informacaoSR }}<br></div>
        <div class="col-md-3" id="name"> Rua:</div>
        <div class="col-md-9" id="descricao">{{ $pedido->rua_processamento_informacaoSR }}<br></div>
        <div class="col-md-3" id="name"> Caixa Postal:</div>
        <div class="col-md-9" id="descricao">{{ $pedido->caixapostal_processamento_informacaoSR }}<br></div>
        <div class="col-md-3" id="name"> Cidade/Vila/Zona/Lugar:</div>
        <div class="col-md-9" id="descricao">{{ $pedido->local_processamento_informacaoSR }}<br></div>
        <div class="col-md-3" id="name"> Ilha: </div>
        <div class="col-md-3" id="descricao">{{ $pedido->ilha_processamento_informacaoSR }}</div>
        <div class="col-md-3" id="name" style="text-align: right"> Concelho:</div>
        <div class="col-md-3" id="descricao">{{ $pedido->concelho_processamento_informacaoSR }}<br></div>
        <div class="col-md-12"><br></div>
        <div class="col-md-12"><br></div>
        <div class="col-md-12" id="cabecalho">
        2. Descrição de formas de interconexão (pode ser preenchido pela primeira ou segunda entidade de interconexão)
        </div>
        <div class="col-md-12"><br></div>
        <div class="col-md-3" id="name"> Descrição:</div>
        <div class="col-md-9" id="descricao">{{ $pedido->descricao_forma_interconexao }}<br></div>
        <div class="col-md-12"><br></div>
        <div class="col-md-12" id="cabecalho">
        3. Finalidade do tratamento (primeira entidade de interconexão)
        </div>
        <div class="col-md-12"><br></div> 
        <div class="col-md-6" id="name"> <br>Categorias:</div>
        <div class="col-md-6" id="name"> <br>Finalidades de Tratamento:</div>
        <p><br><br></p>

            @if ($finalidades)
                    @foreach ($finalidades as $cat)
                    <div class="col-md-3"  id="descricao">
                        <li>{{ $cat['categorias_finalidade'] }}</li><br>
                    </div>
                    <div class="col-md-9"  id="descricao">
                        @foreach ($cat['finalidades'] as $fin) 
                        {{ $fin['value'] }} <b>|</b>
                        @endforeach
                    </div>
                    @endforeach
             @endif
             <div class="col-md-12"><br></div> 
        <div class="col-md-3" id="name"> Outras Finalidades:</div>
        <div class="col-md-9" id="descricao">{{ $pedido->outraFinalidadeTratamento }}<br></div>
        
        <div class="col-md-12"><br></div>
        <div class="col-md-12" id="cabecalho">
        4. Dados sujeitos a conexão (primeira entidade de interconexão)
        </div>
        <div class="col-md-12"><br></div> 
        <div class="col-md-3" id="name"> Dados Pessoais Tratados:</div>
        <div class="col-md-9"  id="descricao">
        @if ($pedido->dados_pessoais_tratado	)
                    @foreach ($pedido->dados_pessoais_tratado as $dadosPessoais) 
                        {{ $dadosPessoais['value'] }} <b>|</b>
             @endforeach
        @endif
        </div>
        <div class="col-md-12"><br></div> 
        <div class="col-md-3" id="name"> Que outros dados referentes aos artigos 8º e 11º</div>
        <div class="col-md-9"  id="descricao">
        {{ $pedido->outros_dados_art8e11 }}
        </div>
        <div class="col-md-12"><br></div> 
        <div class="col-md-3" id="name"> Lista de dados pessoais tratados</div>
        <div class="col-md-9"  id="descricao">
        {{ $pedido->listadados_pessoais_tratados }}
        </div> 
        <div class="col-md-12"><br></div>
        <div class="col-md-12" id="cabecalho">
        5. Comunicação dos Dados a terceiros (primeira entidade de interconexão)
        </div>
        <div class="col-md-12"><br></div> 
        <div class="col-md-3" id="name"> <br>Entidades Comunicadas:</div>
        <div class="col-md-9" id="name"> <br>Dados Transferidos:</div>
        <p><br><br></p>

            @if ($comunicacao)
                    @foreach ($comunicacao as $comunic)
                    <div class="col-md-3"  id="descricao">
                        {{ $comunic['entidades_comunicadas'] }}<br><br>
                    </div>
                    <div class="col-md-9"  id="descricao"> 
                        {{ $comunic['condicoes_comunicacao'] }} 
                    </div>
                    @endforeach
             @endif 
        <div class="col-md-12"><br></div>
        <div class="col-md-12" id="cabecalho">
        6. Prazo máximo de conservação dos Dados pessoais (primeira entidade de interconexão)
        </div>
        <div class="col-md-12"><br></div> 
        <div class="col-md-3" id="name"> Qual o prazo máximo de conservação dos dados?</div>
        <div class="col-md-9" id="descricao">{{ $pedido->prazo_conservacao_dados }}<br></div> 
        <div class="col-md-12"><br></div>
        <div class="col-md-12" id="cabecalho">
        7. Fluxos internacionais de dados para outros países (primeira entidade de interconexão)
        </div>
        <div class="col-md-12"><br></div> 
        <div class="col-md-3" id="name"> <br>Entidades:</div>
        <div class="col-md-3" id="name"> <br>País:</div>
        <div class="col-md-6" id="name"> <br>Dados Transferidos:</div>
        <p><br><br></p>

            @if ($transferencia)
                    @foreach ($transferencia as $transf)
                    <div class="col-md-3"  id="descricao">
                        {{ $transf['entidades'] }}<br><br>
                    </div>
                    <div class="col-md-3"  id="descricao"> 
                        {{ $transf['pais'] }} 
                    </div>
                    <div class="col-md-6"  id="descricao"> 
                        {{ $transf['dados_transferidos'] }} 
                    </div>
                    @endforeach
             @endif 

        <div class="col-md-12"><br></div>
        <div class="col-md-12" id="cabecalho">
            8. Exercicio do direito de acesso às imagens gravadas
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
        <div class="col-md-3" id="name"> Forma de direito de acesso:</div>
        <div class="col-md-9" id="descricao">
            @if ($pedido->forma_direito_acesso)
                @foreach ($pedido->forma_direito_acesso as $forma)
                    {{ $forma }},
                @endforeach
            @endif
        </div>
        <div class="col-md-3" id="name"> Outra forma de direito de acesso:</div>
        <div class="col-md-9" id="descricao">{{ $pedido->outraforma_direito_acesso }}<br></div>


        <div class="col-md-12"><br></div>
        <div class="col-md-12" id="cabecalho">
            9. Medidas de segurança a implementar.
        </div>
        <div class="col-md-12"><br></div>
        <div class="col-md-3" id="name"> Medidas Físicas:</div>
        <div class="col-md-9" id="descricao">{{ $pedido->medidas_fisicas_seguranca }}<br></div>
        <div class="col-md-12"><br></div>
        <div class="col-md-3" id="name"> Medidas Lógicas:</div>
        <div class="col-md-9" id="descricao">{{ $pedido->medidas_logicas_seguranca }}<br></div>
        <div class="col-md-12"><br></div>
    </div>
    @else  
<!-- Breadcrumbs -->
{{ Breadcrumbs::render('Formulários Interconexão') }}
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

        #descricao {
            color: #061536;
            border-style: ridge;
        }
    </style>


@endsection
