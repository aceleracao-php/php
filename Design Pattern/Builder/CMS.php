<?php

class CMS {
  private $nameSite;
  private $hostDb;
  private $passDb;
  private $userDb;
  private $phpUnit;
  private $libExternals;
  private $apiRest;

  /*function __construct($nameSite, $hostDb, $passDb, $userDb, $phpUnit, $libExternals, $apiRest){
     $this->nameSite = $nameSite;
     $this->hostDb = $hostDb;
     $this->passDb = $passDb;
     $this->userDb = $userDb;
  }*/

  function __construct(){

  }
    /**
     * Get the value of Name Site
     *
     * @return mixed
     */
    public function getNameSite()
    {
        return $this->nameSite;
    }

    /**
     * Set the value of Name Site
     *
     * @param mixed $nameSite
     *
     * @return self
     */
    public function setNameSite($nameSite)
    {
        $this->nameSite = $nameSite;

        return $this;
    }

    /**
     * Get the value of Host Db
     *
     * @return mixed
     */
    public function getHostDb()
    {
        return $this->hostDb;
    }

    /**
     * Set the value of Host Db
     *
     * @param mixed $hostDb
     *
     * @return self
     */
    public function setHostDb($hostDb)
    {
        $this->hostDb = $hostDb;

        return $this;
    }

    /**
     * Get the value of Pass Db
     *
     * @return mixed
     */
    public function getPassDb()
    {
        return $this->passDb;
    }

    /**
     * Set the value of Pass Db
     *
     * @param mixed $passDb
     *
     * @return self
     */
    public function setPassDb($passDb)
    {
        $this->passDb = $passDb;

        return $this;
    }

    /**
     * Get the value of User Db
     *
     * @return mixed
     */
    public function getUserDb()
    {
        return $this->userDb;
    }

    /**
     * Set the value of User Db
     *
     * @param mixed $userDb
     *
     * @return self
     */
    public function setUserDb($userDb)
    {
        $this->userDb = $userDb;

        return $this;
    }

    /**
     * Get the value of Php Unit
     *
     * @return mixed
     */
    public function getPhpUnit()
    {
        return $this->phpUnit;
    }

    /**
     * Set the value of Php Unit
     *
     * @param mixed $phpUnit
     *
     * @return self
     */
    public function setPhpUnit($phpUnit)
    {
        $this->phpUnit = $phpUnit;

        return $this;
    }

    /**
     * Get the value of Lib Externals
     *
     * @return mixed
     */
    public function getLibExternals()
    {
        return $this->libExternals;
    }

    /**
     * Set the value of Lib Externals
     *
     * @param mixed $libExternals
     *
     * @return self
     */
    public function setLibExternals($libExternals)
    {
        $this->libExternals = $libExternals;

        return $this;
    }

    /**
     * Get the value of Api Rest
     *
     * @return mixed
     */
    public function getApiRest()
    {
        return $this->apiRest;
    }

    /**
     * Set the value of Api Rest
     *
     * @param mixed $apiRest
     *
     * @return self
     */
    public function setApiRest($apiRest)
    {
        $this->apiRest = $apiRest;

        return $this;
    }

    public function run(){
      echo "Todos os procedimentos foram criados com sucesso! Use o seu CMS!";
    }
}
?>
