<?php

class Henkilo{
    private $henkilonumero;
    private $etunimi;
    private $sukunimi;
    private $osasto;
    private $palkka;

    // Tietokantaa varten
    private $yhteydenhallinta;

    public function getHenkilonumero(){
        return $this->henkilonumero;
    }

    public function setHenkilonumero($henkilonumero){
        $this->henkilonumero = $henkilonumero;
    }

    public function getEtunimi(){
        return $this->etunimi;
    }

    public function setEtunimi($etunimi){
        $this->etunimi = $etunimi;
    }

    public function getSukunimi(){
        return $this->sukunimi;
    }

    public function setSukunimi($sukunimi){
        $this->sukunimi = $sukunimi;
    }

    public function getOsasto(){
        return $this->osasto;
    }

    public function setOsasto($osasto){
        $this->osasto = $osasto;
    }

    public function getPalkka(){
        return $this->palkka;
    }

    public function setPalkka($palkka){
        $this->palkka = $palkka;
    }

    public function luoYhteysTietokantaan(){
        // Referenssi luokkaan YhteydenHallinta
        include("YhteydenHallinta.php");

        // Otetaan yhteys tietokantaan
        $this->yhteydenhallinta = new YhteydenHallinta();
    }

    public function haeKaikkiHenkilot(){
        return $this->yhteydenhallinta->suoritaHakuLause("select * from henkilosto");
    }

    public function lisaaHenkilo(){
        return $this->yhteydenhallinta->suoritaPaivitysLause("INSERT INTO henkilosto(henkilonumero, etunimi, sukunimi, osasto, palkka) 
           VALUES(?,?,?,?,?)" ,
        Array($this->henkilonumero, $this->etunimi, $this->sukunimi, $this->osasto, $this->palkka));
    }

    public function poistaHenkilo(){
        return $this->yhteydenhallinta->suoritaPaivitysLause("DELETE FROM henkilosto WHERE henkilonumero=". $_GET['id']);
    }

    public function muutaVainHenkilo(){
        return $this->yhteydenhallinta->suoritaPaivitysLause("UPDATE henkilosto SET etunimi=?, sukunimi=?, osasto=?, palkka=? WHERE henkilonumero=?",
        Array($this->etunimi, $this->sukunimi, $this->osasto, $this->palkka, $this->henkilonumero));
    }

    public function haehenkilo(){
        return $this->yhteydenhallinta->suoritaHakuLause("SELECT * FROM henkilosto WHERE sukunimi LIKE ?");
    }

}


?>