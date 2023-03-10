@extends('layouts.master')
@section('title', 'Ver Role')

@section('content')

@if($role) 
      <!-- Breadcrumbs -->
    {{ Breadcrumbs::render('Ver Role', $role) }}
     <!-- ALERT-->
     @if(session('message')) 
        <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Success!</h4>
        <p>{{ session('message')}}</p>
        </div>   
    @endif
    @if(session('alerta')) 
        <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">Opss!</h4>
        <p>{{ session('message')}}</p>
        </div>   
    @endif
    <div class="nova"> 
        </button>
        <button class="btn btn-warning" type="button" data-toggle="modal" data-target="#edit">
        <i class="fas fa-fw fa-edit"></i> Editar Role
        </button>
       <!-- 
        @if($role->estado =='Ativo')
        <button class="btn btn-info" type="button" data-toggle="modal" data-target="#unpublish">
            <i class="fas fa-fw fa-eye-slash"></i> Desabilitar
        </button> 
        @else
        <button class="btn btn-info" type="button" data-toggle="modal" data-target="#publish">
            <i class="fas fa-fw fa-eye"></i> Habilitar
        </button> 
        @endif
        -->
       
        <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#apagar">
        <i class="fas fa-fw fa-trash"></i> Delete Role
        </button>
    </div>
                
    <div class="row" id="geral">  
        <div class="col-md-12" id="cabecalho">
           <b>  {{ $role->name }}</b>
        </div> 
        <div class="col-md-12" id=" "><b>Name:</b> {{  $role->name }}</div>
        <div class="col-md-12" id=" "><b>Descrição:</b> {{  $role->guard_name }}</div>  
        <div class="col-md-12" id=" "><b>Criado em:</b> {{  $role->created_at }}</div> 

         
        
      
    </div>
    <div id="apagar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="my-modal-title">Apagar menu</h5>
                        <button class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="was-validated"  method="post" action="/roles" >
                            @csrf
                            <div class="row row-cols-1">
                            <div class="col" id="col"> 
                                    Deseja realmente apagar essa role?
                                <br>
                                    <p>Name: {{ $role->name}}</p>
                                    <p>Data Criação: {{ $role->created_at}}</p>
                                </div>  
                            </div>  
                            
                            <hr>
                            
                            <div id="modal-footer">
                            <a href="/delete/{{ $role->id}}"
                                class="btn btn-danger"> <i class="fas fa-trash"> Delete</i>
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
                    <h5 class="modal-title" id="my-modal-title">Desabilitar role</h5>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form class="was-validated"  method="post" action="/roles">
                    @csrf
                    <div class="row row-cols-1">
                        <div class="col" id="col"> 
                                Deseja realmente desabilitar essa role?
                        <br>
                                <p>Name: {{ $role->name}}</p>
                                <p>Criado em: {{ $role->created_at}}</p>
                        </div>  
                    </div>  
                        
                    <hr>
                    
                    <div id="modal-footer">
                    <a href="/desabilitar/{{ $role->id}}"
                        class="btn btn-info"> <i class="fas fa-eye-slash"> Disable</i>
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
                    <h5 class="modal-title" id="my-modal-title">Habilitar menu</h5>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form class="was-validated"  method="post" action="/roles">
                    @csrf
                    <div class="row row-cols-1">
                        <div class="col" id="col"> 
                                Deseja realmente habilitar esse menu?
                        <br>
                                <p>Name: {{ $role->name}}</p> 
                        </div>  
                    </div>  
                        
                    <hr>
                    
                    <div id="modal-footer">
                    <a href="/habilitar/{{ $role->id}}"
                        class="btn btn-info"> <i class="fas fa-eye"> Publish</i>
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
                    <h5 class="modal-title" id="edit-title">Editar menu</h5>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form class="was-validated"  method="post" action="{{ url('/roles/'.$role->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')  
                <div class="row row-cols-1"> 
                    <div class="col"> 
                        <label>Name</label>
                        <input type="text" value="{{ $role->name }}" id="name" placeholder="Name" name="name" class="form-control" required="" >
                        <div class="valid-feedback"></div> 
                        <div class="invalid-feedback">Campo obrigatório.</div>
                    </div>  
                </div> 
                <div class="row row-cols-1"> 
                    <div class="col"> 
                        <label>Descrição</label>
                        <input type="text" value="{{ $role->guard_name }}" id="guard_name" placeholder="Descrição" name="guard_name" class="form-control" required="" >
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
        
    @else  
<!-- Breadcrumbs -->

{{ Breadcrumbs::render('Roles') }}
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
        #edit,#vercapa,#publish,#unpublish,#apagar{      
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