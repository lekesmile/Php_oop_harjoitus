<?php

class Info {

   public $rekisterinumero;
   public $merkki;
   public $malli;
   public $valmistusvuosi;

 
   
    // get method to get the name
    public function getRekisterinumero(){
        return $this-> rekisterinumero;
     }
 
 
     //set method to set the name
    public function setRekisterinumero($rekisterinumero){
         $this -> nimi =$rekisterinumero;
     }

    public function getMerkki(){
        return $this->merkki;
     }

    public function setMerkki ($merkki){
        $this->merkki = $merkki;
    }

    public function getMalli(){
        return $this->malli;
     }

    public function setMalli ($malli){
        $this->malli = $malli;
    }
    
    public function getValmistusvuosi(){
        return $this->valmistusvuosi;
     }

    public function setValmistusvuosi ($valmistusvuosi){
        $this->malli = $valmistusvuosi;
    }

}

?>