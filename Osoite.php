<?php
class Osoite {
    public $lähiosoite;
    public $postinumero;
    public $postipaikka;

    public function getLähiosoite(){
        return $this->lähiosoite;
    }
    public function setLähiosoite($lähiosoite){
        $this->lähiosoite = $lähiosoite;
    }

    public function getPostinumero(){
        return $this->postinumero;
    }
    public function setPostinumero($postinumero){
        $this->postinumero = $postinumero;
    }

    public function getPostipaikka(){
        return $this->postipaikka;
    }
    public function setPostipaikka($postipaikka){
        $this->postipaikka = $postipaikka;
    }
}

?>