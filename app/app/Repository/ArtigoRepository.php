<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ArtigoRepository{

    private $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function filtraCampos(Request $request){
        $fields = $request->get('campos');
        //$artigos = $artigos->select('id', 'title');
        return $this->model = $this->model->selectRaw($fields);
    }

    public function filtraComCondicao(Request $request){
        $conditions = $request->get('conditions');
        $expressoes = explode(";",$conditions);

        /*foreach($expressoes as $e):
            $condition = explode('=', $e); // id = 4
            $artigos->where($condition[0], $condition[1]);
        endforeach;*/
        
        foreach($expressoes as $e):
            $condition = explode(':', $e); // id, >,  4
            $this->model->where($condition[0], $condition[1], $condition[2]);
        endforeach;

        return $this->model;
    }
}

?>