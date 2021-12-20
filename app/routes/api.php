<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\Api\{ArtigoController, RevistaController};
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*Route::get('/artigos', function (){
    return ['id' => random_int(10, 100), 'user_name' => 'Jonatan', 'permissao' => 'Administrativo'];
});*/

/* -- Não é uma boa pratica
Route::get('/artigos/all', function(){
    return \App\Models\Artigo::paginate(10);
});*/

/*Route::get('/artigos', function(Request $request){
    //dd($request->headers->get('User-Agent'));
    $resposta = new Response(json_encode("Essa Api não pode ser usada para produção"));
    $resposta->header('Content-Type', 'application/json');

    return $resposta;
});*/

//Route::get('/artigos/all', [ArtigoController::class, 'index']);

Route::namespace('App\Http\Controllers\Api')->group(function(){
    
    Route::prefix('artigos')->group(function(){
        Route::get('/all', 'ArtigoController@index');
        Route::post('/novo', 'ArtigoController@insere');
        Route::get('/{id}', 'ArtigoController@exibe');
        Route::put('/{id}', 'ArtigoController@update');
        Route::delete('/{id}', 'ArtigoController@remover');
    });

    //Route::resource('/revistas', 'RevistaController');
    Route::apiResource('/revistas', 'RevistaController');
});


//Route::get('/revistas', 'RevistaController');

//CRUD === Recurso
