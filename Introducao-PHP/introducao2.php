<?php
//Constantes

define('SERVIDOR', '127.0.0.1');

define('BANCO_DE_DADOS', 'ROOT');

//echo SERVIDOR;
//echo BANCO_DE_DADOS;

//global

global $var1, $var2;

$var1 = 1;
$var2 = 2;

//echo $var1 + $var2;

//Super Globais

$valor1 = isset($_GET['id']) ? $_GET['id']: NULL;
$valor2 = isset($_POST['id']) ? $_POST['id']: NULL;

if(is_null($valor1)):
    //echo "Não entrou nada no GET";
endif;

//POST

if(is_null($valor2)):
    //echo "Não entrou nada no POST";
endif;

//SERVER

/*$ip = $_SERVER['REMOTE_ADDR'];
echo 'Endereço de IP: '. $ip;  
echo '<br>';

$path_script = $_SERVER['SCRIPT_NAME'];
echo 'Caminho do script: '. $path_script;
$_SESSION;
$_COOKIE;*/

//Operadores
$a = 10;
$b = 2;

/*//adição +=

$a += 2;
echo $a;

// subtracao -=
$b -= 1;
echo "<br>";
echo $b; 

//multiplicacao *=
$a *= 0.1;
echo "<br>";
echo $a;

//divisao /= 
//Modo %
//Exponencia **

echo $a ** $b;

//Comparacao

$d = 5;
$e = 5.0;

if ($d !== $e){
    echo TRUE;
}else{
    echo FALSE;
}*/

//Operadores do PHP 7.0

//Space ship 1
/**
 * 1º é maior retorna 1
 * Se forem iguais 0
 * 2º for maior -1
 */

/*$opt1 = 0;
$opt2 = 150;

//var_export($opt1 <=> $opt2);

//verifica que é nulo*/
//echo $opt1 ?? $opt2 ?? 'Tudo é nulo';

//is_
//nulo -> True ou False
/*$curso = array('curso' => 'PHP');
if(is_array($curso)){
    echo 'É array';
}else{
    echo 'Não é array';
}*/

//file_get

/*$json = file_get_contents('https://jsonplaceholder.typicode.com/posts/1');

$array_json = json_decode($json, true);

var_dump($array_json);

$pessoas = array('id' => 'Jonatan', 'hash' => 'dkjalsdkj87AAdkjkd(99');

$json_transformado = json_encode($pessoas);

/**
 * {
 * 
 * }
 * [
 *  {},
 *  {}
 * ]
 */
global $a2;
$a2 = 35;

//Strings

/**
 * '' - é um texto
 * "" - interpolação
 */

$palavra = "Humanas";
//mudar caracter na string
$palavra_mudada = str_replace("a", "1", $palavra);

//echo $palavra_mudada;

//Maiuscula
$nomeCompleto = "jonatan santos aaa";

$nomeMaiusculo = strtoupper($nomeCompleto);
//echo "Nome normal: '{$nomeCompleto}' -  Nome maiusculo: {$nomeMaiusculo}";

$nomeMinusculo = strtolower($nomeCompleto);
//echo $nomeMinusculo;

$primeiraLetra = ucwords($nomeCompleto);

//echo $primeiraLetra;
$primeiraLetraFrase = ucfirst($nomeCompleto);

//echo $primeiraLetraFrase;

$procurar = strpos($nomeCompleto, "a");
//echo $procurar;


include_once('funcoes.php');
include_once('funcoes.php');

//função

$resultado = soma(10, 2);  
echo $resultado;

?>