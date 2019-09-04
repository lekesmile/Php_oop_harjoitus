<?php

class Autot{
    private $id;
    private $rekisterinumero;
    private $merkki;
    private $malli;
    private $valmistusvuosi;
    private $yhteydenhallinta;

    

      /*** Get the value of id*/ 
      public function getId() {
        return $this->id;
    }

    /*** Set the value of id* @return  sel*/ 
    public function setId($id){
        $this->id = $id;

        return $this;
    }

    /*** Get the value of rekisterinumero*/ 
    public function getRekisterinumero(){
        return $this->rekisterinumero;
    }

    /*** Set the value of rekisterinumero* @return  self*/ 
    public function setRekisterinumero($rekisterinumero){
        $this->rekisterinumero = $rekisterinumero;

        return $this;
    }

    /** Get the value of merkki*/ 
    public function getMerkki(){
        return $this->merkki;
    }

    /*** Set the value of merkki** @return  self*/ 
    public function setMerkki($merkki){
        $this->merkki = $merkki;

        return $this;
    }

    /*** Get the value of malli*/ 
    public function getMalli(){
        return $this->malli;
    }

    /*** Set the value of malli** @return  self*/ 
    public function setMalli($malli){
        $this->malli = $malli;

        return $this;
    }

    /*** Get the value of valmistusvuosi*/ 
    public function getValmistusvuosi(){
        return $this->valmistusvuosi;
    }

    /*** Set the value of valmistusvuosi* * @return  self
     */ 
    public function setValmistusvuosi($valmistusvuosi){
        $this->valmistusvuosi = $valmistusvuosi;

        return $this;
    }

    public function luoYhteysTietokantaan(){
        // Referenssi luokkaan YhteydenHallinta
        include("YhteydenHallinta.php");

        // Otetaan yhteys tietokantaan
        $this->yhteydenhallinta = new YhteydenHallinta();
    }

    public function haeKaikkiautot(){
        return $this->yhteydenhallinta->suoritaHakuLause("select * from autot");
    }

    public function lisaaauto(){
        return $this->yhteydenhallinta->suoritaHakuLause("
           insert into autot(rekisterinumero, merkki, valmistusvuosi, malli) 
           values(?,?,?,?)" ,
        Array( $this->rekisterinumero, $this->merkki, $this->valmistusvuosi, $this->malli));
    }

  
}

?>