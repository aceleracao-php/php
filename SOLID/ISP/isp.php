<?php

interface Aves{
    public function localizacao($longitude, $latitude);
}

class Pinguim implements Aves{
    function localizacao($longitude, $latitude){

    }
}

interface AvesQueVoam{
    function setAltitude($altitude);
}

class PassaroPreto implements Aves, AvesQueVoam{

    function localizacao($longitude, $latitude){

    }
    
    function setAltitude($altitude){
        //faz algo
    }
}
?>