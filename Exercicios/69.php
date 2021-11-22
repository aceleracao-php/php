<?php

class Pessoa{
    //classe criada no exercicio 66

    function __construct($nome, $cpf, $endereco, $nomepai, $nomemae, $rg, $serialdeidentificacao){

    }
}

class Empregado extends Pessoa{
    private $id;
    private $funcao;
    private $horarioEntrada;
    private $horarioSaida;
    private $salario;
    private $horasExtras;

    public function __construct($nome, $cpf, $endereco, $nomepai, $nomemae, $rg, $serialdeidentificacao, $salario, $horasExtras, $id, $funcao, $horarioEntrada,$horarioSaida)
    {
        parent::__construct($nome, $cpf, $endereco, $nomepai, $nomemae, $rg, $serialdeidentificacao);
        $this->id = $id;
        $this->funcao = $funcao;
        $this->horarioSaida = $horarioSaida;
        $this->horarioEntrada = $horarioEntrada;
        $this->salario = $salario;
        $this->horasExtras = $horasExtras;
    }

    public function __toString()
    {
        $obj = [$this->id, $this->funcao, $this->horarioEntrada, $this->horarioSaida, $this->salario, $this->horasExtras];
        return json_encode($obj);
    }
}