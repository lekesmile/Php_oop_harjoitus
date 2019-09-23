<?php

class Henkilo{
    public $nimi;
    private $pinkoodi;


    private function getPinkoodi () {
        return $this->pinkoodi;
    }

    public function setPinkoodi($pinkoodi){
       $this->pinkoodi = $pinkoodi;
    }
    //Creating a constructor
    public function __construct($nimi) {
       $this->nimi = $nimi; 
    }


    // get method to get the name
    public function getNimi(){
       return $this-> nimi;
    }


    //set method to set the name
    public function setNimi($nimi){
        $this -> nimi =$nimi;
    }



    // this methods print name and pincode
    public function tulostaHenkilo(){
        return "Henkilo nimi on " . $this->getNimi() . "ja hänen pinkoodi on " . $this->getPinkoodi();
    }
}


?>