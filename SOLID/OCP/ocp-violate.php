<?php

class ContratoCarteira{
    function salario(){}
}

class Estagiario{
    function ajudaDeCusto(){

    }
}

class FolhaPagamento{
    protected $salario;

    function calculaPagamento($funcionario){
        if($funcionario instanceof ContratoCarteira){
            $this->salario = $funcionario->salario();
        }else if($funcionario instanceof Estagiario){
            $this->salario = $funcionario->ajudaDeCusto();
        }else{
            
        }
    }
}

?>