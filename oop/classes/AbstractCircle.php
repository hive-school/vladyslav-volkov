<?php

/**
 * Class AbstractCircle
 */
abstract class AbstractCircle
{
    /**
     * @var float
     */
    protected $radius;
    /**
     * @var int
     */
    protected $length;
    /**
     * @var float
     */
    protected $distance = 0;

    /**
     * @param float $radius
     */
    function __construct($radius)
    {
        $this->radius = $radius;
        $this->length = 2 * 3.14 * $radius;
    }

    /**
     * @return mixed
     */
    abstract public function rotate();

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @return void
     */
    protected function recalculateLength()
    {
        $this->length = $this->radius * 2 * 3.14;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
        $this->recalculateLength();
    }

} 