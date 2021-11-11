<?php
namespace externo;

class Pessoa{
    private String $nome;
    private int $idade;
    private String $sexo;
    //metodo magico
    
    public function __construct(String $nome, int $idade, String $sexo){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
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


    //set
    function setNome($nome){
        $this->nome = $nome;
    }

    //metodo magico
    function __toString()
    {
        $pessoa = array( 
            "Nome" => $this->nome,
            "Sexo" => $this->sexo,
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