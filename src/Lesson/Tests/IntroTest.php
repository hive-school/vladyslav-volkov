<?php
namespace Lesson\Tests;

use Lesson\Code\Intro;

class IntroTest extends \PHPUnit_Framework_TestCase
{
    public function testSetName()
    {
        $intro = new Intro();
        $name = 'Vlad';
        $intro->setName($name);
        $this->assertEquals($name, $intro->getName());
    }
} 