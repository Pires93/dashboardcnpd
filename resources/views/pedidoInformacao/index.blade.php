@extends('layouts.master')
@section('title', 'List pedidos')

@section('content')


    <!-- Breadcrumbs -->
    {{ Breadcrumbs::render('Pedidos Informação') }}
    <div class="row">
        <div class="col-md-12 col-md-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary"> Pedidos de Informação</h6>
                    <!--   <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Dropdown Header:</div>
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>-->
                </div>
                <!-- Card Body -->
                <div class="card-body"> 
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nº.</th>
                                        <th>Nome</th>
                                        <th>Assunto</th>
                                        <th>Data Pedido</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($pedidos)
                                        @foreach ($pedidos as $pedido)
                                            <tr>
                                                <td>{{ $pedido->id }}</td>
                                                <td>{{ $pedido->num_p }}</td>
                                                <td>{{ $pedido->nome }}</td>
                                                <td>{{ $pedido->assunto }}</td>
                                                <td>{{ $pedido->data_p }}</td>
                                                <td style="text-align: center">
                                                    <a href="{{ url('/pedidoInformacao/' . $pedido->id) }}"
                                                        class="btn btn-primary btn-circle"> <i class="fas fa-eye"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif

                                </tbody>

                            </table>
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
