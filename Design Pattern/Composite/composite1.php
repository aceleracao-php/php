<?php

abstract class Arvore{

  protected $nome;

    /**
     * Get the value of Nome
     *
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of Nome
     *
     * @param mixed $nome
     *
     * @return self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function addComponent(Arvore $component){
        //implement
    }

    public function removeComponent(Arvore $component){}

    public function isComposite():bool{
      return false;
    }

    abstract function operacao():string;
}

class Folha extends Arvore{

  public function __construct()
  {
    $this->nome = "Folha";
  }

  public function operacao():string{
    return $this->nome();
  }
}

class GalhoComposite extends Arvore{
  protected $filho;

  public function __construct()
  {
    $this->filho = new stdClass();
  }

  public function addComponent(Arvore $component){
      $this->filho->addComponent($component);
      return $this;
  }

  public function removeComponent(Arvore $component){}

    public function operacao():string{
      $results = [];

      foreach($this->filho as $folha){
        $results['folha'.$folha] = $folha;
      }

      return $results;
    }
}

$composicao = new GalhoComposite();
$ramificao1 = new GalhoComposite();
$ramificao1->addComponent(new Folha());
$ramificao1->addComponent(new Folha());

$ramificao2 = new GalhoComposite();
$ramificao2->addComponent(new Folha());

?>
