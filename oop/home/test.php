<?php
set_include_path(get_include_path() . PATH_SEPARATOR . __DIR__ . '/src');

spl_autoload_register(
    function ($className) {
        require_once(str_replace("\\", "/", $className) . '.php');
    }
);

$school = new School();
$windows = new Building\Window();
$student = new Student('Vlad');
$school->enterToSchool($student);
foreach ($school->getStudentsInDaHouse() as $studentInDaHouse) {
    echo $studentInDaHouse->getName();
}



$gps = new GpsNavigator();
$forest = new Forest();
var_dump($gps->show($forest));