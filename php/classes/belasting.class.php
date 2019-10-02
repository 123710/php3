<?php
  class Belasting {

    private $huis;
    const TARIEVEN = array(
      array(0,100000,600),
      array(100000,200000,2000),
    );

    public function __construct($huis){
      $this->huis = $huis;
    }

    public function getbelasting(){
      $belasting = 6000;
        for ($t=0; $t < count(self::TARIEVEN); $t++) {
          if(self::TARIEVEN[$t][0] < $this->huis->getWozWaarde() && self::TARIEVEN[$t][1] >= $this->huis->getWozWaarde()){
            $belasting = self::TARIEVEN[$t][2];
          }
        }
        switch($this->huis->getAantalKamers()){
          case 1:
            $belasting += 100;
            break;
          case 2:
            $belasting += 300;
            break;
          default:
            $belasting += 800;
        }
        switch(strtolower($this->huis->getPlaats())){
          case "amsterdam":
          case "rotterdam":
          case "groningen":
            $belasting += 1000;
            break;
        }
        return $belasting;
    }

  }
?>
