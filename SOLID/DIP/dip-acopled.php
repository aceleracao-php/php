<?php

class Mysql{

}

class Conexao{

    private $conexao;

    function __construct(Mysql $db)
    {
        $this->conexao = $db;
    }
}

?>