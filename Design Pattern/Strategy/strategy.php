<?php

class Imposto{
    private $valor;

    function getValor(){
        return $this->valor;
    }

    function setValor($valor){
        $this->valor = $valor;
    }
}

interface calculaImposto{
    function calcula();
}

class Calculo{

    public function calculaImposto(calculaImposto $imposto){
        return $imposto->calcula();
    }
}

class ICMS implements calculaImposto{
    private $valor;

    function calcula()
    {
        $this->valor * 0.05;
    }
}

class KCV implements calculaImposto{
    function calcula()
    {
        $this->valor * 0.02;
    }
}

?>