<?php

class Pessoa{
    private String $nome;
    private int $idade;
    private String $sexo;
    private float $altura;
    private static String $peso;
    //metodo magico
    
    public function __construct(String $nome, int $idade, String $sexo, float $altura, String $peso){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->altura = $altura;
        Pessoa::$peso = $peso;
    }
    //metodo magico
    /*public function __destruct()
    {
        echo 'Finalizou o objeto';
    }*/

    function mostraPessoa():String{
        return 'Pessoa: nome: '. $this->nome . 'Idade: '. $this->idade;
    }

    //get
    function getNome(){
        return $this->nome;
    }

    function getAltura(){
        return $this->altura;
    }

    //set
    function setNome($nome){
        $this->nome = $nome;
    }

    //metodo magico
    function __toString()
    {
        $pessoa = array( 
            "Nome" => $this->nome,
            "Altura" => $this->altura,
            "Sexo" => $this->sexo,
            "Peso" => $this->peso,
            "Idade" => $this->idade
        );

        return json_encode($pessoa);
    }

    public function validaSexo(String $sexo):bool{
        if($sexo === "M"){
            return true;
        }else{
            return false;
        }
    }

    public static function validaPessoa($nome){
        if(is_null($nome)){
            echo true;
        }else{
            echo false;
        }
    }
}


?>