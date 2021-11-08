<?php

require_once('Classes/Professor.php');

class ProfessorApoio extends Professor{

    public $aulasRealizadas = 30;

    public function realizaAula(){

    }

    public function soma(){
        echo "Aulas ministradas: ". $this->aulasRealizadas. " - Aulas restantes: ". (parent::soma() - $this->aulasRealizadas) + 6;
    }
}