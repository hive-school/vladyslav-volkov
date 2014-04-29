<?php

class Building
{
    use ObjectInformationTrait;

    const BUILDING_TYPE_SKY = 'SKY';

    private $floorsNumber;

    /**
     * @return mixed
     */
    public function getFloorsNumber()
    {
        return $this->floorsNumber;
    }


}