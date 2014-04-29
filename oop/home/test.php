<?php
$school = new School();
$student = new Student('Vlad');
$school->enterToSchool($student);
foreach ($school->getStudentsInDaHouse() as $studentInDaHouse) {
    echo $studentInDaHouse->getName();
}