<?php

namespace App;

class Caixa{
    protected $itens = [];

    public function __construct($itens = [])
    {
        $this->itens = $itens;
    }

    public function contem($item){
        return in_array($item, $this->itens);
    }

    public function pegarUmItem(){
        return array_shift($this->itens);
    }

    public function removePelaLetra($letra){
        return array_filter($this->itens, function($item) use ($letra){
            return stripos($item, $letra) === 0;
        });
    }
}