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

/*
|--------------------------------------------------------------------------
| API Routes

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/
//API PARA ALIMENTAR SITE
Route::get('legislacaos', [LegislacaoController::class,'index']);
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
