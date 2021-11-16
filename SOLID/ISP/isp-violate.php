<?php
interface Aves{
    function setLocalizacao($longitude, $latitude);
    function setAltitude($altitude);
}

class PassaroPreto implements Aves{
    function setLocalizacao($longitude, $latitude){
        //faz alguma coisa
    }
    function setAltitude($altitude){
        //faz algo
    }
}

class Pinguim implements Aves{
    function setLocalizacao($longitude, $latitude){
        //faz alguma coisa
    }
    function setAltitude($altitude){
        //faz algo
    }
}
?>