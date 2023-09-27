<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('dashboard');
});
Route::get('/usuarios', [App\Http\Controllers\UserController::class, 'index'])->name('usuarios.index');
////rutas modulo usuario
Route::post('/usuarios/crear',[App\Http\Controllers\UserController::class, 'crear'])->name('usuarios.crear');

Route::get('/CargarUsuarios',[App\Http\Controllers\UserController::class, 'cargarusuarios'])->name('usuario.carga');

Route::post('/desactivar',[App\Http\Controllers\UserController::class, 'desactivar'])->name('usuario.desactivar');

Route::post('/activar',[App\Http\Controllers\UserController::class, 'activar'])->name('usuario.activar');

Route::post('/editar',[App\Http\Controllers\UserController::class, 'editar'])->name('usuario.editar');

Route::post('/actualizarusuario/{id}',[App\Http\Controllers\UserController::class, 'actualizar'])->name('usuario.actualizar');

///rutas meseros
Route::get('/meseros', [App\Http\Controllers\UserController::class, 'index_meseros'])->name('meseros.index');
