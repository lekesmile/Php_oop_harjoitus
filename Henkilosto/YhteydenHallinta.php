<?php

class YhteydenHallinta{

    // Tietokantayhteys talletetaan tähän ominaisuuteen
    private $yhteys;

    // Tietokannan tiedot on talletettu tähän ominaisuuteen
    private $konfiguraatio;

    public function __construct($konfiguraatio = 'yhteyskonfiguraatio.ini'){
        $this->konfiguraatio = $konfiguraatio;
    }

    // Avaa tietokantayhteyden
    private function avaaYhteys(){
        // Purkaa ini-tiedoston taulukoksi
        $init = parse_ini_file($this->konfiguraatio, true);

        // Alustetaan tietokannan avaamiseen liittyvät omianaisuudet
        $ajuri = $init['tietokanta']['ajuri'];
        $palvelin = $init['tietokanta']['palvelin'];
        $portti = $init['tietokanta']['portti'];
        $kanta = $init['tietokanta']['kanta'];
        $kayttaja = $init['tietokanta']['kayttaja'];
        $salasana = $init['tietokanta']['salasana'];
        $url = "{$ajuri}:host={$palvelin};port={$portti};dbname={$kanta}";

        // try-lohkoon tulee se koodi, joka voi aiheuttaa kriittisen virheen
        // ja catch-lohkoon hypätään jos tulee virhee
        try{
            // Luo yhteyden tietokantaan PDO-olion avulla
            $this->yhteys = new PDO($url, $kayttaja, $salasana, 
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            // Palauttaa tietokantayhteyden
            return $this->yhteys;
        }catch(PDOException $e){
            // Tännen hypätään jos tulee virhe
            echo $e->getMessage();
            // Siirrytään virhesivulle
            //header("Location: virhe.php");
        }
    }

    // Suorittaa SQL-kyselyjä
    public function suoritaHakuLause($sqlLause, $parametritaulukko = Array()){
        // Avataan tietokantayhteys
        $this->avaaYhteys();

        // Valmistellaan hakukysely
        $suoritettavaLause = $this->yhteys->prepare($sqlLause);

        // Liitetään parametritaulukon arvot merkityn paramterin tilalle 
        // ja suoritetaan kysely
        $suoritettavaLause->execute($parametritaulukko);

        // haetaan tulostaulukko ja suljetaan yhteys
        $tulosjoukko = $suoritettavaLause->fetchAll(PDO::FETCH_ASSOC);

        // Suljetaan yhteys
        $this->suljeYhteys();

        // Palautetaan tulosjoukko
        return $tulosjoukko;

    }

    // Metodia kutsutaan kun suoritetaan lisäys(insert), poisto(delect) tai päivitys(update)

    public function suoritaPaivitysLause($sqlLause, $parametritaulukko = Array()){
        $this->avaaYhteys();

        try {
            // Valmistellaa SQL-Lause
            $suoritettavaLause = $this->yhteys->prepare($sqlLause);
            // Suoritetaan sql lause palvelimella
            $suoritettavaLause->execute($parametritaulukko);
           // Palautta tietueiden määrän(0-ei tietuetta)
           $lkm = $suoritettavaLause->rowCount();

           // Suljetaan yhteys
        $this->suljeYhteys();

        } catch (PDOException $e) {
            // Jos tuli virhe asetaan tietueiden mää nollaksi
            $lkm= 0;
            
        }
        
        return $lkm;
    }
   
    

    private function suljeYhteys(){
        $this->yhteys = null;
    }

}

?>