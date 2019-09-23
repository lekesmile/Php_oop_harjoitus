<?php


class Oppilas{
 public $etunimi;
 public $sukunimi;
 public $kotiosoite;
 public $email;
 private $henkilönumero;

 



public function __construct($etunimi, $sukunimi, $kotiosoite, $email, $henkilönumero){
    $this->etunimi = $etunimi;
    $this->sukunimi = $sukunimi;
    $this->kotiosoite = $kotiosoite;
    $this->email = $email;
    $this->henkilönumero = $henkilönumero;

}


    

 /** Get the value of etunimi*/ 
 public function getEtunimi(){
  return $this->etunimi;
 }

 public function setEtunimi($etunimi){
  return $this->etunimi = $etunimi;
 }

 /**Get the value of sukunimi*/ 
 public function getSukunimi(){
  return $this->sukunimi;
 }

 /**
  * Set the value of sukunimi */ 
 public function setSukunimi($sukunimi) {
  return $this->sukunimi = $sukunimi;
}

 /** * Get the value of kotiosoite*/ 
 public function getKotiosoite(){
  return $this->kotiosoite;
 }

 /*** Set the value of kotiosoite*/ 
 public function setKotiosoite($kotiosoite){
   return $this->kotiosoite = $kotiosoite;
}

 /*** Get the value of email*/ 
 public function getEmail(){
  return $this->email;
 }

 /*** Set the value of email @return  self */ 
 public function setEmail($email){
return  $this->email = $email;
 
 }


 /** * Set the value of henkilönumero** @return  self*/ 
private function getHenkilönumero(){
    return $this->henkilönumero;
   }
  
 private function setHenkilönumero($henkilönumero){
   return $this->henkilönumero = $henkilönumero;
 }

 public function printAll(){
    return "Your full name is " . $this->getEtunimi() . " ". 
     $this->getSukunimi() . "<br>" . " you live @ " . $this->getKotiosoite() .
      '<br>' . "and your email is " . $this->getEmail() . ' <br>' . " student number is " 
       . $this->getHenkilönumero();
}


}

?>