@extends('layouts.master')
@section('title', 'List Users')

@section('content')

    <!-- Breadcrumbs -->
    {{ Breadcrumbs::render('Lista Users') }}

    <a href="{{ url('/users/create') }}" class="btn btn-primary btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-user-plus"><span class="text">New</span></i>
        </span>
    </a>
    <p></p>
    <!-- Custom styles for this page -->
    <link href="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Lista de Users</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Tipo User</th>
                            <th>Criado em:</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->typeUser }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td width="20%">
                                    <a id="btn" href="#" class="btn btn-primary btn-circle">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <form method="POST" action="{{ url('/users' . '/' . $user->id) }}">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button id="btn" type="submit" class="btn btn-danger btn-circle" aria-hidden="">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<style>
    #btn{
    display: inline-block;
    vertical-align: top;
}
</style>
    <!-- Page level plugins -->
    <script src="{{ asset('admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('admin/js/demo/datatables-demo.js') }}"></script>
@endsection
