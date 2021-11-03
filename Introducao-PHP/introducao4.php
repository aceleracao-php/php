<?php

/*$cep = "75401320";
$link = "https://viacep.com.br/ws/{$cep}/json/";
//inicializei o curl
$ch = curl_init($link);
//setei as opções da requisição
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

//tratando resposta
$resposta = curl_exec($ch);
//fecha conexão
curl_close($ch);

$data = json_decode($resposta, true);

var_dump($data);*/

$infos = array(
    "empresa" => "Soluti"
);

/*@param 1 - nome do cookie
*@param 2 - informação ou conteudo
* @param 3 - tempo (expirar)
*/
//setcookie("COOKIE_SOLUTI", json_encode($infos), time() + 3600);
//echo 'Criado cookie com sucesso!';

if(isset($_COOKIE['COOKIE_SOLUTI'])){
    $cookieRecuperado = $_COOKIE['COOKIE_SOLUTI'];
    var_dump(json_decode($cookieRecuperado, true));
    echo "<br>";
}

?>