<?php

abstract class Carro{
  protected $nome;

  abstract function valor();

  function getNome(){
    return $this->nome;
  }

}

abstract class FuncionalidadeDecorator extends Carro{
  //metodos referentes as funcionalidades ou extensoes do carro
}

class Uno extends Carro{
  public function __construct()
  {
      $this->nome = "Fiat UNO";
  }

  function valor(){
    return 13.000;
  }
}

class Strada extends Carro{
  public function __construct()
  {
      $this->nome = "Fiat Strada";
  }

  function valor(){
    return 25.000;
  }
}

class Esportiva extends FuncionalidadeDecorator{
  private $carro;

  function __construct(Carro $carro){
    $this->carro = $carro;
  }

  function getNome(){
      return $this->carro->getNome(). ", Esportivo";
  }

  function valor(){
    return 4.000 + $this->carro->valor();
  }
}

class SuporteTeto extends FuncionalidadeDecorator{
  private $carro;

  function __construct(Carro $carro){
    $this->carro = $carro;
  }

  function getNome(){
      return $this->carro->getNome(). ", Suporte Teto";
  }

  function valor(){
    return 2.000 + $this->carro->valor();
  }
}

$uno = new Uno();
echo $uno->valor(). "<br>";
$uno = new SuporteTeto($uno);
echo $uno->getNome();
echo $uno->valor(). "<br>";
$uno = new Esportiva($uno);
echo $uno->getNome();
echo $uno->valor(). "<br>";


?>
