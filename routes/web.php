<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('lugars', App\Http\Controllers\LugarController::class);
Route::resource('servicios', App\Http\Controllers\ServicioController::class);
Route::resource('convenios', App\Http\Controllers\ConvenioController::class);
Route::resource('eventos', App\Http\Controllers\EventoController::class);
Route::resource('gastronomias', App\Http\Controllers\GastronomiaController::class);
Route::resource('asignaturas', App\Http\Controllers\AsignaturaController::class);
Route::resource('tiposervicios', App\Http\Controllers\TiposervicioController::class);
Route::resource('rutas', App\Http\Controllers\RutaController::class);
Route::resource('servicios', App\Http\Controllers\ServicioController::class);
Route::resource('tipconvenios', App\Http\Controllers\TipconvenioController::class);
Route::resource('tipoeventos', App\Http\Controllers\TipoeventoController::class);
Route::resource('tipolugars', App\Http\Controllers\TipolugarController::class);
Route::resource('tipoplatos', App\Http\Controllers\TipoplatoController::class);
Route::resource('tiposervicios', App\Http\Controllers\TiposervicioController::class);
Route::resource('calificasiones', App\Http\Controllers\CalificasioneController::class);


Route::get('iglesias', [App\Http\Controllers\IglesiaController::class, 'index'])->name('iglesias');
Route::get('Administrador', [App\Http\Controllers\AdminController::class, 'index'])->middleware('can:admin')->name('Administrador');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('senderismo', App\Http\Controllers\senderismocontroller::class);
Route::resource('hoteles', App\Http\Controllers\Hotelescontroller::class);
Route::resource('museos', App\Http\Controllers\Museoscontroller::class);





Route::resource('posts', App\Http\Controllers\PostController::class);

// post del usuario
Route::get('Mispost', [App\Http\Controllers\PostController::class, 'Mispost'])->name('Mispost');
Route::get('publicacion', [App\Http\Controllers\PostController::class, 'publicacion'])->name('publicacion')->middleware('auth');

// gerear pdfs
Route::get('lugar/pdf', [App\Http\Controllers\LugarController::class, 'pdf'])->name('lugarpdf');

// perfil y foto de perfil 
Route::post('perfil', [App\Http\Controllers\UserAjustesController::class,'avatar'])->name('Avatar');
Route::get('perfil', [App\Http\Controllers\UserAjustesController::class, 'perfil'])->name('perfil');
Route::get('/Miperfil', [App\Http\Controllers\UserAjustesController::class, 'Miperfil'])->name('ActualizarPerfil')->middleware('auth');
Route::post('Actualizarperfil', [App\Http\Controllers\UserAjustesController::class,'Actualizar'])->name('Actualizar');

Route::get('form', [App\Http\Controllers\LugarController::class,'form'])->name('formulario');
//  para los users
Route::resource('usuarios', App\Http\Controllers\Usercontroller::class);