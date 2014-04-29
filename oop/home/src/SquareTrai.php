<?php

trait SquareTrait
{
    private $size;

    public function getSquare()
    {
        return $this->size * $this->size;
    }
} 