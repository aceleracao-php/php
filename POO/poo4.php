<?php

/**
 * Composição - Uma classe cria a instância de outra classe, detro dela mesma
 */

class People{
    function dizNome($nome):String{
        return "O nome da pessoa é: $nome";
    }
}

class Formulario{
    public $pessoa;
    public $nome;

    function __construct($nome)
    {
        $this->nome = $nome;
        $this->pessoa = new People();
    }

    function exibePessoa(){
        echo $this->pessoa->dizNome($this->nome);
    }
}

$mostraPessoa = new Formulario("Joana");
$mostraPessoa->exibePessoa();