<?php

  interface CmsBuilder{
    function inicializaSite();
    function inicializaLibs();
    function inicializaConection();
    function inicializaApi();
    function inicializaTestes();
  }

  class WordpresBuilder implements CmsBuilder{
    private $wordpressCms;

    function __construct(){
      $this->wordpressCms = new CMS();
      //definir a ordem das etapas
      $this->inicializaSite();
      $this->inicializaLibs();
      $this->inicializaConection();
      $this->inicializaApi();
      $this->inicializaTestes();
    }

    function inicializaTestes(){
        $this->wordpressCms->setPhpUnit(true);
    }

    function inicializaLibs(){
      $this->wordpressCms->setLibExternals(true);
    }

    function inicializaSite(){
      $this->wordpressCms->setNameSite("blog 1");
    }

    function inicializaConection(){
      $this->wordpressCms->setHostDb("localhost");
      $this->wordpressCms->setUserDb("root");
      $this->wordpressCms->setPassDb("root");
    }

    function inicializaApi(){
        $this->wordpressCms->setApiRest("amazon.com.br/api");
    }

    function getWordpress(){
      return $this->wordpressCms;
    }
  }
?>
