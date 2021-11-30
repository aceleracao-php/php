<?php

interface Memento{

}

class ConcreteMemento implements Memento{
  protected $_url;
  protected $_currentLine;

  public function __construct($url, $currentLine)
  {
    $this->_url = $url;
    $this->_currentLine = $currentLine;
  }

    /**
     * Get the value of Url
     *
     * @return mixed
     */
    public function getUrl()
    {
        return $this->_url;
    }

    /**
     * Get the value of Current Line
     *
     * @return mixed
     */
    public function getCurrentLine()
    {
        return $this->_currentLine;
    }
}
//Originator
class Service{
  protected $_url;
  protected $_currentLine = 0;
  protected $_content;

  public function __construct($url, $currentLine)
  {
    $this->_url = $url;
    $this->_currentLine = $currentLine;
  }

  public function getState(){
    return new ConcreteMemento($this->_url, $this->_currentLine);
  }

  public function setState(ConcreteMemento $state){
    if(!$state instanceof Memento){
      throw new Exception("Esse objeto Memento não foi atualizado");
    }

    $this->_url = $state->getUrl();
    $this->_currentLine = $state=>getCurrentLine();
    $this->init();
  }

  public function init(){
    $this->_content = file($this->_url);
  }

  public function getLine(){
    $line = $this->_content[$this->currentLine];
    $this->_currentLine++;
    return $line;
  }
}

$service = new Service("facebook.com");
$service->init();
echo $service->getLine();
echo $service->getLine();
echo $service->getLine();
$memento = $service->getState();


$newService = new Service($service);
newService->setState();

?>
