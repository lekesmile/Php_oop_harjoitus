<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

//echo $_GET['id'];
// $henkilo->getHenkilonumero($_GET['id']);
include('Henkilo.php');


$henkilo = new Henkilo();


//Asetetaan lomakkeelta tulleet tiedot muuttujiin

$henkilo->setHenkilonumero($_POST['henkilonumero']);
$henkilo->setEtunimi($_POST['etunimi']);
$henkilo->setSukunimi($_POST['sukunimi']);
$henkilo->setOsasto($_POST['osasto']);
$henkilo->setPalkka($_POST['palkka']);

$henkilo->luoYhteysTietokantaan();
$lisayOk = $henkilo->muutaVainHenkilo();


if($lisayOk > 0){
    echo "muutos onnistui";
    header('refresh:2; url=index.php');
}else{
    echo "muutos ei onnistui";
    // header('refresh:2; url=muutaHenkiloSyotto.php');
}


?>

