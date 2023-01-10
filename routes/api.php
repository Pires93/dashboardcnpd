<?php

use App\Http\Controllers\ContatoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LegislacaoController;
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
Route::post('contatos/create', [ContatoController::class,'create']);
