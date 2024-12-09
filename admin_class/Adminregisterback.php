<?php

require_once '../classes/Admin.php';
require_once '../classes/Dbconnector.php';

use classes\Admin;
use classes\Dbconnector;

if (isset($_POST["Fullname"], $_POST["username"], $_POST["email"], $_POST["password"], $_POST["NIC"], $_POST["Phone"])) {
    if (empty($_POST["Fullname"]) || empty($_POST["username"]) || empty($_POST["email"]) || empty($_POST["password"]) || empty($_POST["NIC"]) || empty($_POST["Phone"])) {
        $location = "Register.php?status=1";
    } else if (strlen($_POST["NIC"]) < 12) {
        $location = "Register.php?status=4";
    } else if (strlen($_POST["Phone"]) < 10) {
        $location = "Register.php?status=5";
    } else {
        $fullname = $_POST["Fullname"];
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = password_hash($_POST["password"], PASSWORD_BCRYPT);
        $nic = $_POST["NIC"];
        $phonenumber = $_POST["Phone"];
        $role = "admin";
        $user = new Admin($fullname, $email, $username, $password, $nic, $phonenumber, $role);
        if ($user->register(Dbconnector::getConnection())) {
            $location = "Register.php?status=2";
        } else {
            $location = "Register.php?status=3";
        }
    }
} else {
    $location = "Register.php?status=0";
}
header("Location:" . $location);