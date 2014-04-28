<?php

/**
 * @author Vlad
 *
 *
 *
 * Class Circle
 * @package bionic
 */
class Circle
{
    /**
     * @var string
     */
    private $material;
    /**
     * @var int
     */
    private $length;
    /**
     * @var float
     */
    private $radius;
    /**
     * @var string
     */
    private $color;
    /**
     * @var array
     */
    private $map;

    /**
     * @param $color
     * @param $material
     * @param $radius
     */
    public function __construct($color, $material, $radius)
    {
        $this->map = array(
            '#000000' => 'black'
        );
        $this->color = $color;
        $this->material = $material;
        $this->radius = $radius;
        $this->length = 2 * 3.14 * $radius;
    }

    /**
     * @param $colorCode
     * @return mixed
     */
    private function convertColor($colorCode)
    {
        // #000000
        // $this->map[#000000]
        return $this->map[$colorCode];
    }

    /**
     * @param float $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
        $this->approximation();
        $this->recalculateLength();
//        $this->radius = $this->approximation($radius);

    }

    /**
     * @return void
     */
    private function recalculateLength()
    {
        $this->length = $this->radius * 2 * 3.14;
    }

    /**
     * @return void
     */
    private function approximation()
    {
        $this->radius *= 1.1;
//        return $radius * 1.1;
    }

    /**
     * @return float
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->convertColor($this->color);
    }

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }


}