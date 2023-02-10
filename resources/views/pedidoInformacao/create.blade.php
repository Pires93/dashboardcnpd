@extends('layouts.master')
@section('title', 'Criar Pedidos')

@section('content')

<!-- Breadcrumbs -->
{{ Breadcrumbs::render('Novo Pedido') }}
    <div class="container-fluid">
        <!-- Content Row -->

        <div class="row">
            <div class="col-md-12 col-md-12">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary"> Criar novo Pedido de Informação</h6>
                    </div>
                    <div class="col-lg-4 mb-4"></div>
                    <div class="col-lg-4 mb-4">
                        <form method="POST" action="/pedidoInformacao">
                                @csrf
                                <div class="form-group">
                                    <input type="text" id="nome" name="nome" placeholder="Entre seu nome"
                                        class="form-control" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="morada" name="morada" placeholder="Entre sua morada"
                                        class="form-control" required="">
                                </div>
                                <div class="form-group">
                                    <input type="number" id="telefone" name="telefone" placeholder="Entre seu telefone"
                                        class="form-control" required="">
                                </div>
                                <div class="form-group">
                                    <input type="email" id="email" name="email" placeholder="Entre seu email"
                                        class="form-control" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="assunto" name="assunto" placeholder="Entre o assunto"
                                        class="form-control" required="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Descreve a sua duvida</label>
                                    <textarea class="form-control" name="duvida" id="duvida" placeholder="Descreva a sua duvida" rows="2"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-fw fa-save"></i> Save
                                </button>
                        </form>

                        </div>
                    </div>
                    <div class="col-lg-4 mb-4"></div>
                </div>

            </div>

        </div>



    @endsection
