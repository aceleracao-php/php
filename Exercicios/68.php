<?php

class Pessoa{
    //classe criada no exercicio 66

    function __construct($nome, $cpf, $endereco, $nomepai, $nomemae, $rg, $serialdeidentificacao){

    }
}

class Secretaria extends Pessoa{
    private $id;
    private $funcao;
    private $horaTrabalhada;
    private $horasExtras;

    public function __construct($nome, $cpf, $endereco, $nomepai, $nomemae, $rg, $serialdeidentificacao, $id, $funcao, $horatrabalhada,$horaextra)
    {
        parent::__construct($nome, $cpf, $endereco, $nomepai, $nomemae, $rg, $serialdeidentificacao);
        $this->id = $id;
        $this->funcao = $funcao;
        $this->horasExtras = $horaextra;
        $this->horasTrabalhada = $horatrabalhada;
    }

    public function __toString()
    {
        $obj = [$this->id, $this->funcao, $this->horaTrabalhada, $this->horasExtras];
        return json_encode($obj);
    }
}