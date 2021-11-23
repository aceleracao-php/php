<?php

class LivroSingleton{
  private $autor = "Santos, JONATAN";
  private $titulo = "Singleton Desing Pattern";
  private static $livro = NULL;
  private static $status = FALSE;

  private function __construct(){
    //não faz nada de fora da classe
  }

  public static function emprestimoLivro(){
    if(self::$status == FALSE){
      if(self::$livro == NULL){
        self::$livro = new LivroSingleton();
      }
      self::$status = true;
      return self::$livro;
    }else{
      return NULL;
    }
  }

  public function devolucaoLivro(LivroSingleton $livro){
    self::$status = FALSE;
  }

  public function getAutor(){}
  public function getTitle(){

  }
}


class LivroEmprestimo{
  private $emprestimo;
  private $status = FALSE;

  function __construct(){

  }

  function buscaAutorETitulo(){
    if($this->status = true){
      return $this->emprestimo->buscaAutorETitulo();
    }
  }

  function emprestimo(){
    $this->emprestimo = LivroSingleton::emprestimoLivro();
    if($this->emprestimo == NULL){
      $this->status = false;
    }else{
      $this->status = true;
    }
  }

  function devolveLivro(){
    $this->emprestimo->devolucaoLivro();
  }
}

$livro1 = new LivroEmprestimo();
$livro2 = new LivroEmprestimo();

$livro1->emprestimo();
$livro2->emprestimo();
?>
