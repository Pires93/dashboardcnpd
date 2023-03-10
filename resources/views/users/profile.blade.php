@extends('layouts.master')
@section('title', 'Ver User')

@section('content')

@if($user) 
      <!-- Breadcrumbs -->
    {{ Breadcrumbs::render('Ver User', $user) }}
     <!-- ALERT-->
     @if(session('message')) 
        <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Success!</h4>
        <p>{{ session('message')}}</p>
        </div>   
    @endif
     
        <div class="nova"> 
            </button>
            @if(Auth::id()==$user->id) 
            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#password">
            <i class="fas fa-fw fa-key"></i> Change Passsword 
            </button>
            @endif
            @can('admin-manager')
                <button class="btn btn-warning" type="button" data-toggle="modal" data-target="#edit">
                <i class="fas fa-fw fa-edit"></i> Editar 
                </button>
                @if($user->estado =='Ativo')
                <button class="btn btn-info" type="button" data-toggle="modal" data-target="#unpublish">
                    <i class="fas fa-fw fa-eye-slash"></i> Desativar
                </button> 
                @else
                <button class="btn btn-info" type="button" data-toggle="modal" data-target="#publish">
                    <i class="fas fa-fw fa-eye"></i> Ativar
                </button> 
                @endif
            
                <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#apagar">
                <i class="fas fa-fw fa-trash"></i> Delete 
                </button>
            @endcan
        </div>
                    
        <div class="row" id="geral">  
            <div class="col-md-12" id="cabecalho">
            <b>  {{ $user->name }}</b>
            </div> 
            <div class="col-md-12"><br></div>
            <div class="row row-cols-3">
                <div class="col">
                    <div class="card h-100">
                    <a href="" data-toggle="modal" data-target="#verfoto">
                    <img src="{{ url("storage/users/{$user->foto}")}}"   alt="{{ $user->foto }}" class="card-img-top" /> </div>
                    </a>
                </div>
                <div class="col">
                    <p><b>Nº: </b>{{ $user->id }}</p>
                    <p><b>Nome: </b>{{ $user->name }}</p>
                    <p><b>Email: </b>{{ $user->email }}</p>
                    <p><b>Tipo: </b>{{ $user->typeUser }}</p> 
                    <p><b>Data registo: </b>{{ $user->created_at }}</p> 
                    <p><b>Estado: </b>{{ $user->estado }}</p>
                </div> 
            </div> 
            <div class="col-md-12"><br></div> 
        
        </div>
        <div id="apagar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="my-modal-title">Remover user</h5>
                            <button class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="was-validated"  method="post" action="/users" >
                                @csrf
                                <div class="row row-cols-1">
                                <div class="col" id="col"> 
                                        Deseja realmente remover esse item?
                                    <br>
                                        <p>Nome: {{ $user->name}}</p>
                                        <p>Data Criado: {{ $user->created_at}}</p>
                                    </div>  
                                </div>  
                                
                                <hr>
                                
                                <div id="modal-footer">
                                <a href="/deleteu/{{ $user->id}}"
                                    class="btn btn-danger"> <i class="fas fa-trash"> Remover</i>
                                </a>  
                                </div>
                            </form>  
                        </div>                            
                    </div>
                </div> 
        </div>           
        <div id="unpublish" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="my-modal-title">Desativar user</h5>
                        <button class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form class="was-validated"  method="post" action="/users">
                        @csrf
                        <div class="row row-cols-1">
                            <div class="col" id="col"> 
                                    Deseja realmente desativar esse user?
                            <br>
                                    <p>Nome: {{ $user->name}}</p> 
                            </div>  
                        </div>  
                            
                        <hr>
                        
                        <div id="modal-footer">
                        <a href="/desativar/{{ $user->id}}"
                            class="btn btn-info"> <i class="fas fa-eye-slash"> Desativar</i>
                        </a>  
                        </div>
                    </form> 
                    


                    </div>                            
                </div>
            </div>
        </div> 
        <div id="publish" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="my-modal-title">Ativar user</h5>
                        <button class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form class="was-validated"  method="post" action="/users">
                        @csrf
                        <div class="row row-cols-1">
                            <div class="col" id="col"> 
                                    Deseja realmente ativar esse user?
                            <br>
                                    <p>Nome: {{ $user->name}}</p> 
                            </div>  
                        </div>  
                            
                        <hr>
                        
                        <div id="modal-footer">
                        <a href="/ativar/{{ $user->id}}"
                            class="btn btn-info"> <i class="fas fa-eye"> Ativar</i>
                        </a>  
                        </div>
                    </form> 
                    


                    </div>                            
                </div>
            </div>
        </div>
        <div id="edit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="edit-title">Editar User</h5>
                        <button class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form class="was-validated"  method="post" action="{{ url('/users/'.$user->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH') 
                    
                        
                        <div class="row row-cols-1">
                            <div class="col"> 
                                <label>Nome</label>
                                <input type="text" value="{{ $user->name }}" id="name" placeholder="Nome Completo" name="name" class="form-control" required="">
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">Campo obrigatório.</div>
                                </div>  
                            </div> 
                            <div class="row row-cols-1"> 
                                <div class="col">
                                    <label>Email</label>
                                    <input type="text" value="{{ $user->email }}" id="email" placeholder="Email" name="email" class="form-control" required="">
                                    <div class="valid-feedback"></div>
                                    <div class="invalid-feedback">Campo obrigatório.</div>
                                </div>  
                            </div>   
                            <div class="row row-cols-1"> 
                                <div class="col"> 
                                    <label>Foto</label>
                                    <input  accept="image/png, image/gif, image/jpeg"  value="{{ $user->foto }}" type="file" id="foto" placeholder="Foto" name="foto" class="form-control">
                                    <div class="va id-feedback"></div> 
                                    <div class="invalid-feedback">Campo obrigatório.</div>
                                    </div> 
                            </div> 
                            <div class="row row-cols-2"> 
                                <div class="col"> 
                                    <label>Tipo User</label>
                                    <select name="typeUser" id="typeUser" class="form-control"  aria-label="Default select example" required="">
                                    <option value="">- Escolha uma opção -</option>  
                                    @if($roles)
                                        @foreach($roles as $role)
                                        <option value="{{$role->name}}">{{$role->name}}</option>  
                                        @endforeach
                                    @endif
                                    </select>
                                    <div class="valid-feedback"></div>
                                    <div class="invalid-feedback">Campo obrigatório.</div>
                                </div>
                                <div class="col"> 
                                    <label>Estado</label>
                                    <select name="estado" value="{{ $user->estado }}" id="estado" class="form-control"  aria-label="Default select example" required="">
                                    <option value="">- Escolha uma opção -</option>  
                                    <option value="Ativo">Ativo</option>
                                        <option value="Inativo">Inativo</option> 
                                    </select>
                                    <div class="valid-feedback"></div>
                                    <div class="invalid-feedback">Campo obrigatório.</div>
                                </div>   
                            </div>  
                        <hr>
                        <div id="modal-footer"> 
                            <button type="submit" class="btn btn-warning"> <i class="fas fa-fw fa-edit"></i> Editar</button>
                        </div>
                    </form> 
                    


                    </div>                            
                </div>
            </div>
        </div> 
        <div id="verfoto" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="my-modal-title">{{ $user->name }}</h5>
                        <button class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row row-cols-1">
                        <embed
                            class="borda"
                            src="{{ url("storage/users/{$user->foto}")}}"
                            width="100%"
                            height="400px"
                        />
                        </div>                            
                </div>
            </div>
        </div>
     
    @else  
<!-- Breadcrumbs -->

{{ Breadcrumbs::render('Lista Users') }}
<div class="col-md-12" id="notFound">
    <br>
    <p>ID não encontrado.</p>
</div>
         

@endif
    <style>
        table, th, td {
         border:1px solid black;
        }
         #modal-body{
            color: #061536;
            font-family: 'Times New Roman', Times, serif;
        }
        .modal-title, label{
            color: #061536; 
            font-weight: bold; 
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
        .nova {
            margin-bottom: 10px;
            margin-right: 20px;
            text-align: right;
        }

        #cabecalho {
            color: #ffffff;
            border-style: ridge;
            border-radius: 10px;
            text-align: center;
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
        #col{
            color: #061536; 
            font-weight: bold; 
            text-align: center; 
        }
        #modal-footer{
            text-align: center; 
        }
        #edit,#verfoto,#publish,#unpublish,#apagar{      
        height:auto;
        z-index: 10000000;
        }
        
    </style>
<script>
    setTimeout(function(){
        $(".alert").slideUp(500, function(){
            $(this).remove(); 
        });
    //  window.location.reload();
    }, 5000)
</script>

@endsection