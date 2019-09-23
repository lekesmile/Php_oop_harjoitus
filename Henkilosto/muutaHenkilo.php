<?php

// echo $_GET['id'];

include('Henkilo.php');

$henkilo = new Henkilo();


$henkilo->getHenkilonumero($_GET['id']);
//Asetetaan lomakkeelta tulleet tiedot muuttujiin

$henkilo->setHenkilonumero($_POST['henkilonumero']);
$henkilo->setEtunimi($_POST['etunimi']);
$henkilo->setSukunimi($_POST['sukunimi']);
$henkilo->setOsasto($_POST['osasto']);
$henkilo->setPalkka($_POST['palkka']);

$henkilo->luoYhteysTietokantaan();

$lisayOk = $henkilo->muutaHenkilo();

if($lisayOk > 0){
    echo "muutos onnistui";
}else{
    echo "muutos ei onnistui";
}


?>


