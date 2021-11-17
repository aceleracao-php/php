<?php

class Produto{
    private $valor;

    function getValor(){
        return $this->valor;
    }

    function setValor($valor){
        $this->valor = $valor;
    }
}

interface calculaImposto{
    function calcula(Produto $produto);
}

class Calculo{

    public function calculaImposto(calculaImposto $imposto, Produto $produto){
        return $imposto->calcula($produto);
    }
}

class ICMS implements calculaImposto{

    function calcula(Produto $produto)
    {
        return $produto->valor * 0.05;
    }
}

class KCV implements calculaImposto{
    
    function calcula(Produto $produto)
    {
        return $produto->valor * 0.02;
    }
}

?>