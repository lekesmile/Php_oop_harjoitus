<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title> Esimerkki 2</title>
    <!--Import the php file Osoite -->
    <?php 
    include('Registration.php');
    ?>
  </head>
  <body>
      <div class= "container">
    <h1 class = "display-1 alert-primary">Arto Testi</h1>
   
    <!--initialting out class method -->
    <?php
      $Person1 = new Info();
      $Person2 = new Info();

    //   <!--set name methods -->
      $Person1->setRekisterinumero('2019');
      $Person1->setMerkki('Datanomi');
      $Person1->setMalli('Kin05');
      $Person1->setValmistusvuosi('2030');


      $Person2->setRekisterinumero('2005');
      $Person2->setMerkki('Tradinomi');
      $Person2->setMalli('Php15');
      $Person2->setValmistusvuosi('2020');
    

      echo "James rekistetri numero on ". $Person1->getRekisterinumero() . " " . "Hän opiskelee  " . $Person1->getMerkki() ." " . $Person1->getMalli(). "Hänen valmistusvuosi on".  $Person1->getValmistusvuosi() . "<br>";
      

      echo "Faith rekistetri numero on ". $Person2->getRekisterinumero() . " "  . "Hän opiskelee  " . $Person2->getMerkki() ." " . $Person2->getMalli(). "Hänen valmistusvuosi on".  $Person2->getValmistusvuosi() . "<br>";
    ?>

</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>