<?php
class Auto{

    private $tankinTilavuus;
    private $bensanMaara;


    private function __constuct($annettutankin, $annettubenssa){
        $this->tankinTilavuus = $annettubenssa;
        $this->bensanMaara = $annettubenssa;
    }

  



    /*** Get the value of tankinTilavuus*/ 
    private function getTankinTilavuus(){
        return $this->tankinTilavuus;
    }

    /*** Set the value of tankinTilavuu * @return  self*/ 
    private function setTankinTilavuus($tankinTilavuus){
       return $this->tankinTilavuus = $tankinTilavuus; 
    }

    /*** Get the value of bensanMaara*/ 
    public function getBensanMaara(){
        return $this->bensanMaara;
    }

    /*** Set the value of bensanMaara* @return  self*/ 
    public function setBensanMaara($bensanMaara){
      return  $this->bensanMaara = $bensanMaara;  
    }

    public function käynnisty($boolean){
        if($boolean == true){
           return  'Auto on käynnisty' . '<br>';
        }
        else{
          return 'Auto ei oo vielä käynnistumässä' . '<br>';
        }
    }

    public function tulostaAutonTiedot(){
        return 'There is this much ' . $this->getBensanMaara() . 'liters' . 'and tankspace is ' . $this->getTankinTilavuus() . '<br>';
    }

    public function lisääBensaa($maara){
        if ($this->bensanMaara <= 5) {
            echo 'Please add more bensa' . '<br>';
                return $maara + $this->bensanMaara;
            }
        }
    public function aja(){
        if($this->getBensanMaara > 0){
            return 'Nyt voi ajaa' . '<br>';
        }else {
            return 'Sori, sulla ei joo bensa autossa' . '<br>';
        }
    }

    public function sammuta (){
        if ($this->käynnisty == false) {
            return 'Auto on sammutettu' . '<br>';
        }
        else {
            return käynnisty() . '<br>';
        }
    }
}

?>