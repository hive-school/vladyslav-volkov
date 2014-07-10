<?php

class DepositSafe implements Lockable, Openable, Keyable
{
    public function lock()
    {
        // TODO: Implement lock() method.
    }

    public function open($direction)
    {
        switch ($direction) {
            case 'rotate':
                die('');
        }
        // TODO: Implement open() method.
    }

    public function lockKey()
    {
        // TODO: Implement lockKey() method.
    }


} 