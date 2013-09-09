<?php

include_once 'Beverage.php';
include_once 'HouseBlend.php';
include_once 'Mocha.php';
include_once 'Whip.php';

echo 'Welcome:<br>';

$beverage = new Beverage();
echo $beverage->getDescription() + ', ' + $beverage->cost() + '<br>';

var_dump($beverage);

$beverage2 = new HouseBlend();
$beverage2 = new Mocha($beverage2);
$beverage2 = new Whip($beverage2);
echo $beverage2.getDescription() + ", " + $beverage2.cost() + '<br>';

var_dump($beverage2);