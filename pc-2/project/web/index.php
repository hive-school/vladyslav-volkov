<?php

$config = include('..' . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'config.dev.php');
error_reporting($config['error_reporting']);
ini_set('display_errors', 'On');
spl_autoload_register(function ($className) {
    require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';
});

$chunks = parse_url($_SERVER['REQUEST_URI']);

$params = explode('/', $chunks['path']);

$actionName = array_pop($params) . 'Action'; // testAction
$controllerName = 'BionicUniversity\\Blog\\Controller\\' . ucfirst(array_pop($params)) . 'Controller'; // UserController

if (!class_exists($controllerName)) {
    header('HTTP 1.1 404 Not Found');
}
$controller = new $controllerName;

$controller->$actionName();