@extends('layouts.master')
@section('title', 'Lista  CCTV')

@section('content')


     <!-- Breadcrumbs -->
     {{ Breadcrumbs::render('Formulários CCTV') }}

    <div class="row">
        <div class="col-md-12 col-md-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary"> Formulário DE CCTV</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Entidade</th>
                                        <th>Data Envio</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($pedidos)
                                        @foreach ($pedidos as $pedido)
                                            <tr>
                                                <td>{{ $pedido->id }}</td>
                                                <td>{{ $pedido->nome_denominacao  }}</td>
                                                <td>{{ $pedido->created_at}}</td>
                                                <td style="text-align: center">
                                                    <a href="{{ url('/videovigilancia/' . $pedido->id) }}"
                                                        class="btn btn-primary btn-circle"> <i class="fas fa-eye"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif

                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>

    </style>


@endsection
