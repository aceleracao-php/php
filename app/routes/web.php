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

Route::middleware('validapermissao')->group(function (){
    Route::get('/artigos/novo', [ArtigoController::class, 'novo'])->name('artigos.novo');
    Route::get('/artigos/editar/{id}', [ArtigoController::class, 'editar'])->name('artigos.editar');
    Route::delete('/artigos/remover/{id}', [ArtigoController::class, 'remover'])->name('artigos.remover');
});

Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');
Route::get('/artigos', [ArtigoController::class, 'index'])->name('artigos.index');
Route::post('/artigos', [ArtigoController::class, 'insere'])->name('artigos.inserir');
Route::get('/artigos/{id}', [ArtigoController::class, 'exibe'])->name('artigos.exibe');
Route::put('/artigos/{id}', [ArtigoController::class, 'update'])->name('artigos.update');
Route::get('/login', [ArtigoController::class, 'login'])->name('artigos.login');
Route::get('/logout', [ArtigoController::class, 'logout'])->name('artigos.logout');
