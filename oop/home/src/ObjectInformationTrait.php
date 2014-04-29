<?php

trait ObjectInformationTrait
{
    public function getConstants()
    {
        return (new ReflectionClass($this))->getConstants();
    }
} 