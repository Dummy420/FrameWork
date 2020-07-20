<?php
namespace MyMvc;
use PDO;

class Connection
{
    private static $Instance;
    private $connection;

    private function __construct()
    {
        $this->connection = new PDO('mysql:host=localhost;dbname=immobilier', 'root', '');
    }

    public static function getInstance():Connection
    {
        if(!isset(Self::$Instance))
        {
            Self::$Instance = new Connection();
        }
        return Self::$Instance;
    }

    public function getConnection()
    {
        return $this->connection;
    }
}