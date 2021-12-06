<?php
session_start();

$objRecuperado = $_SESSION['Administrador'];
$favoritos = $_SESSION['Favoritos'];
var_dump($objRecuperado);
var_dump($favoritos);

$objDesserializado = unserialize($objRecuperado);

?>
