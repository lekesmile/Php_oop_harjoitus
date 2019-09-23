<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title> Esimerkki 5</title>

    <style> 
    h3{
        width: 50%;
    }

    .pp{
        width:50%;
        float: right;
    }
        </style>
    <!--Import the php file Henkilö -->
    <?php 
    include('Linkki.php');
    ?>
  </head>
  <body>
  <section class = "jumbotron text-center" >
  <div class= "container">
    <h1 class= "jumbotron-heading" >Linkki Testaus</h1>
    <p class="lead text-muted">
    <!--initialting out class method -->

    <?php
     $Person = new Linkki('001',  '<a href="http://www.mysql.com">www.mysql.com</a>', 'MySQL-tietokannan kotisivu', 'Relaatiotietokanta', 'mysql');
     echo $Person->tulostakaikki();
     
    ?>
  

      

    </p>

</div>
</section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>