<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\{UpdateInsertArtigo};
use App\Http\Resources\ArtigoResource;
use App\Http\Resources\ArtigoResourceCollection;
use App\Models\Artigo;
use App\Models\ArtigoPgsql;
use App\Repository\ArtigoRepository;
use Illuminate\Http\Request;

class ArtigoController extends Controller
{
    private $model;

    public function __construct(ArtigoPgsql $model){
        $this->model = $model;
        $this->middleware('jwt.auth');
    }

    function index(Request $request){
        //$artigos = $this->model->all(); 
        //$artigos = $this->model->paginate(1);
        //$artigos = $this->model->orderBy('title', 'ASC')->paginate(2);
        //$artigos = $this->model->paginate(10);
        //return view('artigo', compact('artigos'));
        //return response()->json($artigos);

        $artigos = $this->model;
        $artigoRepository = new ArtigoRepository($artigos);
        if($request->has('campos')):
            $artigos = $artigoRepository->filtraCampos($request);
        endif;

        if($request->has('conditions')):
            $artigos = $artigoRepository->filtraComCondicao($request);
        endif;
        
        
        return new ArtigoResourceCollection($artigos->paginate(25));
    }

    function exibe($id){
        //$artigo = $this->model->find($id);
        $artigo = $this->model->where('id', $id)->first();
        if(!$artigo){
            return response()->json(['code' => '500', 'msg' => 'Erro ao exibir o Artigo | Ou o artigo não existe']);
        }
        
        //return response()->json($artigo);
        //return view('exibe', compact('artigo'));
        return new ArtigoResource($artigo);
    }

    function insere(UpdateInsertArtigo $form){
        //dd($form->all());
        //dd($form->resumo);
        $pagina = $form->code;
        
        $artigo = $this->model->create($form->all());
        if(!$artigo){
            dd($artigo);
        }
        return response()->json($artigo);
        //return redirect()->route('artigos.index');
    }

    function remover($id){
        $artigo = $this->model->find($id);

        if(!$artigo):
            return response()->json(['code' => '500', 'msg' => 'Erro ao deletar o Artigo']);
        endif;

        $artigo->delete();
        //return redirect()->route('artigos.index')->with('mensagem', "Artigo:{$id} foi deletado com sucesso!");
        return response()->json(['code' => '200', 'msg' => 'Artigo Removido com sucesso']);
    }

    public function update(UpdateInsertArtigo $form, $id){
        $artigo = $this->model->find($id);

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
