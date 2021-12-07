<?php

namespace App\Http\Controllers;

use App\Models\{Artigo, Usuario};
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    function index(){
        $usuario = Usuario::usuarioLogado();
        //$artigos = Artigo::get();
        $artigos = Artigo::all();
        //dd($usuario);
        //echo "Chegou no método index da controller Usuario";
        //return view('admin.usuario')->with(compact('usuario'));,
        return view('admin.usuario', compact('usuario', 'artigos'));
    }
}
