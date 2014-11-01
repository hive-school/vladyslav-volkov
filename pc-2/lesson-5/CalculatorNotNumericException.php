<?php

class CalculatorNotNumericException extends CalculatorException
{
    protected $message = 'Please, give some numbers, not %d!';
}