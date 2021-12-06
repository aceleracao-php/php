<?php
class Outer{
  private $a =1 ;

  public function geraAnonimo(){
    return new class($this->$a){
      private $a;

      public function __construct($a)
      {
        $this->a = $a;
      }

      public function buscaAnonimo(){
        echo $this->a;
      }
    }
  }
}

echo (new Outer)->geraAnonimo()->buscaAnonimo();
?>
