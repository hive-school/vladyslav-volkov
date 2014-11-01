<?php

/**
 * Class Example
 */
class Calculator
{
    /**
     * @param $a
     * @param $b
     * @throws CalculatorNotNumericException
     *
     * @return int|string
     */
    public function summarize($a, $b)
    {
        if (!is_numeric($a) || !is_numeric($b)) {
            throw new CalculatorNotNumericException($b . ' is not numeric');
        }
        return $a + $b;
    }

    /**
     * @param stdClass $a
     * @return number
     */
    public function abs(array $a)
    {
        return abs($a);
    }

}
