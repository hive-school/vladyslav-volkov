<?php

/**
 * Created by PhpStorm.
 * User: bionic
 * Date: 4/29/14
 * Time: 8:26 AM
 */
class School extends Building
{
    private $students;
    private $lecturers = array(
        'Vlad', 'Viktor'
    );

    public function __construct()
    {
        $this->students = new ArrayObject();
    }

    public function enterToSchool(Student $student)
    {
        $this->students->append($student);
    }

    /**
     * @return Student[]
     */
    public function getStudentsInDaHouse()
    {
        return $this->students;
    }
} 