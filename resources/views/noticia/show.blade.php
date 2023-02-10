@extends('layouts.master')
@section('title', 'Lista Interconexão')

@section('content')

@if($news) 
      <!-- Breadcrumbs -->
    {{ Breadcrumbs::render('Ver Notícia', $news) }}
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
        <button class="btn btn-info" type="button" data-toggle="modal" data-target="#unpublish">
        <i class="fas fa-fw fa-download"></i> Despublicar
        </button>  
        <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#apagar">
        <i class="fas fa-fw fa-trash"></i> Delete 
        </button>
    </div>
                
    <div class="row" id="geral">  
        <div class="col-md-12" id="cabecalho">
           <b>  {{ $news->titulo }}</b>
        </div> 
        <div class="col-md-12"><br></div>
        <div class="row row-cols-3">
            <div class="col">
                <div class="card h-100">
                <img src="/capanoticia/{{$news->imagem}}"  alt="{{ $news->imagem }}" class="card-img-top" />
                </div>
            </div>
            <div class="col">
                <p><b>Nº: </b>{{ $news->id }}</p>
                <p><b>Título: </b>{{ $news->titulo }}</p>
                <p><b>Subtítulo: </b>{{ $news->subtitulo }}</p>
                <p><b>Autor: </b>{{ $news->autor }}</p>
                <p><b>Tipo Notícia: </b>{{ $news->type }}</p>
                <p><b>Data de news: </b>{{ $news->created_at }}</p>
                <p><b>Anexo: </b>{{ $news->anexo }}</p> 
                <p><b>Estado: </b>{{ $news->estado }}</p>
            </div> 
        </div> 
        <div class="col-md-12"><br></div>
        <div class="col-md-12">
        <p><b>Descrição:<br><br> </b>{{ $news->conteudo }}</p>  
        </div>
      
    </div>
    <div id="apagar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="my-modal-title">Apagar Notícia</h5>
                                <button class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <form class="was-validated"  method="post" action="/noticia" >
                                @csrf
                                <div class="row row-cols-1">
                                <div class="col" id="col"> 
                                         Deseja realmente apagar esse item?
                                    <br>
                                         <p>Título: {{ $news->titulo}}</p>
                                         <p>Data Criado: {{ $news->created_at}}</p>
                                    </div>  
                                </div>  
                                 
                                <hr>
                                
                                <div id="modal-footer">
                                <a href="/delete/{{ $news->id}}"
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
                                <h5 class="modal-title" id="my-modal-title">Despublicar Notícia</h5>
                                <button class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <form class="was-validated"  method="post" action="/noticia">
                                @csrf
                                <div class="row row-cols-1">
                                    <div class="col" id="col"> 
                                         Deseja realmente despublicar essa notícia do Site?
                                    <br>
                                         <p>Título: {{ $news->titulo}}</p>
                                         <p>Publicado em: {{ $news->created_at}}</p>
                                    </div>  
                                </div>  
                                 
                                <hr>
                                
                                <div id="modal-footer">
                                <a href="/unpublish/{{ $news->id}}"
                                    class="btn btn-info"> <i class="fas fa-download"> Unpublish</i>
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
                                <h5 class="modal-title" id="edit-title">Editar Notícia</h5>
                                <button class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <form class="was-validated"  method="post" action="{{ url('/noticia/'.$news->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH') 
                           
                                <div class="row row-cols-1">
                                    <div class="col"> 
                                        <input type="text" value="{{ $news->titulo }}" id="titulo" placeholder="Entre o Título da Notícia" name="titulo" class="form-control" required="">
                                        <div class="valid-feedback"></div>
                                        <div class="invalid-feedback">Campo obrigatório.</div>
                                    </div>  
                                </div>  
                                <div class="row row-cols-2">
                                    <div class="col"> 
                                        <input type="text" value="{{ $news->subtitulo }}" id="subtitulo" placeholder="Entre o subtitulo" name="subtitulo" class="form-control">
                                        <div class="valid-feedback"></div>
                                        <div class="invalid-feedback">Campo obrigatório.</div>
                                    </div>
                                    <div class="col"> 
                                        <input type="text" value="{{ $news->autor }}" id="autor" placeholder="Entre o autor" name="autor" class="form-control">
                                        <div class="valid-feedback"></div>
                                        <div class="invalid-feedback">Campo obrigatório.</div>
                                    </div> 
                                    <div class="col"> 
                                        <label>Foto de Capa</label>
                                        <input type="file" value="{{ $news->capa }}" id="capa" placeholder="Capa de Notícia" name="capa" class="form-control" required="">
                                        <div class="va id-feedback"></div>
                                        <div class="invalid-feedback">Campo obrigatório.</div>
                                    </div>
                                    <div class="col"> 
                                        <label>Anexo</label>
                                        <input type="file" value="{{ $news->anexo }}" id="anexo" placeholder="Anexo de Notícia" name="anexo" class="form-control">
                                        <div class="va id-feedback"></div> 
                                     </div> 
                                </div>  
                                <div class="row row-cols-2">
                                    <div class="col"> 
                                    <label>Tipo Notícia</label>
                                     <select name="type" value="{{ $news->type }}" id="type" class="form-control"  aria-label="Default select example" required="">
                                        <option value="Notícia">Notícia</option>
                                        <option value="Evento">Evento</option> 
                                    </select>
                                    <div class="valid-feedback"></div>
                                    <div class="invalid-feedback">Campo obrigatório.</div>
                                    </div>
                                    <div class="col"> 
                                    <label>Estado</label>
                                     <select name="estado" value="{{ $news->estado }}" id="estado" class="form-control"  aria-label="Default select example" required="">
                                        <option value="Publish">Publicar no Site</option>
                                        <option value="Unpublish">Não Publicar</option>  
                                    </select>
                                    <div class="valid-feedback"></div>
                                    <div class="invalid-feedback">Campo obrigatório.</div>
                                    </div>  
                                </div>   
                                <div class="row row-cols-1">
                                    <div class="col"> 
                                        <label>Descrição</label>
                                        <textarea value="{{ $news->conteudo }}" name="conteudo" class="form-control" rows="4" required=""></textarea>
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

{{ Breadcrumbs::render('Notícias') }}
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
