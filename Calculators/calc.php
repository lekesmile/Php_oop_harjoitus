<?php 

include('../Matikka.php');
$calculation = new Matikka();

$kalori= "";
$nameError = "";

if(isset($_POST['laske'])){
 
   if(empty($_POST["kalori"])){
       $nameError = "This is required";
   }
   else {
       $kalori = $_POST["kalori"];
   }
   
   echo $calculation->calcJouleiksi($kalori);
}
 
?>
