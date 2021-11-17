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
        return $this->valor * 0.05;
    }
}

class KCV implements calculaImposto{
    private $valor;
    
    function calcula()
    {
        return $this->valor * 0.02;
    }
}

?>