<?php

ini_set('display_errors', 'On');
error_reporting(E_ALL);
header('Content-Type', 'application/json');

// Framework
$pdo = new \PDO('mysql:dbname=test;host=127.0.0.1', 'root', '', [
    PDO::ATTR_PERSISTENT => true,
]);
$pdoStatement = $pdo->query('SET NAMES UTF8');

// Routing
if ($_SERVER['REQUEST_URI']) {
    $params = explode('/', $_SERVER['REQUEST_URI']);
    require_once __DIR__ . '/' . (end($params)) . '/index.php';
}

