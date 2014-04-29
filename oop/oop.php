<?php
include 'classes/AbstractCircle.php';
include 'classes/Circle.php';

$frontCircle = new Circle('#000000', 'metal', 12.5);
$frontCircle->setRadius(10);
$frontCircle->rotate()->rotate()->rotate();

echo $frontCircle->getDistance() . ' kms' . PHP_EOL;

$anotherFrontCircle = new Circle('#000000', 'metal', 12.5);
echo $anotherFrontCircle->rotate()->getDistance() . PHP_EOL;
//echo $frontCircle->getColor().PHP_EOL;


//echo $frontCircle->radius;
//$frontCircle->radius = 3.5;
//var_dump($frontCircle);
$backCircle = new Circle('black', 'metal', 3.5);

$backCircle->setRadius(12.5);
//var_dump($backCircle);
//echo $backCircle->getRadius();

