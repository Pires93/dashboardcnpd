@extends('layouts.master')
@section('title', 'Ver Conselhos Práticos')

@section('content')

@if($consels) 
      <!-- Breadcrumbs -->
    {{ Breadcrumbs::render('Ver Conselho Prático', $consels) }}
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
        
        @if($consels->estado =='Publicado')
        <button class="btn btn-info" type="button" data-toggle="modal" data-target="#unpublish">
            <i class="fas fa-fw fa-eye-slash"></i> Despublicar
        </button> 
        @else
        <button class="btn btn-info" type="button" data-toggle="modal" data-target="#publish">
            <i class="fas fa-fw fa-eye"></i> Publicar
        </button> 
        @endif
       
        <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#apagar">
        <i class="fas fa-fw fa-trash"></i> Delete 
        </button>
    </div>
                
    <div class="row" id="geral">  
        <div class="col-md-12" id="cabecalho">
           <b>  {{ $consels->titulo }}</b>
        </div> 
        <div class="col-md-12"><br></div>
        <div class="row row-cols-3">
            <div class="col">
                <div class="card h-100">
                <a href="" data-toggle="modal" data-target="#vercapa">
                <img src="{{ url("storage/conselhopratico/{$consels->imagem}")}}"   alt="{{ $consels->imagem }}" class="card-img-top" /> </div>
                </a>
            </div>
            <div class="col">
                <p><b>Nº: </b>{{ $consels->id }}</p>
                <p><b>Título: </b>{{ $consels->titulo }}</p> 
                <p><b>Data de publicação: </b>{{ $consels->created_at }}</p>
                <p><b>Anexo: </b>{{ $consels->anexo }}</p> 
                <p><b>Estado: </b>{{ $consels->estado }}</p>
            </div> 
        </div> 
        <div class="col-md-12"><br></div>
        <div class="col-md-12">
        <p><b>Descrição:<br><br> </b>{{ $consels->descricao }}</p>  
        </div>
      
    </div>
    <div id="apagar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="my-modal-title">Apagar conselho prático</h5>
                        <button class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="was-validated"  method="post" action="/conselhopratico" >
                            @csrf
                            <div class="row row-cols-1">
                            <div class="col" id="col"> 
                                    Deseja realmente apagar esse item?
                                <br>
                                    <p>Título: {{ $consels->titulo}}</p>
                                    <p>Data Criado: {{ $consels->created_at}}</p>
                                </div>  
                            </div>  
                            
                            <hr>
                            
                            <div id="modal-footer">
                            <a href="/deleten/{{ $consels->id}}"
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
                    <h5 class="modal-title" id="my-modal-title">Despublicar conselho prático</h5>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form class="was-validated"  method="post" action="/conselhopratico">
                    @csrf
                    <div class="row row-cols-1">
                        <div class="col" id="col"> 
                                Deseja realmente despublicar essa conselho prático do Site?
                        <br>
                                <p>Título: {{ $consels->titulo}}</p>
                                <p>Publicado em: {{ $consels->created_at}}</p>
                        </div>  
                    </div>  
                        
                    <hr>
                    
                    <div id="modal-footer">
                    <a href="/unpublish/{{ $consels->id}}"
                        class="btn btn-info"> <i class="fas fa-eye-slash"> Unpublish</i>
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
                    <h5 class="modal-title" id="my-modal-title">Publicar conselho prático</h5>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form class="was-validated"  method="post" action="/conselhopratico">
                    @csrf
                    <div class="row row-cols-1">
                        <div class="col" id="col"> 
                                Deseja realmente publicar esse conselho prático do Site?
                        <br>
                                <p>Título: {{ $consels->titulo}}</p> 
                        </div>  
                    </div>  
                        
                    <hr>
                    
                    <div id="modal-footer">
                    <a href="/publish/{{ $consels->id}}"
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
                    <h5 class="modal-title" id="edit-title">Editar conselho prático</h5>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form class="was-validated"  method="post" action="{{ url('/conselhopratico/'.$consels->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PATCH') 
                
                    <div class="row row-cols-1">
                        <div class="col"> 
                            <input type="text" value="{{ $consels->titulo }}" id="titulo" placeholder="Entre o título da conselho prático" name="titulo" class="form-control" required="">
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback">Campo obrigatório.</div>
                        </div>  
                    </div>  
                    <div class="row row-cols-2">
                         
                        <div class="col"> 
                            <label>Foto de Capa</label>
                            <input type="file" value="{{ $consels->imagem }}" id="imagem" placeholder="Capa de conselho prático" name="imagem" class="form-control" required="">
                            <div class="va id-feedback"></div>
                            <div class="invalid-feedback">Campo obrigatório.</div>
                        </div>
                        <div class="col"> 
                            <label>Anexo</label>
                            <input type="file" value="{{ $consels->anexo }}" id="anexo" placeholder="Anexo de conselho prático" name="anexo" class="form-control">
                            <div class="va id-feedback"></div> 
                            </div> 
                    </div>  
                    <div class="row row-cols-2"> 
                        <div class="col"> 
                        <label>Estado</label>
                            <select name="estado" value="{{ $consels->estado }}" id="estado" class="form-control"  aria-label="Default select example" required="">
                            <option value="">- Escolha uma opção -</option>  
                            <option value="Publicado">Publicar no site</option>
                             <option value="Despublicado">Não publicar</option>   
                        </select>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback">Campo obrigatório.</div>
                        </div>  
                    </div>   
                    <div class="row row-cols-1">
                        <div class="col"> 
                            <label>Descrição</label>
                            <textarea value="{{ $consels->descricao }}" name="descricao" class="form-control" rows="4" required=""></textarea>
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
    <div id="vercapa" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="my-modal-title">{{ $consels->titulo }}</h5>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row row-cols-1">
                    <embed
                        class="borda"
                        src="{{ url("storage/conselhopratico/{$consels->imagem}")}}"
                        width="100%"
                        height="400px"
                    />
                    </div>                            
            </div>
        </div>
    </div>
        
    @else  
<!-- Breadcrumbs -->

{{ Breadcrumbs::render('Conselhos Práticos') }}
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