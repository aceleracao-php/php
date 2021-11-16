<?php

interface Remuneravel{
    public function remuneracao();
}

class ContratoCarteira implements Remuneravel{
    public function remuneracao(){}
}

class Estagiario implements Remuneravel{
    public function remuneracao(){}
}

class PJ implements Remuneravel{
    public function remuneracao(){}
}

class PjEmpreita implements Remuneravel{
    public function remuneracao(){}
}

class FolhaPagamento{
    protected $salario;

    function calculaPagamento(Remuneravel $funcionario){
        $this->salario = $funcionario->remuneracao();
    }
}

?>