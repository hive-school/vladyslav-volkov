<?php

class WoodDoor extends Door implements Lockable, Keyable
{
    public function getWoodType()
    {

    }

    public function lock()
    {
        $this->pull();
    }

    public function lockKey()
    {

    }


}