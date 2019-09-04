
<?php

include('Autot.php');

//Luodataan uusi henkilö
$henkilo = new Autot();

//Asetetaan lomakkeelta tulleet tiedot muuttujiin

// $henkilo->setId($_POST['NULL']);
$henkilo->setRekisterinumero($_POST['registerinumero']);
$henkilo->setMerkki($_POST['merkki']);
$henkilo->setValmistusvuosi($_POST['valmistusvuosi']);
$henkilo->setMalli($_POST['malli']);

$henkilo->luoYhteysTietokantaan();

$lisayOk = $henkilo->lisaaauto();

if($lisayOk > 0){
    echo "Lisäys onnistui";
}else{
    echo "Lisäys ei onnistui";
}
?>