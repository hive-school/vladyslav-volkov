<?php
require 'Calculator.php';
require 'CalculatorException.php';
require 'CalculatorNotNumericException.php';


$calculator = new Calculator();

$result = 0;

try {
    $result = $calculator->summarize(1, 'df');
} catch (CalculatorException $e) {
    echo $e->getMessage() . PHP_EOL;
} finally {
    unset($calculator);
    $calculator = new Calculator();
}

//try {
    $result = $calculator->abs(123);
//} catch (\Exception $e) {
//    echo $e->getMessage();
//}

