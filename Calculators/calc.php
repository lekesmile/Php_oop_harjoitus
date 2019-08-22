<?php 

include('../Matikka.php');
$cal = new Matikka();

$syötettyKalori = $_POST["kalori"];


echo $cal->calcJouleiksi($syötettyKalori);





?>

<script>
 let userinput = document.querySelectAll('input')[0].value;
 if (userinput == " "){
     alert('pls fill in the form')
 }

 
</script>