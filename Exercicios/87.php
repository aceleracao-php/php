<?php

class BudgetReport{
    private $database;

    function save(Database $con){
        
    }
}

interface Database{
    function insert();
    function update();
    function delete();
}

class Mysql implements Database{
    function insert(){}
    function update(){}
    function delete(){}
}

class Oracle implements Database{
    function insert(){}
    function update(){}
    function delete(){}
}

?>