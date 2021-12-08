<?php

namespace App\Http\Controllers;

use App\Models\{Artigo, Usuario};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UsuarioController extends Controller
{
    function index(){
        $usuario = Usuario::usuarioLogado();
        //$artigos = Artigo::get();
        $artigos = Artigo::all();
        //Log::info("Os artigos foram consultados com sucesso!");
        //Log::warning("Falha ao consultar os artigos");
        //Log::channel('meulog')->info('Os artigos foram consultados');
        Log::channel('meulog')->warning('Falha na captura dos artigos');
        //dd($usuario);
        //echo "Chegou no método index da controller Usuario";
        //return view('admin.usuario')->with(compact('usuario'));,
        return view('admin.usuario', compact('usuario', 'artigos'));
    }
}
