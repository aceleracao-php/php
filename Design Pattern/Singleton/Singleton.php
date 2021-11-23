<?php

  class Singleton{
    private static $instance = NULL;

    private function __construct(){}
    private function __clone(){}
    private function __destruct(){}

    public static function getInstance(){
      if(self::$instance == null){
        self::$instance = new Singleton();
      }
      return self::$instance;
    }

    public function Hello(){
      echo "Esse singleton é um padrão de projeto";
    }
  }

  $x = Singleton::getInstance();
  $x2 = Singleton::getInstance();
  $x->hello();
  $x2->hello();

?>
