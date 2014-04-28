<?php

error_reporting(E_ALL);

ini_set('display_errors', 'On');

foreach(range(1,10) as $value) {
if (0 === ($value % 3)) {
 break;
} else {
echo $value.PHP_EOL;
}
}
