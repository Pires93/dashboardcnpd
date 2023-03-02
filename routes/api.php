<?php
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GeolocalizacaoController;
use App\Http\Controllers\InterconexaoController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\LegislacaoController;
use App\Http\Controllers\PedidoInformacaoController;
use App\Http\Controllers\VideovigilanciaController;
use App\Http\Controllers\QueixaController;
use App\Http\Controllers\PublicacoesController;
use App\Http\Controllers\VideoController; 
use App\Http\Controllers\BiometriaController;
use App\Http\Controllers\TicController;
use App\Http\Controllers\GeralController;
 
//API PARA ALIMENTAR SITE

//LEGISLACAO
Route::get('legislacao', [LegislacaoController::class,'ListarLegislacao']);
Route::get('/legislacao/{id}', [LegislacaoController::class, 'ListarIdLegislacao']);

//PUBLICACOES
Route::get('isencoes', [PublicacoesController::class,'ListarIsencoes']);
Route::get('/isencoes/{id}', [PublicacoesController::class, 'IsencaoId']);
Route::get('deliberacoes', [PublicacoesController::class, 'ListarDeliberacao']);
Route::get('/deliberacao/{id}', [PublicacoesController::class, 'IsencaoId']);
Route::get('diretivas', [PublicacoesController::class, 'ListarDiretivas']);
Route::get('/diretiva/{id}', [PublicacoesController::class, 'IsencaoId']);
Route::get('planos', [PublicacoesController::class, 'ListarPlanos']);
Route::get('/plano/{id}', [PublicacoesController::class, 'IsencaoId']);
Route::get('relatorios', [PublicacoesController::class, 'ListarRelatorios']);
Route::get('/relatorio/{id}', [PublicacoesController::class, 'IsencaoId']);
Route::get('comunicados', [PublicacoesController::class, 'ListarComunicados']);
Route::get('/comunicado/{id}', [PublicacoesController::class, 'IsencaoId']);
Route::get('panfletos', [PublicacoesController::class, 'ListarPanfletos']);
Route::get('/panfleto/{id}', [PublicacoesController::class, 'IsencaoId']);
Route::get('videos', [VideoController::class, 'ListarVideos']); 



//NOTICIAS
Route::get('listarNoticias', [NoticiaController::class,'ListarTodasApi']);
Route::get('/noticia/{id}', [NoticiaController::class, 'listarApiId']);
Route::get('/ultimosEventos', [NoticiaController::class, 'listarUltimos3']);
Route::get('/ultimaNoticia', [NoticiaController::class, 'ultimaNoticia']);

//NOVOS FORMS VINDO DE SITE
Route::post('contatos/store', [PedidoInformacaoController::class,'store']);
Route::post('videovigilancia/create', [VideovigilanciaController::class,'create']);
Route::post('geolocalizacao/create', [GeolocalizacaoController::class,'create']);
Route::post('interconexao/create', [InterconexaoController::class,'create']);
Route::post('queixa/create', [QueixaController::class,'create']);

Route::post('biometria/store', [BiometriaController::class,'store']);


Route::post('geral/store', [GeralController::class, 'store']);


Route::post('tic/store', [TicController::class, 'store']);