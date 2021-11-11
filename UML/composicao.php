<?php

class Edicoes{

    private int $ano;
    private int $qntArtigos;
    private int $numEdicoes;

    public function getEdicao(){

    }

    public function setEdicao(Edicoes $edicao){

    }
}

class Revistas{

    private $codigo;
    private $titulo;
    private $tipo;
    private Edicoes $edicao;

    public function getEdicao(){

    }

    public function setEdicao(Edicoes $edicao):void{

    }

}

?>