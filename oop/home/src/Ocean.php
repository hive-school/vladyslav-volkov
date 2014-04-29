<?php

class Ocean implements LocateInterface, AreaInterface
{
    use AreaTrait;
    use SquareTrait;

    public function getSquare()
    {
        return $this->size * $this->size * $this->size;
    }

    private $area = 'water_sprite.jpg';

    public function locate()
    {
        return $this->area * $this->area;
    }
} 