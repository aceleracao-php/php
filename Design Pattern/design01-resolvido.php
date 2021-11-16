<?php

class Transporte{
    private Motor $motor;
    private Piloto $piloto;
}

interface Motor{
    function mover();
}

interface Piloto{
    function tipo();
}

class MotorEletrico implements Motor{
    function mover(){
        echo 'combustivel eletricidade';
    }
}

class MotorCombustivel implements Motor{
    function mover(){
        echo 'combustivel gasolina/etanol';
    }
}

class PilotoManual implements Piloto{
    function tipo(){
        echo 'é manual';
    }
}

class PilotoAutomatico implements Piloto{
    function tipo(){
        echo 'é automatico';
    }
}


?>