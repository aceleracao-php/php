<?php

interface IOAplication{
   public function setDatabaseDriver(IODatabaseDriver $dbDriver);
   public function query(string $query);
}

abstract class Aplication implements IOAplication{
    protected $dbDriver;

    function setDatabaseDriver(IODatabaseDriver $dbDriver)
    {
      $this->dbDriver = $dbDriver;
    }
}

class Web extends Aplication{

  public function query(string $query){
    $query .= "\n\n Executando o APP Web query\n";
    return $this->dbDriver->handleQuery($query);
  }

}

class App extends Aplication{
  public function query(string $query){
    $query .= "\n\n Executando o APP Mobile query\n";
    return $this->dbDriver->handleQuery($query);
  }
}

interface IODatabaseDriver{
  public function handleQuery($query);
}

class Mysql implements IODatabaseDriver{
  public function handleQuery($query){
    echo "\n Query executada usando MySql/MariaDb: Query: ".$query;
  }
}

class Oracle implements IODatabaseDriver{
  public function handleQuery($query){
    echo "\n Query executada usando Oracle: Query: ".$query;
  }
}

echo "<pre>\n";

$web = new Web();
$web->setDatabaseDriver(new Mysql());

echo $web->query("select * from Pessoas");

$web->setDatabaseDriver(new Oracle());
echo $web->query("select * from Funcionarios");

echo "----------------------<br>\n";
$mobile = new App();
$mobile->setDatabaseDriver(new Oracle());
echo $mobile->query("select * from Pessoas");

$mobile->setDatabaseDriver(new Mysql());
echo $mobile->query("select * from Funcionarios");
?>
