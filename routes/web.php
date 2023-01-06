<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
/*se App\Http\Controllers\LegislacaoController;*/
use App\Http\Controllers\PedidoInformacaoController;
use App\Http\Controllers\UserController;


use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [HomeController::class,'login'])->middleware('auth');
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

//PEDIDO DE INFORMACAO ROUTES
Route::resource("/pedidoInformacao",PedidoInformacaoController::class)->middleware('auth');
Route::get('/pedidoInformacao/create', [PedidoInformacaoController::class, 'create'])->name('create');
Route::post('/pedidoInformacao', [PedidoInformacaoController::class, 'store'])->name('index')->middleware('auth');
Route::get('/pedidoInformacao/{id}', [PedidoInformacaoController::class, 'show'])->name('show')->middleware('auth');


//USERS ROUTES

Route::resource("/users",UserController::class)->middleware('auth');
Route::get('/users/create', [UserController::class, 'create'])->name('create');















Route::get('/users/{profile}',[UserController::class, 'profile'])->name('users.profile');

