@extends('layouts.master')
@section('title', 'Gestão de Roles')

@section('content')
 

     <!-- Breadcrumbs -->
     {{ Breadcrumbs::render('Permissões de Users') }}

    <link href="{{ asset('admin/css/styleDatatable.css') }}" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <div class="row">
        <div class="col-md-12 col-md-12"> 
            <div class="card shadow mb-4">

                <!-- ALERT-->
                @if(session('message')) 
                    <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Success!</h4>
                    <p>{{ session('message')}}</p>
                    </div>  
                    
                @endif
                

                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary"> Permissão ACL</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                 <!-- Large modal -->
                <div class="nova">
                    <button class="btn btn-success" type="button" data-toggle="modal" data-target="#my-modal">
                    <i class="fas fa-fw fa-list"></i> Add Permissão 
                    </button>
                </div>
                <div id="my-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="my-modal-title">Nova Permissão</h5>
                                <button class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <form class="was-validated"  method="post" action="/userpermissions" enctype="multipart/form-data">
                                @csrf  
                                <div class="row row-cols-1"> 
                                    <div class="col"> 
                                        <label>User</label>
                                        <select name="roles" class="form-control" required="">
                                        <option value="">- Escolha uma opção -</option>  
                                            @if($roles)
                                                @foreach($roles as $role)
                                                    <option value="{{$role->id}}_{{$role->name}}">{{$role->name}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        <div class="valid-feedback"></div>
                                        <div class="invalid-feedback">Campo obrigatório.</div>
                                    </div> 
                                    <div class="col"> 
                                        <label>Permissão</label> <br>  
                                            <select name="permissions" class="form-control" required="">
                                                <option value="">- Escolha uma opção -</option> 
                                                @if($permissions)
                                                    @foreach($permissions as $permission)
                                                    <option value="{{$permission->id}}_{{$permission->name}}">{{$permission->name}}</option>
                                                    @endforeach
                                                @endif
                                            </select> 
                                        <div class="valid-feedback"></div>
                                        <div class="invalid-feedback">Campo obrigatório.</div>
                                    </div> 
                                    

                                    
                                </div>    
                                <hr>
                                <div id="modal-footer"> 
                                    <button type="submit" class="btn btn-success"> <i class="fas fa-fw fa-save"></i> Guardar</button>
                                </div>
                            </form> 
                            


                            </div>                            
                        </div>
                    </div>
                </div>
                     
                 <!--end Large modal -->
                    <div class="card-body">
                        <div class="table-responsive">
                        <table class="display dataTable cell-border"  id="nhatabela" width="100%" cellspacing="0">
                                <thead>
                                    <tr> 
                                        <th>Id</th>
                                        <th>Tipo User</th> 
                                        <th>Permissions</th> 
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($upermissions)
                                        @foreach ($upermissions as $up) 
                                            <tr> 
                                                <td>{{ $idd++  }}</td>
                                                <td>{{ $up->role_name }}</td> 
                                                <td> 
                                                    <label class="badge badge-success">{{$up->permission_name}}</label>
                                                </td>  
                                                <td>
                                                    <a href="{{ url('/userpermissions/' . $up->id) }}"
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
        #my-modal{      
        z-index: 10000000;
        }
        #modal-body{
            color: #061536;
            font-family: 'Times New Roman', Times, serif;
        }
        .nova {
            margin-bottom: 10px;
            margin-right: 20px;
            text-align: right;
        }
        .modal-title, label{
            color: #061536; 
            font-weight: bold; 
        }
        
        #modal-footer{
            text-align: center; 
        }
        span.select2.select2-container.select2-container--classic{
        width: 100% !important;
        }
    </style> 
             
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
        crossorigin="anonymous">
</script> 
<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js">
</script> 
<script src="https://code.jquery.com/jquery-3.5.1.js">
</script> 


<script src="https://code.jquery.com/jquery-3.6.3.min.js" 
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" 
    crossorigin="anonymous">
</script>
<script src="{{ asset('admin/js/Datatable.js') }}"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
 
    <script>
        $(document).ready(function(){
            $('.js-example-basic-single').select2({
                theme: "classic"
            });
        });
      let table = new DataTable('#nhatabela'); 
         
        setTimeout(function(){
            $(".alert").slideUp(500, function(){
                $(this).remove(); 
            });
      //  window.location.reload();
        }, 5000)
    </script>
 
 
@endsection