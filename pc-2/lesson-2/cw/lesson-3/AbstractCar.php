<?php

/**
 * Created by PhpStorm.
 * User: askent
 * Date: 10/21/14
 * Time: 9:23 PM
 */
abstract class AbstractCar implements StopInterface, GoInterface
{
    /**
     * @var Engine
     */
    private $engine;
    /**
     * @var Door
     */
    private $door;
    /**
     * @var PC
     */
    private $pc;

    public function __construct()
    {
        $this->door = new Door();
        $this->pc = new PC($this);
    }

    public function setEngine(Engine $engine)
    {
        $this->engine = $engine;
    }

    public function rotateKey()
    {
        // Ensure accumulator is full
        // Fill the cylinders with fuel
        $this->detonateTheFuel();
        $this->rotateTheEngine();

        return 'Result ok';
    }

    private function detonateTheFuel()
    {
//
    }

    private function rotateTheEngine()
    {
        $this->engine->eatTheOil();
//        Rotate the wheels
    }

    public function downTheWindow()
    {
        $this->door->downTheWindow();
    }


    public function go()
    {
        $this->pc->work();
    }

    public function stop()
    {
        // TODO: Implement stop() method.
    }

    abstract public function changeTheTransmission();
}