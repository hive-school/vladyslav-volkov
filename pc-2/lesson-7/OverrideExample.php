<?php

class ToStringExample
{
    public function __toString()
    {
        return 'string';
    }
}

class OverrideExample
{
    public function overrideMe($number, $string, array $array = [])
    {
        return $number . $string . implode('/', $array);
    }

}

final class OverrideNewExample extends OverrideExample
{

    final public function overrideMe($number = 12, $string = 321, array $array = [])
    {
        return strrev(parent::overrideMe($number, $string, $array) . '123');
    }

}

$override = new OverrideExample();
echo PHP_EOL . $override->overrideMe(1, 'string', [1, 2, 3], new ToStringExample()) . PHP_EOL;

$overrideNew = new OverrideNewExample();


