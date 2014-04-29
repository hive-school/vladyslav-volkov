<?php

class Forest implements LocateInterface, AreaInterface
{
    use AreaTrait;

    public function locate()
    {
        return array_merge(array('apple', 'orange'));
    }
} 