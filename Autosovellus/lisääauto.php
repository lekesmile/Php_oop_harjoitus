<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="css/form.css">
    <title>Lisää Auto</title>
    <link rel="stylesheet" href="./css/style.css">

  </head>
  <body>
  
    
  <form action="autolisays.php" method="post" class="form-signin">
  <img class="mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Lisää Auto</h1>
  
  <label for="inputPassword" class="sr-only">rekisterinumero</label>
  <input  name="registerinumero" type="text" id="inputPassword" class="form-control" placeholder="rekisterinumero" required>
  <label for="inputEmail" class="sr-only">merkki</label>
  <input  name="merkki" type="text" id="inputEmail" class="form-control" placeholder="merkki" required autofocus>
  <label for="inputEmail" class="sr-only">valmistusvuosi</label>
  <input  name="valmistusvuosi" type="text" id="inputEmail" class="form-control" placeholder="valmistusvuosi" required autofocus>
  <label for="inputEmail" class="sr-only">malli</label>
  <input  name="malli" type="text" id="inputEmail" class="form-control" placeholder="malli" required autofocus>
  <div class="checkbox mb-3">
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Tallena</button>
  <p class="mt-5 mb-3 text-muted">&copy; AutotSovellus 2019</p>
</form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>