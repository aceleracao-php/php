<?php
require_once("Classes/Servico.php");
class Medico extends Pessoa implements Servico{
    public $crm;

    public function __construct($nome, $idade, $sexo, $altura, $peso, $crm){
        parent::__construct($nome, $idade, $sexo, $altura, $peso);
        $this->crm = $crm;
    }

    public function criarNota(){
        echo 'Não criou a nota';
    }
    public function criarOS(String $servico){
        echo 'Serviço realizado: '.$servico;
    }
}