<?php
class User4{
  private $username;
  private $achternaam;
  private $geboortedatum;

  public function setUsername ($name){
  $this->username = $name;
  }
  public function getUsername(){
    return $this->username;
  }

  public function setAchternaam ($lastname){
    $this->achternaam = $lastname;
  }
  public function getAchternaam(){
    return $this->achternaam;
  }

  public function setGeboortedatum($dayofbirth){
  $this->geboortedatum = $dayofbirth;
  }
  public function getGeboortedatum(){
    return $this->geboortedatum;
  }
}
 ?>
