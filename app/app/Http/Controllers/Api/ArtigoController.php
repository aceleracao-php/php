<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\{UpdateInsertArtigo};
use App\Models\Artigo;
use Illuminate\Http\Request;

class ArtigoController extends Controller
{
    function index(){
        //$artigos = Artigo::all(); 
        //$artigos = Artigo::paginate(1);
        //$artigos = Artigo::orderBy('title', 'ASC')->paginate(2);
        $artigos = Artigo::paginate(10);
        //return view('artigo', compact('artigos'));
        return response()->json($artigos);
    }

    function exibe($id){
        //$artigo = Artigo::find($id);
        $artigo = Artigo::where('id', $id)->first();
        if(!$artigo){
            return response()->json(['code' => '500', 'msg' => 'Erro ao exibir o Artigo | Ou o artigo não existe']);
        }
        
        return response()->json($artigo);
        //return view('exibe', compact('artigo'));
    }

    function insere(Request $form){
        //dd($form->all());
        //dd($form->resumo);
        $pagina = $form->code;
        
        $artigo = Artigo::create($form->all());
        if(!$artigo){
            dd($artigo);
        }
        return response()->json($artigo);
        //return redirect()->route('artigos.index');
    }

    function remover($id){
        $artigo = Artigo::find($id);

        if(!$artigo):
            return response()->json(['code' => '500', 'msg' => 'Erro ao deletar o Artigo']);
        endif;

        $artigo->delete();
        //return redirect()->route('artigos.index')->with('mensagem', "Artigo:{$id} foi deletado com sucesso!");
        return response()->json(['code' => '200', 'msg' => 'Artigo Removido com sucesso']);
    }

    public function update(Request $form, $id){
        $artigo = Artigo::find($id);

        if(!$artigo):
            //return redirect()->back();
            return response()->json(['code' => '500', 'msg' => 'Erro ao alterar o Artigo']);
        endif;

        $artigo->update($form->all());
        //return redirect()->route('artigos.index')->with('mensagem', "Artigo ##{$id} foi alterado com sucesso!");
        return response()->json($artigo);
    }

    public function login(){
        $usuario = ["id" => rand(4568, 155645), "name" => "Jonatan"];
        session(["usuario" => $usuario]);
    }

    public function logout(){
        session()->forget('usuario');
    }
}
