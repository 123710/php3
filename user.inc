<?php
class User{

  public function setUsername ($name){
  $this->username = $name;
  }
  public function getUsername(){
    return $this->username;
  }

  public function setAchternaam ($achternaam){
    $this->achternaam = $achternaam;
  }
  public function getAchternaam(){
    return $this->achternaam;
  }

  public function setGeboortedatum($geboortedatum){
  $this->geboortedatum = $geboortedatum;
  }
  public function getGeboortedatum(){
    return $this->geboortedatum;
  }
}
 ?>
