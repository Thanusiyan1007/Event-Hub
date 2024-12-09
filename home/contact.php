<?php
require './classes/dbconnector.php';
use classes\dbconnector;
$dbcon=new dbconnector();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if (isset($_POST["name"], $_POST["email"], $_POST["phone"], $_POST["message"])) {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $message = $_POST["message"];
        }
        
        try {
    $con=$dbcon->getconnection();
    $query="INSERT INTO contact(name,email,phone,message) VALUES(?,?,?,?)";
    $pstmt=$con->prepare($query);
    $pstmt->bindValue(1, $name);
    $pstmt->bindValue(2, $email);
    $pstmt->bindValue(3, $phone);
    $pstmt->bindValue(4, $message);
    $pstmt->execute();
    if (($pstmt->rowCount())>0) {
        echo "<script>alert('succesfully send');</script>";
        echo "<script>window.location.href='home.php'</script>";
    }else {
     echo "<script>alert('failed');</script>";
        echo "<script>window.location.href='home.php'</script>";
 }
    
} catch (PDOException $exc) {
    echo $exc->getMessage();
}
?>
    </body>
</html>
