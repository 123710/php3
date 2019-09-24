<?php
require 'user.inc';

$user = new User();
$user->setUsername('Bashar ');
echo $user->getUsername();

$achternaam = new User();
$achternaam->setAchternaam('Al Badeen');
echo $achternaam->getAchternaam();

$geboortedatum = new User();
$geboortedatum->setGeboortedatum('05-01-1995');
echo " geboren op ".$geboortedatum->getGeboortedatum();
 ?>
