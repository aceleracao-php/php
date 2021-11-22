<?php

class Revistas{

    private $codigo, $titulo, $tipo, $edicoes;

    public function __construct(){

    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }


    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    public function getEdicoes()
    {
        return $this->edicoes->getEdicao();
    }
    public function setEdicoes(Edicao $edicoes)
    {
        $this->edicoes = $edicoes;
    }
}

class Edicao
{
    private $ano, $qntArtigos, $numEdicao;

    public function __construct($ano, $qntArtigos, $numEdicao){
        $this->ano = $ano;
        $this->qntArtigos = $qntArtigos;
        $this->numEdicao = $numEdicao;
    }

    public function setEdicao($ano, $qntArtigos, $numEdicao)
    {
        $this->ano = $ano;
        $this->qntArtigos = $qntArtigos;
        $this->numEdicao = $numEdicao;
    }

    public function getEdicao()
    {
        return "Ano da edição {$this->ano}, possuindo {$this->qntArtigos} artigos e o npumero da edição {$this->numEdicao}";
    }
}

$revista = new Revistas();
$revista->setTitulo('Rafael Makiyama');
$revista->setCodigo('1');
$revista->setTipo('Tecnologia');
$edicao = new Edicao(2021, 12, 2);
$revista->setEdicoes($edicao);
var_dump($revista->getEdicoes());