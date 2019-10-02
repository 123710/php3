<?php
class Huis{
  // public;
  private $AantalKamers = 1;
  private $AantalToiletten = 1;
  private $Verwarming = "nee";
  private $Straatnaam = '';
  private $huisnemmer = 1;
  private $plaats='';
  private $VierkantMeterGrond= 4;
  private $WozWaarde = 10000;


  public function getAantalkamers(){
    return $this->AantalKamers;
  }
  public function setAantalKamers($ak){
    $this->AantalKamers = $ak;
  }
  public function getAantalToiletten(){
    return $this->AantalToiletten;
  }
  public function setAantalToiletten($at){
    $this->AantalToiletten= $at;
  }
  public function getVerwarming(){
    return $this->Verwarming;
  }
  public function setVerwarming($v){
    $this->Verwarming = $v;
  }
  public function getSoortVerwarming(){
    return $this->SoortVerwarming;
  }
  public function setSoortVerwarming($sv){
    $this->SoortVerwarming = $sv;
  }
  public function getStraatnaam(){
    return $this->Straatnaam;
  }
  public function setStraatnaam($sn){
    $this->Straatnaam= $sn;
  }
  public function getHuisnummer(){
    return $this->Huisnummer;
  }
  public function setHuisnummer($hn){
    $this->Huisnummer = $hn;
  }
  public function getPlaats(){
    return $this->Plaats;
  }
  public function setPlaats($p){
    $this->Plaats= $p;
  }
  public function getVierkantMeterGrond(){
    return $this->VierkantMeterGrond;
  }
  public function setVierkantMeterGrond($vmg){
    $this->VierkantMeterGrond= $vmg;
  }
  public function getWozWaarde(){
    return $this->WozWaarde;
  }
  public function setWozWaarde($ww){
    $this->WozWaarde = $ww;
  }




  public function __construct ($Straatnaam, $Huisnummer, $Plaats){
  $this->AantalKamers = 1;
  $this->AantalToiletten = 1;
  $this->Verwarming = 'nee';
  $this->SoortVerwarming = '';
  $this->Straatnaam = $Straatnaam;
  $this->Huisnummer = $Huisnummer;
  $this->Plaats = $Plaats;
  $this->VierkantMeterGrond = 4;
  $this->WozWaarde = 10000;
  }
  // public function Eigensch ($AantalKamers, $AantalToiletten, $Verwarming,
  // $SoortVerwarming, $Straatnaam, $Huisnummer, $Plaats, $VierkantMeterGrond, $WozWaarde){
  //
  // $this->AantalKamers = $AantalKamers;
  // $this->AantalToiletten = $AantalToiletten;
  // $this->Verwarming = $Verwarming;
  // $this->SoortVerwarming = $SoortVerwarming;
  // $this->Straatnaam = $Straatnaam;
  // $this->Huisnummer = $Huisnummer;
  // $this->Plaats = $Plaats;
  // $this->VierkantMeterGrond = $VierkantMeterGrond;
  // $this->WozWaarde = $WozWaarde;
  //
  // }
}
 ?>
