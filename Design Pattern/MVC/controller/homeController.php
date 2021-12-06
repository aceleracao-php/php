<?php

require "model/UsuarioModel.php";

class HomeController{

  public function index(){
    $model = new UsuarioModel();
    $usuario = $model->UsuarioLogado();
    include "view/viewUser.php";
  }

  public function login(){

  }

  public function Painel(){
    $model = new UsuarioModel();
    $usuario = $model->UsuarioLogado();
    //include "view/painel.php";
  }
}

?>
