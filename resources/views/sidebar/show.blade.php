@extends('layouts.master')
@section('title', 'Ver menu')

@section('content')

@if($side) 
      <!-- Breadcrumbs -->
    {{ Breadcrumbs::render('Ver Menu', $side) }}
     <!-- ALERT-->
     @if(session('message')) 
        <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Success!</h4>
        <p>{{ session('message')}}</p>
        </div>   
    @endif
    <div class="nova"> 
        </button>
        <button class="btn btn-warning" type="button" data-toggle="modal" data-target="#edit">
        <i class="fas fa-fw fa-edit"></i> Editar 
        </button>
        
        @if($side->estado =='Ativo')
        <button class="btn btn-info" type="button" data-toggle="modal" data-target="#unpublish">
            <i class="fas fa-fw fa-eye-slash"></i> Desabilitar
        </button> 
        @else
        <button class="btn btn-info" type="button" data-toggle="modal" data-target="#publish">
            <i class="fas fa-fw fa-eye"></i> Habilitar
        </button> 
        @endif
       
        <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#apagar">
        <i class="fas fa-fw fa-trash"></i> Delete 
        </button>
    </div>
                
    <div class="row" id="geral">  
        <div class="col-md-12" id="cabecalho">
           <b>  {{ $side->titulo }}</b>
        </div> 
        <div class="col-md-12" id=" "><b>Titulo:</b> {{  $side->titulo }}</div>
        <div class="col-md-12" id=" "><b>Url:</b> {{  $side->url }}</div>
        <div class="col-md-12" id=" "><b>Estado:</b> {{  $side->estado }}</div>
        <div class="col-md-12" id=" "><b>Tipo:</b> {{  $side->type }}</div>
        <div class="col-md-12" id=" "><b>Criado em:</b> {{  $side->created_at }}</div>
        <div class="col-md-12" id=" "><b>Icon:</b> <i class="{{  $side->icon }}"></i></div>

         
        
      
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
                        <form class="was-validated"  method="post" action="/sidebar" >
                            @csrf
                            <div class="row row-cols-1">
                            <div class="col" id="col"> 
                                    Deseja realmente apagar esse menu?
                                <br>
                                    <p>Título: {{ $side->titulo}}</p>
                                    <p>Data Criação: {{ $side->created_at}}</p>
                                </div>  
                            </div>  
                            
                            <hr>
                            
                            <div id="modal-footer">
                            <a href="/delete/{{ $side->id}}"
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
                    <h5 class="modal-title" id="my-modal-title">Desabilitar menu</h5>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form class="was-validated"  method="post" action="/sidebar">
                    @csrf
                    <div class="row row-cols-1">
                        <div class="col" id="col"> 
                                Deseja realmente desabilitar esse menu?
                        <br>
                                <p>Título: {{ $side->titulo}}</p>
                                <p>Criado em: {{ $side->created_at}}</p>
                        </div>  
                    </div>  
                        
                    <hr>
                    
                    <div id="modal-footer">
                    <a href="/desabilitar/{{ $side->id}}"
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
                <form class="was-validated"  method="post" action="/sidebar">
                    @csrf
                    <div class="row row-cols-1">
                        <div class="col" id="col"> 
                                Deseja realmente habilitar esse menu?
                        <br>
                                <p>Título: {{ $side->titulo}}</p> 
                        </div>  
                    </div>  
                        
                    <hr>
                    
                    <div id="modal-footer">
                    <a href="/habilitar/{{ $side->id}}"
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
                <form class="was-validated"  method="post" action="{{ url('/sidebar/'.$side->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PATCH') 
                
                <div class="row row-cols-1"> 
                    <div class="col"> 
                        <label>Nome de menu</label>
                        <input type="text" id="titulo" value="{{ $side->titulo }}" placeholder="Nome do menu" name="titulo" class="form-control" required="" >
                        <div class="valid-feedback"></div> 
                        <div class="invalid-feedback">Campo obrigatório.</div>
                    </div>  
                </div> 
                <div class="row row-cols-1"> 
                    <div class="col"> 
                        <label>Url do menu</label>
                        <input type="text" id="url" value="{{ $side->url }}" placeholder="Url do menu" name="url" class="form-control" required="" >
                        <div class="valid-feedback"></div> 
                        <div class="invalid-feedback">Campo obrigatório.</div>
                    </div>  
                </div> 
                <div class="row row-cols-1"> 
                    <div class="col"> 
                        <label>Icon de menu</label>
                        <input type="text" id="icon" value="{{ $side->icon }}" placeholder="Icon do menu" name="icon" class="form-control" required="" >
                        <div class="valid-feedback"></div> 
                        <div class="invalid-feedback">Campo obrigatório.</div>
                    </div>  
                </div> 
                <div class="row row-cols-1"> 
                    <div class="col"> 
                        <label>Tipo menu</label>
                        <select value="{{ $side->type }}" name="type" id="type" class="form-control"  aria-label="Default select example" required="">
                        <option value="">- Escolha uma opção -</option>  
                        <option value="Normal">Normal</option>
                            <option value="Formulario">Formulário</option>  
                            <option value="Gestao">Gestão</option>  
                        </select>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback">Campo obrigatório.</div>
                    </div>  
                </div> 
                <div class="row row-cols-1"> 
                    <div class="col"> 
                        <label>Estado</label>
                        <select value="{{ $side->estado }}" name="estado" id="estado" class="form-control"  aria-label="Default select example" required="">
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
        
    @else  
<!-- Breadcrumbs -->

{{ Breadcrumbs::render('Menu') }}
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