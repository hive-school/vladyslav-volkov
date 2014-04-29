<?php

class GpsNavigator
{
    use ObjectInformationTrait;

    public function show(LocateInterface $object)
    {
        return $object->locate();
    }

    public function fill(AreaInterface $area)
    {
        return $area->getBackground();
    }
} 