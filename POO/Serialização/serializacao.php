<?php

class Pessoa{
    private String $nome;
    private int $idade;
    private String $sexo;
    private float $altura;
    private String $peso;
    //metodo magico

    public function __construct(String $nome, int $idade, String $sexo, float $altura, String $peso){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->altura = $altura;
        $this->peso = $peso;
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

$p1 = new Pessoa("Jonatan", 15, 'M', 2.80, 60);
$p2 = new Pessoa("Maria", 20, 'F', 1.50, 50);

var_dump($p1);
echo "<br><br>";
echo "--------------------<br> Objeto comum: ";
var_dump($p2);
echo "--------------------<br> Objeto Serializado: ";
$objSerializado = serialize($p2);
var_dump($objSerializado);
echo "--------------------<br> Objeto Deserializado:<br><br> ";
var_dump(unserialize($objSerializado));
?>
