<?php

namespace classes;

use PDOException;
use PDO;

class Delar {

    private $id;
    private $fullname;
    private $username;
    private $email;
    private $password;
    private $nic;
    private $phonenumber;
    private $businesstype;
    private $role;

    public function __construct($fullname,  $email,$username, $password, $nic, $phonenumber,$businesstype, $role) {
        $this->fullname = $fullname;
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
        $this->nic = $nic;
        $this->phonenumber = $phonenumber;
        $this->businesstype=$businesstype;
        $this->role = $role;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function getFullname() {
        return $this->fullname;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getNic() {
        return $this->nic;
    }

    public function getPhonenumber() {
        return $this->phonenumber;
    }
    
    public function getbusinesstype() {
        return $this->businesstype;
    }

    public function getRole() {
        return $this->role;
    }

    public function register($con) {
        try {
            $query = "INSERT INTO user(FullName,Email,Username,Password,NIC,PhoneNumber,BusinessType,role) VALUES (?,?,?,?,?,?,?,?)";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $this->fullname);
            $pstmt->bindValue(2, $this->email);
            $pstmt->bindValue(3, $this->username);
            $pstmt->bindValue(4, $this->password);
            $pstmt->bindValue(5, $this->nic);
            $pstmt->bindValue(6, $this->phonenumber);
            $pstmt->bindValue(7, $this->businesstype);
            $pstmt->bindValue(8, $this->role);
            $pstmt->execute();
            return ($pstmt->rowCount() > 0);
        } catch (PDOException $exc) {
            die("Error in user class's register function: " . $exc->getMessage());
        }
    }

    public function authenticate($con) {
        try {
            $query = "SELECT * FROM user WHERE Username = ?";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $this->username);
            $pstmt->execute();
            $rs = $pstmt->fetch(PDO::FETCH_OBJ);
            if (!empty($rs)) {
                $db_password = $rs->Password;
                if (password_verify($this->password, $db_password)) {
                    $this->id = $rs->id;
                    $this->fullname = $rs->FullName;
                    $this->email = $rs->Email;
                    $this->nic = $rs->NIC;
                    $this->phonenumber = $rs->PhoneNumber;
                    $this->role = $rs->role;
                    $this->password = null;
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } catch (PDOException $exc) {
            die("Error in user class's authencicate function: " . $exc->getMessage());
        }
    }

}
