<?php

/**
 * Class CalculatorNotNumericException
 */
class CalculatorNotNumericException extends CalculatorException
{
    /**
     * This message is shown when ...
     * @var string
     */
    protected $message = 'Please, give some numbers, not %d!';
}