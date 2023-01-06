@extends('layouts.master')
@section('title', 'Criar Pedidos')

@section('content')

    <!-- Breadcrumbs  -->

    {{ Breadcrumbs::render('Responder Pedido',$pedido) }}
    <div class="container-fluid">
        <!-- Content Row -->

        <div class="row">
            <div class="col-md-12 col-md-12">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary"> Editar o Pedido </h6>
                    </div>
                    <div class="col-md-12">
                        <form method="POST" action="{{ url('/pedidoInformacao/'.$pedido->id)}}">
                            @csrf
                            @method('PATCH')
                             <div class="form-group">
                                    <input disabled type="text" id="nome" name="nome" value="{{ $pedido->nome }}" placeholder="Entre seu nome"
                                        class="form-control" required="">
                                </div>
                                <div class="form-group">
                                    <input disabled type="text" id="morada" name="morada" value="{{ $pedido->morada }}" placeholder="Entre sua morada"
                                        class="form-control" required="">
                                </div>
                                <div class="form-group">
                                    <input disabled type="number" id="telefone" name="telefone" value="{{ $pedido->telefone }}" placeholder="Entre seu telefone"
                                        class="form-control" required="">
                                </div>
                                <div class="form-group">
                                    <input disabled type="email" id="email" name="email" value="{{ $pedido->email }}" placeholder="Entre seu email"
                                        class="form-control" required="">
                                </div>
                                <div class="form-group">
                                    <input disabled type="text" id="assunto" name="assunto" value="{{ $pedido->assunto }}" placeholder="Entre o assunto"
                                        class="form-control" required="">
                                </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Responder ao pedido:</label>
                                <textarea required class="form-control" name="resposta" id="resposta" rows="4"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-fw fa-reply"></i> Responder
                            </button>
                    </div>
                    </form>
                    <div class="col-lg-4 mb-4"></div>
                </div>
            </div>

        </div>

    </div>



@endsection
