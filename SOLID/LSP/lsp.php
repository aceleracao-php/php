<?php

class A{
    function getIdade(){
        echo 'Meu nome é A';
    }
}

class B extends A{

    private $terceiraIdade = false;

    function getIdade(){
        echo 'Meu nome é B';
    }
}

$obj1 = new A();
$obj2 = new B();

function imprimeIdade(A $objeto){
    return $objeto->getIdade();
}

imprimeIdade($obj1); // A

imprimeIdade($obj2); // B
?>