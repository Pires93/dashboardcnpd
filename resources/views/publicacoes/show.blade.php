@extends('layouts.master')
@section('title', 'Ver Publicações')

@section('content')

@if($pubs) 
      <!-- Breadcrumbs -->
    {{ Breadcrumbs::render('Publicação ID', $pubs) }}
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
        @if($pubs->estado =='Publicado')
        <button class="btn btn-info" type="button" data-toggle="modal" data-target="#unpublish">
            <i class="fas fa-fw fa-download"></i> Despublicar
        </button> 
        @else
        <button class="btn btn-info" type="button" data-toggle="modal" data-target="#publish">
            <i class="fas fa-fw fa-upload"></i> Publicar
        </button> 
        @endif
        <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#apagar">
        <i class="fas fa-fw fa-trash"></i> Delete 
        </button>
    </div>
                
    <div class="row" id="geral">  
        <div class="col-md-12" id="cabecalho">
           <b>  {{ $pubs->titulo }}</b>
        </div> 
        <div class="col-md-12"><br>
        <embed
            class="borda"
            src="{{ url("storage/publicacoesPdf/{$pubs->anexo}")}}"
            width="100%"
            height="800px"
        />
        </div>
            
      
    </div>
                <div id="apagar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="my-modal-title">Apagar publicação</h5>
                                <button class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <form class="was-validated"  method="post" action="/publicacoes" >
                                @csrf
                                <div class="row row-cols-1">
                                <div class="col" id="col"> 
                                         Deseja realmente apagar esse item?
                                    <br>
                                         <p>Título: {{ $pubs->titulo}}</p>
                                         <p>Data Criado: {{ $pubs->created_at}}</p>
                                    </div>  
                                </div>  
                                 
                                <hr>
                                
                                <div id="modal-footer">
                                <a href="/deletep/{{ $pubs->id}}"
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
                                <h5 class="modal-title" id="my-modal-title">Despublicar documento</h5>
                                <button class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <form class="was-validated"  method="post" action="/publicacoes">
                                @csrf
                                <div class="row row-cols-1">
                                    <div class="col" id="col"> 
                                         Deseja realmente despublicar esse documento do site?
                                    <br>
                                         <p>Título: {{ $pubs->titulo}}</p>
                                         <p>Publicado em: {{ $pubs->created_at}}</p>
                                    </div>  
                                </div>  
                                 
                                <hr>
                                
                                <div id="modal-footer">
                                <a href="/unpublishp/{{ $pubs->id}}"
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
                                <h5 class="modal-title" id="my-modal-title">Publicar documento</h5>
                                <button class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <form class="was-validated"  method="post" action="/publicacoes">
                                @csrf
                                <div class="row row-cols-1">
                                    <div class="col" id="col"> 
                                         Deseja realmente publicar esse documento do site?
                                    <br>
                                         <p>Título: {{ $pubs->titulo}}</p> 
                                    </div>  
                                </div>  
                                 
                                <hr>
                                
                                <div id="modal-footer">
                                <a href="/publishp/{{ $pubs->id}}"
                                    class="btn btn-info"> <i class="fas fa-upload"> Publish</i>
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
                                <h5 class="modal-title" id="edit-title">Editar publicação</h5>
                                <button class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <form class="was-validated"  method="post" action="{{ url('/publicacoes/'.$pubs->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH') 
                           
                                <div class="row row-cols-1">
                                    <div class="col"> 
                                        <input type="text" value="{{ $pubs->titulo }}" id="titulo" placeholder="Entre o Título da Notícia" name="titulo" class="form-control" required="">
                                        <div class="valid-feedback"></div>
                                        <div class="invalid-feedback">Campo obrigatório.</div>
                                    </div>  
                                </div>  
                                <div class="row row-cols-1">  
                                    <div class="col"> 
                                        <label>Anexo</label>
                                        <input accept="application/pdf" type="file" value="{{ $pubs->anexo }}" id="anexo" placeholder="Anexo de Notícia" name="anexo" class="form-control" required="">
                                        <div class="va id-feedback"></div> 
                                     </div> 
                                </div>  
                                <div class="row row-cols-1"> 
                                    <div class="col"> 
                                        <label>Capa da publicação</label>
                                        <input  accept="image/png, image/gif, image/jpeg" type="file" id="imagem" placeholder="capa da publicação" name="imagem" class="form-control">
                                        <div class="va id-feedback"></div> 
                                     </div>  
                                </div> 
                                <div class="row row-cols-1"> 
                                    <div class="col"> 
                                        <label> Link</label>
                                        <input value="{{ $pubs->link }}"  name="link" id="link" class="form-control" > 
                                        <div class="valid-feedback"></div>
                                        <div class="invalid-feedback">Campo obrigatório.</div>
                                    </div>  
                                </div>  
                                <div class="row row-cols-2"> 
                                    <div class="col"> 
                                    <label>Estado</label>
                                     <select name="estado" value="{{ $pubs->estado }}" id="estado" class="form-control"  aria-label="Default select example" required="">
                                     <option value="">- Escolha uma opção -</option>  
                                     <option value="Publicado">Publicar no Site</option>
                                        <option value="Despublicado">Não Publicar</option> 
                                    </select>
                                    <div class="valid-feedback"></div>
                                    <div class="invalid-feedback">Campo obrigatório.</div>
                                    </div>  
                                    <div class="col"> 
                                    <label>Tipo documento</label>
                                     <input disabled value="{{ $pubs->type }}"  class="form-control" > 
                                    <div class="valid-feedback"></div>
                                    <div class="invalid-feedback">Campo obrigatório.</div>
                                    </div> 
                                </div>   
                                <div class="row row-cols-1">
                                    <div class="col"> 
                                        <label>Descrição</label>
                                        <input value="{{ $pubs->descricao }}" name="descricao" class="form-control" rows="4" required="">
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