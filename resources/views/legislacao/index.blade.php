@extends('layouts.master')
@section('title', 'Lista  CCTV')
 
@section('content')


     <!-- Breadcrumbs -->
     {{ Breadcrumbs::render('Legislação') }}
      <link href="{{ asset('admin/css/styleDatatable.css') }}" rel="stylesheet" type="text/css">
    
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
                    <h6 class="m-0 font-weight-bold text-primary"> Legislação CNPD</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                 <!-- Large modal -->
                <div class="nova">
                    <button class="btn btn-success" type="button" data-toggle="modal" data-target="#my-modal">
                    <i class="fas fa-fw fa-plus"></i> Novo 
                    </button>
                </div>
                <div id="my-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="my-modal-title">Publicar nova Legislação</h5>
                                <button class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <form class="was-validated"  method="post" action="/legislacao" enctype="multipart/form-data">
                                @csrf
                                <div class="row row-cols-1">
                                    <div class="col"> 
                                        <input type="text" id="titulo" placeholder="Introduza o título da legislação" name="titulo" class="form-control" required="">
                                        <div class="valid-feedback"></div>
                                        <div class="invalid-feedback">Campo obrigatório.</div>
                                    </div>  
                                </div>  
                                <div class="row row-cols-1"> 
                                    <div class="col"> 
                                        <label>Anexo da legislação PDF</label>
                                        <input  accept="application/pdf" type="file" id="anexo" placeholder="Anexo de legislação" name="anexo" class="form-control" required="">
                                        <div class="va id-feedback"></div> 
                                     </div> 
                                </div>  
                                <div class="row row-cols-2"> 
                                    <div class="col"> 
                                    <label>Estado</label>
                                     <select name="estado" id="estado" class="form-control"  aria-label="Default select example" required="">
                                       <option value="">- Escolha uma opção -</option>  
                                       <option value="Publicado">Publicar no Site</option>
                                        <option value="Despublicado">Não Publicar</option>  
                                    </select>
                                    <div class="valid-feedback"></div>
                                    <div class="invalid-feedback">Campo obrigatório.</div>
                                    </div>  
                                </div>   
                                <div class="row row-cols-1">
                                    <div class="col"> 
                                        <label>Descrição</label>
                                        <textarea name="descricao" class="form-control" rows="4" required=""></textarea>
                                        <div class="valid-feedback"></div>
                                        <div class="invalid-feedback">Campo obrigatório.</div>
                                    </div>  
                                </div>
                                <hr>
                                <div id="modal-footer"> 
                                    <button type="submit" class="btn btn-success"> <i class="fas fa-fw fa-save"></i> Submeter</button>
                                </div>
                            </form>  
                            </div>                            
                        </div>
                    </div>
                </div>
                     
                 <!--end Large modal -->
                    <div class="card-body"> 
                        <div class="table-responsive">
                             
                            <table class="display dataTable cell-border" id="nhatabela" width="100%" cellspacing="0">
                                <thead>
                                    <tr> 
                                        <th>Id</th>
                                        <th>Título</th>
                                        <th>Data Criação</th> 
                                        <th>Estado</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($leis)
                                        @foreach ($leis as $lei)
                                            <tr> 
                                                <td>{{ $lei->id  }}</td>
                                                <td>{{ $lei->titulo  }}</td>
                                                <td>{{ $lei->created_at}}</td>
                                                <td>
                                                @if($lei->estado=="Publicado") 
                                                    <span class="text-success">{{ $lei->estado}}</span>
                                                    @else
                                                    <span class="text-warning">{{ $lei->estado}}</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ url('/legislacao/' . $lei->id) }}"
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
     
        #search{ 
            text-align:right;
        }
        #myInput{
            width:50%;
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
        #my-modal{      
        z-index: 10000000;
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
    <script>
         
      let table = new DataTable('#nhatabela'); 
         
        setTimeout(function(){
            $(".alert").slideUp(500, function(){
                $(this).remove(); 
            });
      //  window.location.reload();
        }, 5000)
    </script>
@endsection