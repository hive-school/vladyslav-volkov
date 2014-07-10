<?php

class Bottle implements Openable
{
    public function open($rotation)
    {
        if ($rotation === 'clockwise') {
            $this->clockwise();
        }
        echo 'Rotate the bottle neck';
    }

    private function clockwise()
    {

    }

} 