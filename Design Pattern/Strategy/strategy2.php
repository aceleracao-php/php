<?php
//RAR/TAR/ZIP

class ComprimirArquivo{

    public function comprimir($caminho, Compress $tipo){
        return $tipo->comprimir($caminho);
    }   

}

abstract class Compress{

    protected $qntCaracter;

    public function verificaIntegridade(){
        echo 'Arquivo foi comprimido com sucesso';
    }

    public abstract function comprimir($caminho);
}

class Rar extends Compress{
    public function comprimir($caminho){
        echo "Arquivo comprimido como RAR: $caminho";
    }
}

class Tar extends Compress{
    public function comprimir($caminho){
        echo "Arquivo comprimido como TAR: $caminho";
    }
}

class Zip extends Compress{
    public function comprimir($caminho){
        echo "Arquivo comprimido como ZIP: $caminho";
    }
}
?>