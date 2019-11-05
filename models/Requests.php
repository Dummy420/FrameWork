<?php
namespace MyMvc;
use PDO;

class Requests
{
    private static $table;

    public static function SelectAll()
    {
        $req = "SELCECT * FROM " . Self::$table;
        $res = Connection::getInstance()->query($req);
        var_dump($link);
    }

    public static function getTable() { return Self::$table; }

    public static function setTable($_t) { Self::$table = $_t; }
}