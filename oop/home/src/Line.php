<?php

class Line
{

    private $startPoint;
    private $endPoint;

    public function __construct()
    {
        $this->startPoint = new Point();
        $this->endPoint = new Point();
    }
} 