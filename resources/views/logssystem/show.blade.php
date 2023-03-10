@extends('layouts.master')
@section('title', 'Ver menu')

@section('content')

@if($log) 
      <!-- Breadcrumbs -->
    {{ Breadcrumbs::render('Ver Logs', $log) }}
     <!-- ALERT-->
     @if(session('message')) 
        <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Success!</h4>
        <p>{{ session('message')}}</p>
        </div>   
    @endif
    
                
    <div class="row" id="geral">  
        <div class="col-md-12" id="cabecalho">
           <b>  {{ $log->action }}</b>
        </div> 
        <div class="col-md-12" id=" "><b>Acção:</b> {{  $log->action }}</div>
        <div class="col-md-12" id=" "><b>User</b> {{  $log->user_name }}</div>
        <div class="col-md-12" id=" "><b>Evento:</b> {{  $log->nome_evento }}</div>
        <div class="col-md-12" id=" "><b>IP:</b> {{  $log->ip_address }}</div>
        <div class="col-md-12" id=" "><b>Browser:</b> {{  $log->user_agent }}</div> 
        <div class="col-md-12" id=" "><b>Tipo:</b>  {{  $log->tipo_evento }}</div>
        <div class="col-md-12" id=" "><b>Data:</b> {{  $log->created_at }}</div>

         
        
      
    </div>
            
   
  
   
        
    @else  
<!-- Breadcrumbs -->

{{ Breadcrumbs::render('Logs') }}
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