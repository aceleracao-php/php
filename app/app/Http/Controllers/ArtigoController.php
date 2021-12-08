<?php

namespace App\Http\Controllers;

use App\Models\Artigo;
use Illuminate\Http\Request;

class ArtigoController extends Controller
{
    function index(){
        $artigos = Artigo::all();

        return view('artigo', compact('artigos'));
    }

    function exibe($id){
        //$artigo = Artigo::find($id);
        $artigo = Artigo::where('id', $id)->first();
        if(!$artigo){
            return redirect()->route('artigos.index');
        }
        
        return view('exibe', compact('artigo'));
    }
}
