<?php
/**
 * Agregação - Um objeto precisa de outro para executar sua ação
 */

class Produtos{
    public $nome;
    public $valor;

    function __construct($nome, $valor)
    {
        $this->nome = $nome;
        $this->valor = $valor;
    }
}

class Carrinho{
     public $produtos;

     public function adiciona(Produtos $produto){
        $this->produtos[] = $produto; 
     }

    public function sacola(){
         foreach($this->produtos as $prod):
            echo $prod->nome. "<br>";
            echo $prod->valor. "<br><hr>";
         endforeach;
     }
}

$prod1 = new Produtos("Mesa notebook", "2500");
$prod2 = new Produtos("Mousepad", "50");

$carrinho = new Carrinho();
$carrinho->adiciona($prod1);
$carrinho->adiciona($prod2);
//mostra as informações da agregação
$carrinho->sacola();

?>