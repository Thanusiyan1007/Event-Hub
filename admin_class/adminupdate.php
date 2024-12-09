<?php
require '../classes/Dbconnector.php';
require '../classes/Admin.php';

use classes\Dbconnector;
use classes\Admin;

$dbcon = new Dbconnector();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $con = $dbcon->getConnection();

        $fullname = $_POST["name"];
        $email = $_POST["Email"];
        $username = $_POST["username"];
        $nic = $_POST["nic"];
        $phonenumber = $_POST["phonenumber"];


        $admin = new Admin($fullname, $email, $username, '', $nic, $phonenumber, 'admin');
        
        // Set the user's ID if you have it (e.g., from a session)
        // $admin->setId($_SESSION['user_id']);

        // Update the user's profile
        $query = "UPDATE user SET FullName=?, Email=?, Username=?, NIC=?, PhoneNumber=? WHERE role='admin'";
        $pstmt = $con->prepare($query);
        $pstmt->bindValue(1, $admin->getFullname());
        $pstmt->bindValue(2, $admin->getEmail());
        $pstmt->bindValue(3, $admin->getUsername());
        $pstmt->bindValue(4, $admin->getNic());
        $pstmt->bindValue(5, $admin->getPhonenumber());
        $pstmt->execute();

        if ($pstmt->rowCount() > 0) {
            // Profile updated successfully
            header("Location: Profile.php");
            exit();
        } else {
            // Handle the case where no rows were affected (no changes made)
            echo "No changes were made to the profile.";
        }
    } catch (PDOException $exc) {
        echo "Error: " . $exc->getMessage();
    }
} else {
    // Handle the case where the form was not submitted
    echo "Form not submitted.";
}
?>
