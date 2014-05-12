<?php
require_once 'vendor/autoload.php';

use Symfony\Component\ClassLoader\UniversalClassLoader;

$classLoader = new UniversalClassLoader();
$classLoader ->registerNamespaces(array(
    'Lesson' => __DIR__ . '/src',
));
$classLoader->register();

ini_set('display_errors', 'On');