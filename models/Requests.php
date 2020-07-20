<?php
namespace MyMvc;
use PDO;

class Requests
{
    private static $table;

    public static function SelectAll() : array
    {
        $req = "SELECT * FROM " . Self::$table;
        $res = Self::getLink()->prepare($req);
        $res->execute();
        $res = $res->fetchall();
        return ($res);
    }

    public static function Insert($_array)
    {
        $req = "INPUT INTO " . Self::$table . " VALUES ( ";
        foreach($_array as $value)
        {
            if(!is_numeric($value))
            {
                $value = addslashes($value);
                $value = "'" . $value . "'";
            }
            else if($value == '') { $value = 'NULL'; }
            $req .= $value . ', ';
            var_dump($value);
        }
        var_dump($req);
    }

    public static function getTable() { return Self::$table; }

    public static function setTable($_t) { Self::$table = $_t; }

    private static function getLink() { return Connection::getInstance()->getConnection(); }
}