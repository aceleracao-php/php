<?php
require_once("Classes/Servico.php");
class Engenheiro extends Pessoa implements Servico{

    private $cod;
    private $funcao;
    
    function __construct($nome, $idade, $sexo, $altura, $peso, $cod, $funcao)
    {   
        parent::__construct($nome, $idade, $sexo, $altura, $peso);
        $this->$cod = $cod;
        $this->funcao = $funcao;
    }

    public function criarNota(){
        echo 'Criou a nota';
    }

    public function criarOS(string $servico){

    }
}

?>