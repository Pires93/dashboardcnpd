<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\GeolocalizacaoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\InterconexaoController;
use App\Http\Controllers\LegislacaoController;
use App\Http\Controllers\PedidoInformacaoController;
use App\Http\Controllers\VideovigilanciaController;

/*
|--------------------------------------------------------------------------
| API Routes

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/
//LEGISLACAO CRUD
Route::get('legislacaos', [LegislacaoController::class,'index'])/*->middleware('auth')*/;
Route::post('legislacaos/create', [LegislacaoController::class,'create']);
Route::get('legislacaos/{id}', [LegislacaoController::class,'show']);
Route::put('legislacaos/{id}', [LegislacaoController::class,'update']);
Route::delete('legislacaos/{id}', [LegislacaoController::class,'destroy']);

//NOVOS CONTATOS DE SITE
Route::post('contatos/store', [PedidoInformacaoController::class,'store']);


Route::post('videovigilancia/create', [VideovigilanciaController::class,'create']);
Route::post('geolocalizacao/create', [GeolocalizacaoController::class,'create']);
Route::post('interconexao/create', [InterconexaoController::class,'create']);
