<?php


include('Henkilo.php');

$henkilo = new Henkilo();

$henkilo->luoYhteysTietokantaan();
$henkilo->getHenkilonumero($_GET['id']);

   
$delect =  $henkilo->poistaHenkilo();

   if (delect == true) {
     
    echo 'Henkilo poistettu, id numero' . $_GET['id'];
    header('refresh:2; url=index.php');
   }
   else {
       echo 'Henkilo poistaminen ongelma';
       header('refresh:5; url=index.php');
   }

?>