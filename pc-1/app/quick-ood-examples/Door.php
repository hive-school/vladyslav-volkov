<?php

abstract class Door implements Openable
{
    protected $size;

    function open($direction)
    {
        if ($direction === 'pull') {
            $this->pull();
        } else {
            $this->push();
        }

        echo 'Push the door';
    }

    protected function pull()
    {

    }

    protected function push()
    {

    }

    final public function getColor()
    {
        return 'black';
    }

}