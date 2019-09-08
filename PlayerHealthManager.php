<?php

class PlayerHealthManager{
 private $currentHP;
 private $maxHP;


//  public function __constuct($currentHP, $maxHP){
//    $this->current = $currentHP;
//    $this->maxHP = $maxHP;
//  }


 /**
  * Get the value of currentHP*/ 
 public function getCurrentHP(){
  return $this->currentHP;
 }

 /*** Set the value of currentHP * @return  self*/ 
 public function setCurrentHP($currentHP){
  $this->currentHP = $currentHP;
  return $this;
 }

 /*** Get the value of maxHP*/ 
 public function getMaxHP(){
  return $this->maxHP;
 }

 /*** Set the value of maxHP** @return  self*/ 
 public function setMaxHP($maxHP){
  $this->maxHP = $maxHP;

  return $this;
 }

 //add more life function
 public function addPlayerHealth($healthAmount){
   return  $this->getCurrentHP() + $healthAmount;
 }

 public function setMaxHealth(){
     return $this->getMaxHP();
 }

 public function hurtPlayer($damageToGive){
     return $this->getMaxHP()-$damageToGive;
 }


}
?>