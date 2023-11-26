<?php

use App\Http\Controllers\api\CursoControllerApi;
use App\Http\Controllers\api\loginControllerApi;
use App\Http\Controllers\api\PersonaControllerApi;
use App\Http\Controllers\api\RegistroControllerApi;
use App\Http\Controllers\api\TipoAsignaturaControllerApi;
use App\Http\Controllers\api\UserControllerApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('registro', RegistroControllerApi::class)->names('registro');
Route::resource('users', UserControllerApi::class)->names('users');
Route::resource('cursos', CursoControllerApi::class)->names('traerCursos');
Route::resource('tipoAsignaturas',TipoAsignaturaControllerApi::class)->names('tipoAsignatura');
Route::resource('personas', PersonaControllerApi::class)->names('personas');


Route::post('/login', [loginControllerApi::class, 'login']);
