<?php

use App\Http\Controllers\GeolocalizacaoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InterconexaoController;
use App\Http\Controllers\PedidoInformacaoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideovigilanciaController; 
use App\Http\Controllers\NoticiaController; 
use App\Http\Controllers\LegislacaoController; 
use App\Http\Controllers\PublicacoesController; 
use App\Http\Controllers\VideoController; 
use App\Http\Controllers\SidebarController;  
use App\Http\Controllers\ConselhospraticoController;  
use App\Http\Controllers\RoleController;  
use App\Http\Controllers\PermissionController;  
use App\Http\Controllers\RoleUserController;  

use Illuminate\Support\Facades\Auth;

 

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
Route::post('/users', [UserController::class, 'store'])->name('index')->middleware('auth');
Route::get('/deleteu/{id}', [UserController::class, 'destroy'])->name('destroy')->middleware('auth');
Route::get('/desativar/{id}', [UserController::class, 'desativar'])->name('index')->middleware('auth');
Route::get('/ativar/{id}', [UserController::class, 'ativar'])->name('index')->middleware('auth');
Route::get('/users/{profile}',[UserController::class, 'profile'])->name('users.profile');

 
//CCTV ROUTES
Route::resource("/videovigilancia",VideovigilanciaController::class)->middleware('auth');
Route::get('/videovigilancia/{id}', [VideovigilanciaController::class, 'show'])->name('show')->middleware('auth');

//GPS ROUTES
Route::resource("/geolocalizacao",GeolocalizacaoController::class)->middleware('auth');
Route::get('/geolocalizacao/{id}', [GeolocalizacaoController::class, 'show'])->name('show')->middleware('auth');

//INTERCONEXAO ROUTES
Route::resource("/interconexao",InterconexaoController::class)->middleware('auth');
Route::get('/interconexao/{id}', [InterconexaoController::class, 'show'])->name('show')->middleware('auth');

//BIOMETRIA ROUTES
Route::resource("/biometria",BiometriaController::class)->middleware('auth');
Route::get('/biometria/{id}', [BiometriaController::class, 'show'])->name('show')->middleware('auth');

//TIC ROUTES
Route::resource("/tic",TicController::class)->middleware('auth');
Route::get('/tic/{id}', [TicController::class, 'show'])->name('show')->middleware('auth');

//GERAL ROUTES
Route::resource("/geral",GeralController::class)->middleware('auth');
Route::get('/geral/{id}', [GeralController::class, 'show'])->name('show')->middleware('auth');


//NOTICIA ROUTES 
Route::resource("/noticia",NoticiaController::class)->middleware('auth'); 
Route::post('/noticia', [NoticiaController::class, 'store'])->name('index')->middleware('auth');
Route::get('/deleten/{id}', [NoticiaController::class, 'destroy'])->name('index')->middleware('auth');
Route::get('/unpublishn/{id}', [NoticiaController::class, 'unpublishn'])->name('index')->middleware('auth');
Route::get('/publishn/{id}', [NoticiaController::class, 'publishn'])->name('index')->middleware('auth');
 


//LEGISLACAO ROUTES 
Route::resource("/legislacao",LegislacaoController::class)->middleware('auth'); 
Route::post('/legislacao', [LegislacaoController::class, 'store'])->name('index')->middleware('auth');
Route::get('/deletel/{id}', [LegislacaoController::class, 'destroy'])->name('index')->middleware('auth');
Route::get('/unpublishl/{id}', [LegislacaoController::class, 'unpublishl'])->name('index')->middleware('auth');
Route::get('/publishl/{id}', [LegislacaoController::class, 'publishl'])->name('index')->middleware('auth');
 
 
//PUBLICACOES ROUTES 
Route::resource("/publicacoes",PublicacoesController::class)->middleware('auth'); 
Route::post('/publicacoes', [PublicacoesController::class, 'store'])->name('index')->middleware('auth');
Route::get('/deletep/{id}', [PublicacoesController::class, 'destroy'])->name('index')->middleware('auth');
Route::get('/unpublishp/{id}', [PublicacoesController::class, 'unpublishp'])->name('index')->middleware('auth');
Route::get('/publishp/{id}', [PublicacoesController::class, 'publishp'])->name('index')->middleware('auth');
 
//VIDEO ROUTES 
Route::resource("/video",VideoController::class)->middleware('auth'); 
Route::post('/video', [VideoController::class, 'store'])->name('index')->middleware('auth');
Route::get('/deleten/{id}', [VideoController::class, 'destroy'])->name('index')->middleware('auth');
Route::get('/unpublishv/{id}', [VideoController::class, 'unpublishv'])->name('index')->middleware('auth');
Route::get('/publishv/{id}', [VideoController::class, 'publishv'])->name('index')->middleware('auth');
 
//SIDEBAR ROUTES 
Route::resource("/sidebar",SidebarController::class)->middleware('auth'); 
Route::post('/sidebar', [SidebarController::class, 'store'])->name('index')->middleware('auth');
Route::get('/delete/{id}', [SidebarController::class, 'destroy'])->name('index')->middleware('auth'); 
Route::get('/desabilitar/{id}', [SidebarController::class, 'desabilitar'])->name('index')->middleware('auth');
Route::get('/habilitar/{id}', [SidebarController::class, 'habilitar'])->name('index')->middleware('auth');
 
 //CONSELHOS PRATICOS ROUTES 
Route::resource("/conselhopratico",ConselhospraticoController::class)->middleware('auth'); 
Route::post('/conselhopratico', [ConselhospraticoController::class, 'store'])->name('index')->middleware('auth');
Route::get('/delete/{id}', [ConselhospraticoController::class, 'destroy'])->name('index')->middleware('auth');
Route::get('/unpublish/{id}', [ConselhospraticoController::class, 'unpublish'])->name('index')->middleware('auth');
Route::get('/publish/{id}', [ConselhospraticoController::class, 'publish'])->name('index')->middleware('auth');
 
 //ROLES ROUTES 
Route::resource("/roles",RoleController::class)->middleware('auth'); 
Route::post('/roles', [RoleController::class, 'store'])->name('roles.store')->middleware('auth');
Route::get('/delete/{id}', [RoleController::class, 'destroy'])->name('roles.destroy')->middleware('auth'); 
 
 

 //PERMISSIONS ROUTES 
 Route::resource("/permission",PermissionController::class)->middleware('auth'); 
 Route::post('/permission', [PermissionController::class, 'store'])->name('permission.index')->middleware('auth');
 Route::get('/delete/{id}', [PermissionController::class, 'destroy'])->name('permission.delete')->middleware('auth');
 
  //PERMISSIONS de users 
 Route::resource("/userpermissions",RoleUserController::class)->middleware('auth'); 
 Route::post('/userpermissions', [RoleUserController::class, 'store'])->name('userpermissions.index')->middleware('auth');
 Route::get('/delete/{id}', [PermissionController::class, 'destroy'])->name('userpermissions.delete')->middleware('auth');
 
 


 
 /*
Route::get('/users/{profile}',[UserController::class, 'profile'])->name('users.profile')
->middleware('can:listar-users');*/

  