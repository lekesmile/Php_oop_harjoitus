
<?php

include('Henkilo.php');

//Luodataan uusi henkilö
$henkilo = new Henkilo();

//Asetetaan lomakkeelta tulleet tiedot muuttujiin

$henkilo->setHenkilonumero($_POST['henkilonumero']);
$henkilo->setEtunimi($_POST['etunimi']);
$henkilo->setSukunimi($_POST['sukunimi']);
$henkilo->setOsasto($_POST['osasto']);
$henkilo->setPalkka($_POST['palkka']);

$henkilo->luoYhteysTietokantaan();

$lisayOk = $henkilo->lisaaHenkilo();

if($lisayOk > 0){
    echo "Lisäys onnistui";
}else{
    echo "Lisäys ei onnistui";
}
?>