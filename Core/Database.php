<?php
namespace Core;
use PDO;
class Database
{
    public $connection;
    public $statement;
    public function __construct($config, $username = "root", $password = "1234@oluwadamilare")
    {
        $dsn = "mysql:" . http_build_query($config, '', ';'); // "mysql:host=localhost;port=3306;dname=myproject;charset=utf8mb4"
       $this->connection = new PDO($dsn, $username, $password, [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
       ]);
    }
    public function query($query, $params = [])
    {
     
        $statement = $this->connection->prepare($query);
        $statement->execute($params);
        return $statement;
    }
    public function get()
    {
        return $this->statement->fetchAll();
    }

    public function find()
    {
        return $this->statement->fetch();
    }

    public function findOrFail()
    {
        $result = $this->find();

}
}
