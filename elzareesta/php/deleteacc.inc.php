<?php
session_start();
require("conn.php");
$id=$_SESSION['id'];
$sql = "select password from client where clientID='$id';";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$password=$_POST['password'];

if (empty($password)){
    header("Location: deleteacc.php?error=emptyField");
    exit();
}
else {
    $pwdCheck = password_verify($password, $row['password']);
    if ($pwdCheck == false) {
        header ("Location: editpwd.php?error=wrongPassword");
        exit();
    }
    else{
        $sql2="delete from client where clientID='$id';";
        mysqli_query($conn,$sql2);
        session_start();
        session_unset();
        session_destroy();
        header("Location: index.php?account=deleted");
    exit();

    }
}