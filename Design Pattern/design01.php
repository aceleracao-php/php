<?php

class Transporte{

}

class Caminhao extends Transporte{

}

class CaminhoEletrico extends Caminhao{

}

class CaminhaoCombustivel extends Caminhao{

}

class PilotoAutomaticoCaminhaoEletrico extends CaminhoEletrico{

}

class PilotoAutomaticoCaminhaoCombustivel extends CaminhaoCombustivel{

}

class Carro extends Transporte{

}

class CarroEletrico extends Carro{

}

class CarroCombustivel extends Carro{

}

class PiloAutomaticoCarroEletrico extends CarroEletrico{

}

class PilotoAutomaticoCarroCombustivel extends CarroCombustivel{
    
}


?>