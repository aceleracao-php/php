<?php
//Força aparecer erros do PHP
//ini_set('display_errors', '1');

require_once("Classes/Pessoa.php");
require_once("Classes/Engenheiro.php");
require_once("Classes/Medico.php");
require_once("Classes/ProfessorRegente.php");
require_once("Classes/ProfessorApoio.php");

$p1 = new Pessoa("Jonatan", 15, 'M', 2.80, 60);
$p2 = new Pessoa("Maria", 20, 'F', 1,50, 50);

$engenheiro = new Engenheiro("Deyvid", 18, "M", 1.80, "50", random_int(0, 10000), "Sup. Chefe");

var_dump($engenheiro);

$medico = new Medico("Jao", 20, "M", 1.50, "80", random_int(1000, 20000));
echo "<br>-----------------------------<br>";
var_dump($medico);
echo "<br>-----------------------------<br>";

var_dump($engenheiro->criarNota());
echo "<br>-----------------------------<br>";
var_dump($medico->criarNota());

echo "<br>-----------------------------Abstratct <br>";

echo "<br>-----------------------------Regente <br>";
$prof = new ProfessorRegente();
var_dump($prof->soma());
echo "<br>-----------------------------Apoio <br>";
$prof2 = new ProfessorApoio();
var_dump($prof2->soma());
//$p1->nome = "Fulano";

//echo($p1->__toString());

//echo($p2->__toString());

//echo "<br>";
//var_dump($p1);

//$nome = $p1->getNome();
//$altura = $p1->getAltura();
//mostrar o tipo da variavel
/*echo gettype($nome) . "<br>";

echo gettype($altura) . "<br>";
//alterar tipo
echo settype($altura, "int");*/
//var_dump($p1);



?>