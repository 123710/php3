<?php

  require_once("php/includes/default.inc.php");

  $huis = new Huis('Pelikaanstraat','86','Assen');
  $belasting = new Belasting($huis);
  // echo var_dump($huis);

  //alles setten
  $huis->setStraatnaam('Pelikaanstraat');
  $huis->setHuisnummer(86);
  $huis->setPlaats("amsTerDam");
  $huis->setAantalKamers(1);
  $huis->setAantalToiletten(1);
  $huis->setVerwarming('ja');
  $huis->setSoortVerwarming('CV');
  $huis->setVierkantMeterGrond(75);
  $huis->setWozWaarde(250000);

  //alles op scherm
  echo "<br> Straatnaam: ".$huis->getStraatnaam();
  echo "<br> huisnummer: ".$huis->getHuisnummer();
  echo "<br> Plaats: ".$huis->getPlaats();
  echo "<br> aantalkamers: ".$huis->getAantalKamers();
  echo "<br> aantaltoiletten: ".$huis->getAantalToiletten();
  echo "<br> Verwarming: ".$huis->getVerwarming();
  echo "<br> soort verwarming: ".$huis->getSoortVerwarming();
  echo "<br> Vierkant Meter Grond: ".$huis->getVierkantMeterGrond();
  echo "<br> WozWaarde: €".$huis->getWozWaarde();


  //$belasting
  echo "<br> ";
  echo "<br> Belasting: € " . $belasting->getbelasting();
 ?>
