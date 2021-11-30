<?php

class Memento{
  private $state;

  function __construct($state)
  {
    $this->state = $state;
  }

    /**
     * Get the value of State
     *
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

}

class Originator{
  private $state;

  function __construct($state)
  {
    $this->state = $state;
  }

  public function getState()
  {
      return $this->state;
  }

  public function setState($state){
    $this->state = $state;
  }

  function saveMemento(){
    return new Memento($this->state);
  }

  function restoreMemento($memento){
    $this->state = $memento->getState();
  }
}

class CareTaker{
  private $mementoList = [];

  function addMemento($mementoState){
    array_push($this->mementoList, $mementoState);
  }

  function pullMemento($step = 1){
    if(sizeof($this->mementoList) > $step){
      $ret_memento = '';
      for($i=0; $i < $step; $i++){
        array_pop($this->mementoList);
      }
      return $this->mementoList[sizeof($this->mementoList) -1];
    }

    return $this->mementoList[0];
  }
}

function executaMementor(){
  $originator = new Originator("Estado 0");
  $careTaker = new CareTaker;

  $originator->setState("Estado 1");
  echo "Estado do objeto: ".$originator->getState(), PHP_EOL;

  $careTaker->addMemento($originator->saveMemento());

  $originator->setState("Estado 2");
  echo "Estado do objeto: ".$originator->getState(), PHP_EOL;
  $careTaker->addMemento($originator->saveMemento());

  $originator->setState("Estado 3");
  echo "Estado do objeto: ".$originator->getState(), PHP_EOL;
  $careTaker->addMemento($originator->saveMemento());

  $originator->setState("Estado 4");
  echo "Estado do objeto: ".$originator->getState(), PHP_EOL;
  $careTaker->addMemento($originator->saveMemento());

  $originator->restoreMemento($careTaker->pullMemento(2));
  echo "Estado do objeto Restaurado: ".$originator->getState(), PHP_EOL;
}

executaMementor();
?>
