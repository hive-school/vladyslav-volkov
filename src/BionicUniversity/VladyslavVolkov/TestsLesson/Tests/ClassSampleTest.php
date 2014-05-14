<?php
namespace BionicUniversity\VladyslavVolkov\TestsLesson\Tests;


use BionicUniversity\VladyslavVolkov\TestsLesson\Sample\ClassSample;

class ClassSampleTest extends \PHPUnit_Framework_TestCase
{

    public function dayProvider()
    {
        return array(
            array(false),
            array(1),
            array('05'),
            array(1988),
            array(null),
        );
    }

    /**
     * @dataProvider dayProvider
     */
    public function testCongratulate($birthDay)
    {
        $user = new ClassSample();
        $user->setBirthDate($birthDay);
        $this->assertNotEmpty($user->congratulate());
    }

    public function testCongratulateException()
    {
        $this->setExpectedException('\\Exception');
        $user = new ClassSample();
        $user->setBirthDate('05');
        $user->setName('Vlad');
        $user->congratulate();
    }

    public function testIsTodayBirthDate()
    {

        $user = new ClassSample();
        $method = new \ReflectionMethod($user, 'isTodayBirthDate');

        $method->setAccessible(true);
        $this->assertEquals(false, $method->invoke($user));

        $property = new \ReflectionProperty($user, 'age');
        $property->setAccessible(true);
        $property->setValue($user, 12);

        $this->assertEquals($user->getAge(), 12);

    }

}