<?php
namespace classes;
use PDO;
use PDOException;

class dbconnector {

    private $host ="localhost";
    private $dbname = "eventhub (1)";
    private $dbuser = "root";
    private $dbpw = "";

    public function getconnection() {
        $dsn = "mysql:host=$this->host;dbname=$this->dbname";
        try {
            $con= new PDO($dsn, $this->dbuser, $this->dbpw);
            return $con;
        } catch (PDOException $exc) {
            die("ERROR".$exc->getMessage());
        }
            
    }

}

