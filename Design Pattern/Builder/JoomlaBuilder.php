<?php

  interface CmsBuilder{
    function inicializaSite();
    function inicializaLibs();
    function inicializaConection();
    function inicializaApi();
    function inicializaTestes();
  }

  class JoomlaBuilder implements CmsBuilder{
    private $joomlaCms;

    function __construct(){
      $this->joomlaCms = new CMS();
      //definir a ordem das etapas
      $this->inicializaSite();
      $this->inicializaLibs();
      $this->inicializaConection();
      $this->inicializaTestes();
    }

    function inicializaTestes(){
        $this->joomlaCms->setPhpUnit(true);
    }

    function inicializaLibs(){
      $this->joomlaCms->setLibExternals(true);
    }

    function inicializaSite(){
      $this->joomlaCms->setNameSite("blog 1");
    }

    function inicializaConection(){
      $this->joomlaCms->setHostDb("localhost");
      $this->joomlaCms->setUserDb("root");
      $this->joomlaCms->setPassDb("root");
    }

    function getWordpress(){
      return $this->joomlaCms;
    }
  }
?>
