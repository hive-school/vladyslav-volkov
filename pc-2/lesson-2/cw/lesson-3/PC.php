<?php

/**
 * Created by PhpStorm.
 * User: askent
 * Date: 10/21/14
 * Time: 8:42 PM
 */
class PC
{
    /**
     * @var Car
     */
    private $car;
    private $firmware;

    public function setCar($car)
    {
        $this->car = $car;
        if ('BMW ' === $car) {
            $this->firmware = 'BMW';
        }
    }

    public function alert()
    {
        throw new \Exception('Alert');
//        $this->car->stop();
    }

    public function work()
    {
        $this->alert();
    }
}