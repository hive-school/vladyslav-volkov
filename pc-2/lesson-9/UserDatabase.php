<?php

class UserDatabase
{
    /**
     * @var \PDO
     */
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getUsers()
    {
        $pdoStatement = $this->pdo->query('SELECT * FROM user');
        return $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteUser($id){
        $pdoStatement = $this->pdo->prepare('DELETE FROM user WHERE id = :id');
        $pdoStatement->bindParam('id', $id);

        return $pdoStatement->execute();

    }
}