<?php

use App\Http\Controllers\AcercadeController;
use App\Http\Controllers\AdministradoresController;
use App\Http\Controllers\CategoriasController;
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
    return view('plantilla');
});

/** Rutas tabla Administradores */
Route::get('/administradores', [AdministradoresController::class, 'index'])->name('getAdmin');
Route::get('/formularioRegistro',[AdministradoresController::class, 'getFormularioRegistro'])->name('formulario.registro');
Route::post('/guardarAdministrador',[AdministradoresController::class, 'store'])->name('guardar');
Route::get('/formularioActualizar/{id}',[AdministradoresController::class, 'getFormularioActualizar'])->name('formulario.actualizar');
Route::put('/actualizarAdministrador/{id}',[AdministradoresController::class, 'update'])->name('actualizar');
Route::delete('/eliminarAdministrador/{id}',[AdministradoresController::class, 'eliminar'])->name('eliminarAdmin');

/** Rutas tabla Categorias */
Route::get('/categorias', [CategoriasController::class, 'index'])->name('getCategorias');
Route::get('/formularioRegistro',[CategoriasController::class, 'getFormularioRegistro'])->name('formulario.registro');
Route::post('/guardarCategoria',[CategoriasController::class, 'store'])->name('guardar');
Route::get('/formularioActualizar/{id}',[CategoriasController::class, 'getFormularioActualizar'])->name('formulario.actualizar');
Route::put('/actualizarCategoria/{id}',[CategoriasController::class, 'update'])->name('actualizar');
Route::delete('/eliminarCategoria/{id}',[CategoriasController::class, 'eliminar'])->name('eliminarCategoria');

/** Rutas tabla integrantes */
Route::get('/acercade',[AcercadeController::class, 'index'])->name('getAcercade');





