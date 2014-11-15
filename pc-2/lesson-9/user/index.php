<?php
$userDatabase = new UserDatabase($pdo);
$users = $userDatabase->getUsers();

echo json_encode($users);
