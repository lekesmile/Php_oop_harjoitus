<?php

class Linkit{
  private $id;
  private $linkki;
  private $otsikko;
  private $kuvaus;
  private $avainsana;


  

  /*** Get the value of id*/ 
  public function getId(){
    return $this->id;
  } 

  public function setId($id){
   return  $this->id = $id;
  }

  /**
   * Get the value of linkki
   */ 
  public function getLinkki(){
    return $this->linkki;
  }

  /*** Set the value of linkki** @return  self*/ 
  public function setLinkki($linkki){
    return $this->linkki = $linkki;
  }
  

  /** * Get the value of otsikko */ 
  public function getOtsikko(){
    return $this->otsikko;
  }

  /*** Set the value of otsikko* @return  self
   */ 
  public function setOtsikko($otsikko){
   return  $this->otsikko = $otsikko;
  }

  /*** Get the value of kuvaus*/ 
  public function getKuvaus(){
    return $this->kuvaus;
  }

  /*** Set the value of kuvaus* @return  self*/ 
  public function setKuvaus($kuvaus){
     return $this->kuvaus = $kuvaus;
  }

  /*** Get the value of avainsana*/ 
  public function getAvainsana(){
    return $this->avainsana;
  }

  /*** Set the value of avainsana* @return  self*/ 
  public function setAvainsana($avainsana){
    return $this->avainsana = $avainsana;
  }

  public function luoYhteysTietokantaan(){
    // Referenssi luokkaan YhteydenHallinta
    include("YhteydenHallinta.php");

    // Otetaan yhteys tietokantaan
    $this->yhteydenhallinta = new YhteydenHallinta();
}

public function haeKaikkiHenkilot(){
    return $this->yhteydenhallinta->suoritaHakuLause("select * from linkit");
}

}

?>