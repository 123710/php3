<?php
class Counter {
    private static $_count = 5+5;

    public function __construct() {
        self::$_count++;
    }

    public static function getCount() {
        return self::$_count;
    }
}

//echo Counter::getCount().'<br />';

$x = new Counter;
echo $x->getCount().'<br />';

$y = new Counter;
echo Counter::getCount().'<br />';

$z = new Counter;
echo Counter::getCount().'<br />';

$e = new Counter;
echo Counter::getCount().'<br />';
  ?>
