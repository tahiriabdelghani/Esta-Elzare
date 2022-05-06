<?php
session_start();
require("conn.php");
$id=$_SESSION['id'];
$sql = "select password from client where clientID='$id';";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$password=$_POST['password'];
$newPassword=$_POST['newpwd'];
$reNewPassword=$_POST['renewpwd'];

if (empty($newPassword) || empty($reNewPassword) || empty($password))  {
    header("Location: editpwd.php?error=emptyField");
    exit();
}
else {
    $pwdCheck = password_verify($password, $row['password']);
    if ($pwdCheck == false) {
        header ("Location: editpwd.php?error=wrongPassword");
        exit();
    }
    else if ($newPassword !== $reNewPassword) {
    header("Location: editpwd.php?error=passwordMatchNot");
    exit();
    }
    else {
        $hashedpwd = password_hash($newPassword, PASSWORD_DEFAULT);
        $sql2="update client set password='$hashedpwd' where clientID='$id';";
        mysqli_query($conn,$sql2);
        header("Location: editpwd.php?password=updated");
    exit();
    }

}