@extends('layouts.master')
@section('title', 'List pedidos')

@section('content')


@if($pedido)

    <!-- Breadcrumbs -->
    {{ Breadcrumbs::render('Ver Pedido', $pedido) }}
    <div id="accoes">
        <a class="btn btn-danger" href="{{ url('/pedidoInformacao/' . $pedido->id) }}/edit">
            <i class="fa fa-reply" aria-hidden="true"></i>  Responder
        </a>
    </div>
    <div class="row">

        <div class="col-lg-6 mb-4" id="geral">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Pedido Nº. {{ $pedido->num_p }}</h6>
                </div>
                <div class="card-body">
                    <p><b>Nº de Pedido: </b>{{ $pedido->num_p }}</p>
                    <p><b>Nome: </b>{{ $pedido->nome }}</p>
                    <p><b>Morada: </b>{{ $pedido->morada }}</p>
                    <p><b>Telefone: </b>{{ $pedido->telefone }}</p>
                    <p><b>Email: </b>{{ $pedido->email }}</p>
                    <p><b>Assunto: </b>{{ $pedido->assunto }}</p>
                    <p><b>Data de Pedido: </b>{{ $pedido->data_p }}</p>
                </div>
            </div>

        </div>

        <div class="col-lg-6 mb-4" id="geral">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Assunto - {{ $pedido->assunto }}</h6>
                </div>
                <div class="card-body">
                    <p>{{ $pedido->duvida }}</p>
                </div>
            </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Resposta da CNPD</h6>
                </div>
                <div class="card-body">

                    <p>Respondida em: {{ $pedido->data_r }}</p>
                    <p>Resposta: {{ $pedido->resposta }}</p>
                </div>
            </div>
        </div>
    </div>


@else
<!-- Breadcrumbs -->

{{ Breadcrumbs::render('Pedidos Informação') }}
<div class="col-md-12" id="notFound">
    <br>
    <p>ID não encontrado.</p>
</div>

@endif
    <style>
        #geral {
            font-family: "Times New Roman", Times, serif;
            color: #061536;
        }

        #accoes {
            margin-bottom: 10px;
            margin-right: 20px;
            text-align: right;
        }
        #notFound {
            color: #ffffff;
            border-style: ridge;
            border-radius: 10px;
            background-color: #990000;
            text-align:center;
        }
    </style>
@endsection
