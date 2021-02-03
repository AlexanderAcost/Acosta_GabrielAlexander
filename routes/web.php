<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\EditorialController;

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

Route::get('/',[AdminController::class, 'home']); 

Route::get('libro/registro',[LibroController::class, 'formregistro']);
Route::POST('libro/registro',[LibroController::class, 'registro']);

Route::get('libro/lista',[LibroController::class, 'listar']);

Route::get('libro/editar/{idlibro}',[LibroController::class, 'formeditar'])->name('editarlibro'); 
Route::POST('libro/editar',[LibroController::class, 'editar']);

Route::get('editorial/lista',[EditorialController::class, 'listar']);