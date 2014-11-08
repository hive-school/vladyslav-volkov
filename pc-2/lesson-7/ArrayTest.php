<?php

$splQueue = new \SplDoublyLinkedList();

$splQueue->push(10);
$splQueue->push(20);
$splQueue->push(30);
$splQueue->push(40);

$splQueue->setIteratorMode(SplQueue::IT_MODE_FIFO);

foreach ($splQueue as $element) {
    echo $element;
}

$splInt = new \SplInt(1);
$splString = new \SplString('some string');
$splB = new \SplBool(false);

function add(\SplInt $int)
{

}

if ($splB) {

}
echo $splString;