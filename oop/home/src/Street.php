<?php

class Street implements LocateInterface
{

    public function locate()
    {
        return array(
            new Line(),
        );
    }
} 