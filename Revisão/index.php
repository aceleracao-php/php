<?php

//interface - para obrigar que quem a implemente siga diretrizes

interface CriaNumero{
    public function criaDecimal();
}

interface CriaNumero2{
    public function criaDecimal();
    public function criaFloat();
}

interface CriaNumero3{
    public function criaDecimal();
    public function criaFloat();
    public function criaInt();
}

//Não pode ser instanciada
abstract class Numeral{
    public function criaDecimal(){
        //faz alguma coisa
    }

    public abstract function criaInt($nome);
}

class Alfabeto{
    public $qntLetras;
    public $qntNumeros;
}

class VariosNumeros extends Alfabeto{
    public function criaInt($nome){

    }
}

class FuncionarioTaxa{
    private $inss;
    private $salario;
    
    function __construct($inss, $salario)
    {
        $this->salario = $salario;
        $this->inss = $inss;
    }
}

class GerenteTaxa{
    private $inss;
    private $salario;
    
    function __construct($inss, $salario)
    {
        $this->salario = $salario;
        $this->inss = $inss;
    }
}

class Funcionario{
    private $nome;
    private $email;
    private $valorTaxa;

    function __construct($nome, $email)
    {
        $this->nome = $nome;
        $this->email = $email;
    }

    function setTaxa(GerenteTaxa d$taxa):void{
        $this->taxa = $taxa;
    }

}


class Numero extends Numeral{
    //int, String, float, array, composições
    private mixed $nome;
    public String $nome1;
    protected $nome2;

    public function criaInt($nome){

    }

    public function criaDecimal(){
        echo 'Criou decimal';
    }

    //estrutura array
    /**
     * "chave" => "valor"
     * array()
     * array(1 => "meu nome", "sobrenome" => "Santos")
     * [1,2,3,4,"santos"]
     */
    public function __construct(String $nome, String $nome1, array $nome2)
    {
        $this->nome = $nome;
    }

    //metodo get
    public function getNome():String{
        return $this->nome1;//1
        //'1'
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function mostraNumero($variavel){
        echo "O número é: {$variavel}";
    }

    public function __toString()
    {
        return "Nome: ".$this->nome." nome1: ".$this->nome1;
    }
}



?>