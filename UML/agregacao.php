<?php

class Aluno{
    private String $nome;
    private String $sobrenome;
    private String $cpf;
    private String $rg;
    private int $idade;
    private int $nivelEscolar;

    public function __construct($nome, $sobrenome, $cpf, $rg, $idade, $nivel)
    {
        $this->nome = $nome;
    //    ...
    }

    public function realizaMatricula(){

    }

    public function realizaRequerimento(){

    }

    public function solicitaCertificado(){

    }
}

class Turma{
    protected int $ano;
    protected String $nomeTurma;
    protected Aluno $alunos;
    protected int $capacidade;

    public function listarAlunos(){

    }

    public function exibeVagas(){

    }

    public function adicionaAluno(Aluno $aluno){
        
    }
}   

?>