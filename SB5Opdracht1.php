<?php

// require 'user4.inc';
function my_autoloader($class) {
    include $class . '.class.inc';
}
spl_autoload_register('my_autoloader');

$user = new User4();
$user->setUsername('Bashar ');
echo $user->getUsername();

$lastname = new User4();
$lastname->setAchternaam('Al Badeen');
echo $lastname->getAchternaam();

$dayofbirth = new User4();
$dayofbirth->setGeboortedatum('05-01-1995');
echo " geboren op ".$dayofbirth->getGeboortedatum();
 ?>
