<?php
session_start();
require("conn.php");
$id=$_SESSION['id'];
$sql = "select password from client where clientID='$id'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$password=$_POST['password'];
$newName=$_POST['newname'];

if (empty($newName) || empty($password))  {
    header("Location: editname.php?error=emptyField");
    exit();
}
else if (!preg_match("/^[a-zA-Z0-9]*$/", $newName)) {
    header("Location: editname.php?error=invalidName");
    exit();
}
else {
    $pwdCheck = password_verify($password, $row['password']);
        if ($pwdCheck == false) {
                header ("Location: editname.php?error=wrongPassword");
                exit();
        } 
        else {
            $sql2="update client set clientName='$newName' where clientID='$id'";
            mysqli_query($conn,$sql2);
            header ("Location: editname.php?name=updated");
            exit();
        }
}
