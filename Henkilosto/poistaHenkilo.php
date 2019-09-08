<?php


include('Henkilo.php');

$henkilo = new Henkilo();

$henkilo->luoYhteysTietokantaan();
$henkilo->getHenkilonumero($_GET['id']);

   
$delect =  $henkilo->poistaHenkilo();

   if (delect == true) {
      echo 'Henkilo poistettu, id numero' . $_GET['id'];
   }
   else {
       echo 'Henkilo poistaminen ongelma';
   }

?>