<?php

ini_set('display_errors', 'On');
error_reporting(E_ALL);
// Framework
$pdo = new \PDO('mysql:dbname=test;host=127.0.0.1', 'root', '', [
    PDO::ATTR_PERSISTENT => true,
]);
$pdoStatement = $pdo->query('SET NAMES UTF8');

// App
$pdoStatement = $pdo->query('SELECT * FROM user');

$pdoStatement = $pdo->prepare('SELECT * FROM user WHERE id = :id');
$pdoStatement->bindParam('id', $_GET['id']);
$pdoStatement->execute();

$pdoStatement = $pdo->prepare('INSERT INTO user SET email = :email');
$pdoStatement->bindParam('email', $_POST['email'], PDO::PARAM_STR);
$pdoStatement->bindParam('is_active', $_POST['is_active'], PDO::PARAM_BOOL);
$pdoStatement->execute(
    [
        'email' => $_POST['']
    ]
);

$data = $pdoStatement->fetchAll(PDO::FETCH_OBJ);


var_dump($data);

$email = mysql_real_escape_string($_POST['email']);

mysql_query('INSERT INTO user SET email = "' . $email . '"');


//
//die;
//
//$connection = mysql_connect('localhost', 'root');
//mysql_select_db('test');
//
//$query = mysql_query('SELECT * FROM user');
//
//$data = [];
//while ($row = mysql_fetch_assoc($query)) {
//    $data[$row['id']] = $row;
//}
//
//
//$query = mysql_query('INSERT INTO user SET (email = "test@gmail.com")');
//
//var_dump($data);
//


