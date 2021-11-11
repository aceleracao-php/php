<?php

class Fabricante{
   private String $nome;
   private String $cnpj;

   public function getNome():String{
      return $this->nome;
   }

   public function getCnpj():String{
      return $this->cnpj;
   }

   public function setNome($nome):void{
      $this->nome = $nome;
   }

   public function setCnpj($cnpj):void{
      $this->cnpj = $cnpj;
   }
}

class Produto{

   public String $descricao;
   public float $estoque;
   public float $preco;
   public $fabricante;

   public function __construct($descricao, $estoque, $preco, Fabricante $fabricante){
      $this->descricao = $descricao;
      $this->estoque = $estoque;
      $this->preco = $preco;
      $this->fabricante = $fabricante;
   }

   public function getDescricao(){
      return $this->descricao;
   }

   public function setDescricao($descricao):void{
      $this->descricao = $descricao;
   }

   public function getPreco(){
      return $this->preco; 
   }

   public function setPreco($preco){
      $this->preco = $preco;
   }

   public function getFabricante(){
      return $this->fabricante;
   }

   public function setFabricante($fabricante){
      return $this->fabricante;
   }

}