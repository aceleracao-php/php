<?php

namespace App\Http\Controllers;

use App\Http\Requests\{UpdateInsertArtigo};
use App\Models\Artigo;
use Illuminate\Http\Request;

class ArtigoController extends Controller
{
    function index(){
        //$artigos = Artigo::all(); 
        //$artigos = Artigo::paginate(1);
        //$artigos = Artigo::orderBy('title', 'ASC')->paginate(2);
        $artigos = Artigo::latest()->paginate();
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

    function novo(){
        return view('admin.insereartigo');
    }

    function insere(UpdateInsertArtigo $form){
        //dd($form->all());
        //dd($form->resumo);
        $artigo = Artigo::create($form->all());
        if(!$artigo){
            dd($artigo);
        }

        return redirect()->route('artigos.index');
    }

    function remover($id){
        $artigo = Artigo::find($id);

        if(!$artigo):
            return redirect()->route('artigos.index');
        endif;

        $artigo->delete();
        return redirect()->route('artigos.index')->with('mensagem', "Artigo:{$id} foi deletado com sucesso!");
    }

    function editar($id){
        $artigo = Artigo::find($id);

        if(!$artigo):
            return redirect()->back();
        endif;

        return view('admin.alteraartigo', compact('artigo'));
    }

    public function update(UpdateInsertArtigo $form, $id){
        $artigo = Artigo::find($id);

        if(!$artigo):
            return redirect()->back();
        endif;

        $artigo->update($form->all());
        return redirect()->route('artigos.index')->with('mensagem', "Artigo ##{$id} foi alterado com sucesso!");
    }
}
