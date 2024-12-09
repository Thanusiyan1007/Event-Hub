<?php

namespace classes;

use PDO;
use PDOException;

class Dbconnector {

    private static $host = "localhost";
    private static $dbname = "eventhub (1)";
    private static $dbuser = "root";
    private static $dbpwd = "";

    public static function getConnection() {
        try {
            $dsn = "mysql:host=" . self::$host . ";dbname=" . self::$dbname;
            $con = new PDO($dsn, self::$dbuser, self::$dbpwd);
            return $con;
        } catch (PDOException $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
