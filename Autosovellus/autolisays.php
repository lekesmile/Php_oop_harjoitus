
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


$successMessage = "Lisäys onnistui";
$errorMessage =  "Lisäys ei onnistui";
$redirect = header('Location: index.php');


if($lisayOk > 0){
    echo "<script type='text/javascript'>alert('$successMessage');</script>";
    echo "<script type='text/javascript'>setTimeout('$redirect, 5000');</script>";
    
}else{
    echo "<script type='text/javascript'>alert('$errorMessage');</script>";
}
?>