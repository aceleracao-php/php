<?php
interface LogMsg{
  public function setMsg(string $msg);
}

class ServerLog{
  private $logMsg;

  function getLogMsg(){
    return $this->logMsg;
  }

  function setLogMsg(LogMsg $msg){
    $this->logMsg = $msg;
  }
}

$serverLog = new ServerLog;
$serverLog->setLogMsg(new class("Nova Mensagem") implements LogMsg{

  public function __construct($msg)
  {
    echo "Mensagem geral: ".$msg;
  }
  public function setMsg(string $msg){
    echo "Mensagem Padrão: ".$msg;
  }
});

var_dump($serverLog->getLogMsg()->setMsg("Mensagem Alterada"));
?>
