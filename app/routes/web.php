<?php

use App\Http\Controllers\{UsuarioController, ArtigoController};
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

Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');
Route::get('/artigos', [ArtigoController::class, 'index'])->name('artigos.index');
Route::get('/artigos/{id}', [ArtigoController::class, 'exibe'])->name('artigos.exibe');