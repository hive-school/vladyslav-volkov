<?php

$integer = 1;
$float = 11.60;
$string = 'Some string';
$boolean = false;

echo "Scalar types" . PHP_EOL;
var_dump($integer, $float, $string, $boolean);

$null = null;
$resource = fopen('.gitignore', 'r'); // mysql_connect()
$assocArray = array('fruits' => array('green' => 'kiwi', 'orange' => array('mandarin')));
$object = new stdClass();

$callableObject = function () {
    echo 22;
};

$callableObject();
function test(callable $function)
{
    echo $function() . 123;
}

$megaSort = function ($a, $b) {
    return $a < $b;
};

$array = [1, 2, 3, 4, 1, 2];
uasort($array, $megaSort);

test($callableObject);


echo "Non-scalar & structures" . PHP_EOL;
var_dump($null, $resource, $assocArray, $object, $callableObject);


$array = ['test1' => 1, 'test2' => 2, 'test3' => 3];
$object = (object)$array;

echo $object->test1;

$array = (array)$object; // $array['test1']