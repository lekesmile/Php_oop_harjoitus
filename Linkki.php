<?php

class Linkki {
    public $id;
    public $linkki;
    public $otsikko;
    public $kuuvaus;
    public $avainsana;

    public function __construct($id, $linkki, $otsikko, $kuuvaus, $avainsana){
        $this->id = $id;
        $this->linkki = $linkki;
        $this->otsikko = $otsikko;
        $this->avainsana = $avainsana;
        $this->kuuvaus =$kuuvaus;

    }
    

    /** Get the value of id*/ 
    public function getId(){
        return $this->id;
    }

    /**
     * Set the value of id * @return  self*/ 
    public function setId($id){
       return  $this->id = $id;
   }

    /**
     * Get the value of linkki */
     public function getLinkki(){
        return $this->linkki;
    }

    /**
     * Set the value of linkki * @return  self */ 
    public function setLinkki($linkki){
       return  $this->linkki = $linkki;
    }

    /**
     * Get the value of otsikkokuuvaus
     */ 
    public function getOtsikko(){
        return $this->otsikko;
    }

    /**
     * Set the value of otsikkokuuvaus* @return  self*/ 
    public function setOtsikko($otsikko) {
        return $this->otsikko = $otsikko; 
    }

    /**
     * Get the value of avainsana
     */ 
    public function getAvainsana() {
        return $this->avainsana;
    }

    /**
     * Set the value of avainsana* @return  self */ 
    public function setAvainsana($avainsana){
       return  $this->avainsana = $avainsana;
   }

    /*** Get the value of kuuvaus*/ 
    public function getKuuvaus(){
        return $this->kuuvaus;
    }

    /*** Set the value of kuuvaus* @return  self*/ 
    public function setKuuvaus($kuuvaus) {
       return  $this->kuuvaus = $kuuvaus;  
    }
    
    public function tulostakaikki(){
      return 'Your Id is ' . $this->getId() . '<br>' . 'Linkki is ' .$this->getLinkki() .'<br>' . 'Your title is ' . $this->getOtsikko() .'<br>'  .
     'kuvauus on ' . $this->getKuuvaus(). '<br>' . 'Avainsana is ' . $this->getAvainsana();
   }
}
?>