<?php

/**
 * Class User
 */
class User
{

    /**
     * @param $lockable
     */
    public function takeSomethingToLock(Lockable $lockable)
    {
        $lockable->lock();
        $this->rotateKey($lockable);
    }

    private function rotateKey(Keyable $lockable)
    {
        $lockable->lockKey();
    }


    /**
     * @param Openable $openable
     */
    public function takeSomethingToOpen(Openable $openable)
    {
        echo $openable->open('rotate');
    }

    /**
     * @param Door $door
     */
    public function getColorOfTheDoor(Door $door)
    {
        $door->getColor();
    }
}