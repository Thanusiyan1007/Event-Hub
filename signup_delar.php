<?php

require_once './classes/Delar.php';
require_once './classes/Dbconnector.php';

use classes\Delar;
use classes\Dbconnector;

if (isset($_POST["Fullname"], $_POST["username"], $_POST["email"], $_POST["password"], $_POST["NIC"], $_POST["Phone"],$_POST["businesstype"])) {
    if (empty($_POST["Fullname"]) || empty($_POST["username"]) || empty($_POST["email"]) || empty($_POST["password"]) || empty($_POST["NIC"]) || empty($_POST["Phone"]) || empty($_POST["businesstype"])) {
        $location = "registation_delar.php?status=1";
    }else if (strlen($_POST["NIC"]) < 12) {
        $location = "registation_delar.php?status=4";
    } else if (strlen($_POST["Phone"]) < 10) {
        $location = "registation_delar.php?status=5";
    }else {
        $fullname = $_POST["Fullname"];
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = password_hash($_POST["password"], PASSWORD_BCRYPT);
        $nic = $_POST["NIC"];
        $phonenumber = $_POST["Phone"];
        $businessType = $_POST["businesstype"];
        $role = "business";
        $user = new Delar($fullname, $email, $username, $password, $nic, $phonenumber,$businessType,$role);
        if($user->register(Dbconnector::getConnection())){
            $location = "registation_delar.php?status=2";
        } else {
            $location = "registation_delar.php?status=3";
            
        }
    }
} else {
    $location = "registation_delar.php?status=0";
}
header("Location:" . $location);