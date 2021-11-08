<?php
require_once('Classes/Servico.php');

abstract class Professor implements Servico {

    public $aulas = 150;
    public function criarNota(){
        echo 'Simplesmente criou a nota';
    }

    public function criarOS(String $servico){
        echo json_encode($servico);
    }

    public function soma(){
        return $this->aulas;
    }
}