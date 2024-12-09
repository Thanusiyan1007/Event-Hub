<?php
session_start();

require_once '../classes/user.php';

use classes\user;

$user = unserialize($_SESSION["user"]);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../style.css">
        <title></title>
    </head>
    <body>
        <div class="form-container">
            <div>
                <h2>Welcome,<?=$user->getUsername()?></h2>
                <br>
                <button class="btn">SignOut</button>
            </div>
        </div>
    </body>
</html>
