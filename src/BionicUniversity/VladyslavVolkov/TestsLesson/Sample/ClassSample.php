<?php
namespace BionicUniversity\VladyslavVolkov\TestsLesson\Sample;

/**
 * Class ClassSample
 * @package BionicUniversity\VladyslavVolkov\TestsLesson\Sample
 */
class ClassSample
{

    const BIRTH_DAY_MESSAGE = 'Happy birthday';
    const USUAL_DAY_MESSAGE = 'Usual day';
    /**
     * @var string
     */
    private $name;

    /**
     * @param mixed $birthDate
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
    }

    /**
     * @var
     */
    private $age;
    private $birthDate;


    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     * @throws \Exception
     */
    public function congratulate()
    {
        if ($this->isTodayBirthDate()) {
            $message = $this->getHappyBirthDayMessage();
        } else {
            $message = $this->getUsualDayMessage();
        }
        return $message;
    }

    /**
     * @return string
     * @throws \Exception
     */
    private function getHappyBirthDayMessage()
    {
        if ('Vlad' === $this->name) {
            throw new \Exception('Unfortunately...');
        }
        return self::BIRTH_DAY_MESSAGE . ', ' . $this->name;
    }

    private function getUsualDayMessage()
    {
        return 'Usual day';
    }

    private function isTodayBirthDate()
    {

        return (date('m') === $this->birthDate);
    }


}