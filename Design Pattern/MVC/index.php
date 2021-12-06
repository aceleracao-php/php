<?php
require "controller/homeController.php";

$pagina = isset($_GET['pagina']) ? $_GET["pagina"]: "index";

$ctrl = new HomeController();

switch($pagina):

case "index":
  $ctrl->index();
  break;
case "painel":
  $ctrl->painel();
  break;
case "login":
  $ctrl->login();
  break;
endswitch;
?>
