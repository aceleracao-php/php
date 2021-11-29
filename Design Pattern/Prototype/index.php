<?php
class Referencia{
  public $prototype;
  public $status;

  public function __construct(Prototype $prototype)
  {
      $this->prototype = $prototype;
  }
}

class Prototype{
  public $primitive;//int,float,string, array
  public $component;//complexo
  public $referencia;//referencia

  public function __construct()
  {
    $this->referencia = $this;
  }

  public function __clone(){
    $this->component = clone $this->component;
    //Um objeto com referencia deve fazer referencia ao clone e não a instancia original
    $this->referencia = clone $this->referencia;
    $this->referencia->status = "clone";
    $this->referencia->prototype = $this;
  }
}

$prototipo = new Prototype();
$prototipo->primitive = 50.0;
$prototipo->component = new \DateTime();
$prototipo->referencia = new Referencia($prototipo);

$prototipo2 = clone $prototipo;

if($prototipo->primitive === $prototipo2->primitive){
  echo "Os tipos primitivos foram clonados<br>";
}else{
  echo "falha ao clonar os primitivos<br>";
}

if($prototipo->component === $prototipo2->component){
  echo "falha ao clonar os components<br>";
}else{
  echo "Os tipos de components foram clonados<br>";
}

if($prototipo->referencia->prototype === $prototipo2->referencia->prototype){
  echo "Os tipos referencia está vinculado ao objeto original <br>";
}else{
  echo "O tipo referencia está vinculado ao objeto clone<br>";
}

print_r($prototipo);
echo "<br>";
print_r($prototipo2);
?>
