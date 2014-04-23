<?php
$bool = false;
$int = (int)$bool; // 0

$string = 'empty123123123';
$int = (int)$string; // ''


// Comparing

$object = new stdClass();
$object->key = 'value';

if (1 == '1') {
    if (1 == true) {
        if (['key' => 'value'] == $object) {

        }
    }
}

