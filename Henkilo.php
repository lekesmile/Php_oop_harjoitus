<?php

class Henkilo{
    public $nimi;


    // get method to get the name
    public function getNimi(){
       return $this-> nimi;
    }


    //set method to set the name
    public function setNimi($nimi){
        $this -> nimi =$nimi;
    }


}


?>