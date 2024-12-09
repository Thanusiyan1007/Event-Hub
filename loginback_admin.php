<?php
session_start();

require_once './classes/Admin.php';
require_once './classes/Dbconnector.php';

use classes\Admin;
use classes\Dbconnector;

if (isset($_POST["username"], $_POST["password"])) {
    if (empty($_POST["username"]) || empty($_POST["password"])) {
        $location = "login.php?status=1";
    } else {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $user = new Admin(null, null, $username, $password, null, null, null);
        if($user->authenticate(Dbconnector::getConnection())){
            $_SESSION["user"] = serialize($user);
            $location = "./admin_class/dashboard.php";
        } else {
            $location = "login.php?status=2";
        }
    }
} else {
    $location = "login.php?status=0";
}

header("Location:" . $location);
