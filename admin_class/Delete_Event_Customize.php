<?php
require '../classes/Dbconnector.php';

use classes\Dbconnector;
$dbcon = new Dbconnector();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $id=$_GET["id"];
        try {
                $con = $dbcon->getConnection();
                $query = "DELETE FROM events WHERE EventID=?";
                $pstmt = $con->prepare($query);
                $pstmt->bindValue(1, $id);
                $pstmt->execute();
                if($pstmt->rowCount() > 0){
                    header("Location: EventManagement.php");
                    
                }
            } catch (PDOException $exc) {
                echo $exc->getMessage();
            }

        ?>
    </body>
</html>