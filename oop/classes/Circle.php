<?php

/**
 * @author Vlad
 *
 *
 *
 * Class Circle
 * @package bionic
 */
class Circle extends AbstractCircle
{
    /**
     * @var string
     */
    private $material = 'metal';
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
        // partial override
        parent::__construct($radius);
        $this->map = array(
            '#000000' => 'black'
        );
        $this->color = $color;
        $this->material = $material;
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
        // total override
        $this->radius = $radius;
        $this->approximation();
        $this->recalculateLength();
//        $this->radius = $this->approximation($radius);

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

    /**
     * @return $this
     */
    public function rotate()
    {
        echo 'Go for ' . $this->length . ' distance per one rotation.' . PHP_EOL;
        $this->distance += $this->length;
        return $this;
    }

    public function getDistance()
    {
        return $this->distance;
    }


}