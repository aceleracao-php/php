<?php
//classe concreta
class Veiculo{
  public $model;
  public $qntMotor;
  public $type;

  const CAR = "carro";
  const BUS = "onibus";
  const TRAILER = "trailer";

  public __construct(){

  }

  public function run(){
    echo "O carro já pode ir para os testes de qualidade!";
  }
}

interface IVeiculoBuilder{
  function setModel();
  function setQntMotor();
  function setType();
  function buscaVeiculo();
}

class Fiat implements IVeiculoBuilder{
  private $veiculo;

  public function __construct(){
    $this->veiculo = new Veiculo();
    setModel();
    setQntMotor();
  }

  function setModel(){
    $this->veiculo->model = "Fiat";
  }
  function setQntMotor(){
    $this->veiculo->qntMotor = 1;
  }
  function setType(){
    $this->veiculo->type = Veiculo::CAR;
  }
  function buscaVeiculo(){
    return $this->veiculo;
  }
}

class Bmw implements IVeiculoBuilder{
  private $veiculo;

  public function __construct(){
    $this->veiculo = new Veiculo();
    setModel();
    setQntMotor();
    setType();
  }

  function setModel(){
    $this->veiculo->model = "BMW";
  }
  function setQntMotor(){
    $this->veiculo->qntMotor = 2;
  }
  function setType(){
    $this->veiculo->type = Veiculo::BUS;
  }
  function buscaVeiculo(){
    return $this->veiculo;
  }
}

$fiat = new Fiat()->buscaVeiculo->run();
$fiat2 = new Fiat()->buscaVeiculo->run();

$bmw = new BMW()->buscaVeiculo->run();
?>
