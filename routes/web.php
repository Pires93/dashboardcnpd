<?php

use App\Http\Controllers\GeolocalizacaoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InterconexaoController;
use App\Http\Controllers\PedidoInformacaoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideovigilanciaController; 
use App\Http\Controllers\NoticiaController; 
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

//CCTV ROUTES
Route::resource("/videovigilancia",VideovigilanciaController::class)->middleware('auth');
Route::get('/videovigilancia/{id}', [VideovigilanciaController::class, 'show'])->name('show')->middleware('auth');

//GPS ROUTES
Route::resource("/geolocalizacao",GeolocalizacaoController::class)->middleware('auth');
Route::get('/geolocalizacao/{id}', [GeolocalizacaoController::class, 'show'])->name('show')->middleware('auth');

//INTERCONEXAO ROUTES
Route::resource("/interconexao",InterconexaoController::class)->middleware('auth');
Route::get('/interconexao/{id}', [InterconexaoController::class, 'show'])->name('show')->middleware('auth');

//NOTICIA ROUTES 
Route::resource("/noticia",NoticiaController::class)->middleware('auth');
Route::get('/noticia/create', [NoticiaController::class, 'create'])->name('create');
Route::post('/noticia', [NoticiaController::class, 'store'])->name('index')->middleware('auth');
Route::get('/delete/{id}', [NoticiaController::class, 'destroy'])->name('index')->middleware('auth');
Route::get('/unpublish/{id}', [NoticiaController::class, 'unpublish'])->name('index')->middleware('auth');
 















Route::get('/users/{profile}',[UserController::class, 'profile'])->name('users.profile');

