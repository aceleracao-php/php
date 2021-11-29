<?php

interface Conection{
  function insert();
  function select();
  function update();
}

class OracleConection implements Conection{
  function insert(){}
  function select(){}
  function update(){}
}

class MysqlCommand {
  function insertMysql(){
    echo "inserir Mysql";
  }


  function selectMysql(){
    echo "select Mysql";
  }

  function updateMysql(){
    echo "update Mysql";
  }
}

class MysqlAdapter implements Conection{
  private $mysql;

  public function __construct(MysqlCommand $mysql)
  {
    $this->mysql = $mysql;
  }
  function insert(){
    $this->mysql->insertMysql();
  }
  function select(){
    $this->mysql->selectMysql();
  }
  function update(){
    $this->mysql->updateMysql();
  }
}

$cliente = "João";

$oracle = new OracleConection();
$oracle->insert();

$mysql = new MysqlAdapter(new MysqlCommand());
$mysql->insert();
 ?>
