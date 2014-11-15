<?php

$config = include('..' . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'config.dev.php');
error_reporting($config['error_reporting']);
ini_set('display_errors', 'On');
set_include_path(get_include_path() . PATH_SEPARATOR . implode(PATH_SEPARATOR, [
        __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'src',
    ]));
spl_autoload_register(function ($className) {
    require_once str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';
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