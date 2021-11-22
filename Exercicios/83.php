<?php

interface Funcionario{
    public function funcao();
}

class Designer implements Funcionario{
    public function funcao(){
        echo "Faz design";
    }
}

class Senior implements Funcionario{
    public function funcao(){
        echo "Faz design";
    }
}

class Programmer implements Funcionario{
    public function funcao(){
        echo "Faz Codigo";
    }
}

class Tester implements Funcionario{
    public function funcao(){
        echo "Faz teste";
    }
}

class Empresa{

    function buscaFuncionario(Funcionario $funcionario){
        echo "O funcionário faz: ".$funcionario->funcao();
    }
}

?>