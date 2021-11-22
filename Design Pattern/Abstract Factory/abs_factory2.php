<?php

interface carroBasico{
    function criarCarro();
    function motorBasico($potencia);
}

class Gol implements carroBasico{
    private $potencia;

    function getPotencia(){
        return $this->potencia;
    }

    function setPotencia($potencia):void{
        $this->potencia = $potencia;
    }

    function criarCarro(){
        echo 'é um Gol 1.0';
    }
    function motorBasico($potencia){
        echo "Essa é a potencia do motor: $potencia";
    }
}

class Uno implements carroBasico{
    private $potencia;

    function getPotencia(){
        return $this->potencia;
    }

    function setPotencia($potencia):void{
        $this->potencia = $potencia;
    }

    function criarCarro(){
        echo 'é um UNO 1.0 Mile';
    }
    function motorBasico($potencia){
        echo "Essa é a potencia do motor: $potencia";
    }
}


interface carroLuxo{
    function criarCarro();
    
    function kitMultimidia($qntComponentes);
}

class Amarok implements carroLuxo{
    function criarCarro(){
        echo 'é uma caminhonete 3.0';
    }
    
    function kitMultimidia($qntComponentes){
        echo "O kit multimidia é composto por:  {$qntComponentes}";
    }
}

interface MontadoraFactory{
    function montaCarroBasico():carroBasico;
    function montaCarroLuxo():carroLuxo;
}

class VolkswagemFactory implements MontadoraFactory{
    function montaCarroBasico():carroBasico{
        return new Gol();
    }
    function montaCarroLuxo():carroLuxo{
        return new Amarok();
    }
}

?>