<?php

/*Associação - Um objeto "utiliza" outro objeto, porém
* ele vai utilizar esse objeto sem o relacionamento de dependencia 
*/

class Pedido{
    public $numero;
    public $cliente;
}

class Cliente{
    public $nome;
    public $endereco;
}

/*$cliente = new Cliente();
$cliente->nome = "Pedro Paulo";
$cliente->endereco = "Rua 2, Qd5";*/

$pedido = new Pedido();
$pedido->numero = random_int(100, 900);
$pedido->cliente = array("Nome" => "Joaquim", "Endereco" => "Rua 6");

$dados = array(
    'ID' => $pedido->numero,
    'Nome_do_cliente' => $pedido->cliente['Nome'],
    'Endereco' => $pedido->cliente['Endereco']
);

echo json_encode($dados);
?>