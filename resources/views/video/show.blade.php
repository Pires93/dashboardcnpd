@extends('layouts.master')
@section('title', 'Ver Videos')

@section('content')

@if($vide) 
      <!-- Breadcrumbs -->
    {{ Breadcrumbs::render('Ver Video', $vide) }}
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
        
        @if($vide->estado =='Publicado')
        <button class="btn btn-info" type="button" data-toggle="modal" data-target="#unpublish">
            <i class="fas fa-fw fa-download"></i> Despublicar
        </button> 
        @else
        <button class="btn btn-info" type="button" data-toggle="modal" data-target="#publish">
            <i class="fas fa-fw fa-download"></i> Publicar
        </button> 
        @endif
       
        <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#apagar">
        <i class="fas fa-fw fa-trash"></i> Delete 
        </button>
    </div>
                
    <div class="row" id="geral">  
        <div class="col-md-12" id="cabecalho">
           <b>  {{ $vide->titulo }}</b>
        </div> 
        <div class="col-md-12"><br></div> 
        @if($vide->type=="Youtube")
        <iframe allow="fullscreen;" width="100%" height="550" :poster="'{{ url("storage/videos/")}}'+ $vide.capa "
        src="https://www.youtube.com/embed/{{$vide->link}}?autoplay=0&mute=0">
        </iframe>  
        @else
        <video width="100%" controls controls
              :poster="'{{ url("storage/videos/")}}'+ $vide.capa " >
            <source src="{{ $vide->link}}" type="video/mp4"> 
        </video> 
        @endif 
      
    </div>
    <div id="apagar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="my-modal-title">Apagar video</h5>
                        <button class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="was-validated"  method="post" action="/video" >
                            @csrf
                            <div class="row row-cols-1">
                            <div class="col" id="col"> 
                                    Deseja realmente apagar esse item?
                                <br>
                                    <p>Título: {{ $vide->titulo}}</p>
                                    <p>Data Criado: {{ $vide->created_at}}</p>
                                </div>  
                            </div>  
                            
                            <hr>
                            
                            <div id="modal-footer">
                            <a href="/deleten/{{ $vide->id}}"
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
                    <h5 class="modal-title" id="my-modal-title">Despublicar video</h5>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form class="was-validated"  method="post" action="/video">
                    @csrf
                    <div class="row row-cols-1">
                        <div class="col" id="col"> 
                                Deseja realmente despublicar essa video do Site?
                        <br>
                                <p>Título: {{ $vide->titulo}}</p>
                                <p>Publicado em: {{ $vide->created_at}}</p>
                        </div>  
                    </div>  
                        
                    <hr>
                    
                    <div id="modal-footer">
                    <a href="/unpublishv/{{ $vide->id}}"
                        class="btn btn-info"> <i class="fas fa-download"> Unpublish</i>
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
                    <h5 class="modal-title" id="my-modal-title">Publicar video</h5>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form class="was-validated"  method="post" action="/video">
                    @csrf
                    <div class="row row-cols-1">
                        <div class="col" id="col"> 
                                Deseja realmente publicar essa video do Site?
                        <br>
                                <p>Título: {{ $vide->titulo}}</p> 
                        </div>  
                    </div>  
                        
                    <hr>
                    
                    <div id="modal-footer">
                    <a href="/publishv/{{ $vide->id}}"
                        class="btn btn-info"> <i class="fas fa-download"> Publish</i>
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
                    <h5 class="modal-title" id="edit-title">Editar Video</h5>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form class="was-validated"  method="post" action="{{ url('/video/'.$vide->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PATCH') 
                
                    <div class="row row-cols-1">
                        <div class="col"> 
                        <label>Título</label>
                            <input type="text" value="{{ $vide->titulo }}" id="titulo" placeholder="Entre o título do video" name="titulo" class="form-control" required="">
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback">Campo obrigatório.</div>
                        </div>  
                    </div>  
                    <div class="row row-cols-1"> 
                         <div class="col"> 
                            <label>Link</label>
                            <input type="text" value="{{ $vide->link }}" id="link" placeholder="Introduza o link do video" name="link" class="form-control" >
                            <div class="valid-feedback"></div> 
                        </div> 
                        <div class="col"> 
                            <label>Thumbnail</label>
                            <input accept="image/png, image/gif, image/jpeg" value="{{ $vide->capa }}" type="file" id="capa" placeholder="Capa do video" name="capa" class="form-control" required="">
                            <div class="valid-feedback"></div> 
                            <div class="invalid-feedback">Campo obrigatório.</div>
                        </div> 
                        <div class="row row-cols-1"> 
                            <div class="col">
                                <label>Tipo link</label>
                                <select name="type" id="type" class="form-control"  aria-label="Default select example" required>
                                        <option value="">- Escolha uma opção -</option>  
                                    <option value="Youtube">Link youtube</option>
                                    <option value="Outro">Outro</option> 
                                </select>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">Campo obrigatório.</div>
                            </div>
                        </div>   
                        <!--<div class="col"> 
                            <label>Anexo</label>
                            <input type="file" value="{{ $vide->anexo }}" id="anexo" placeholder="Anexo de video" name="anexo" class="form-control">
                            <div class="va id-feedback"></div> 
                        </div> -->
                    </div>  
                    <div class="row row-cols-1"> 
                        <div class="col"> 
                        <label>Estado</label>
                            <select name="estado" value="{{ $vide->estado }}" id="estado" class="form-control"  aria-label="Default select example" required="">
                            <option value="Publicado">Publicar no Site</option>
                            <option value="Despublicado">Não Publicar</option>
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

{{ Breadcrumbs::render('Videos') }}
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