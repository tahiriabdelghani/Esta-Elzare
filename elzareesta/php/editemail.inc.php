<?php
session_start();
require("conn.php");
$id=$_SESSION['id'];
$sql = "select password from client where clientID='$id';";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$password=$_POST['password'];
$newEmail=$_POST['newemail'];

if (empty($newEmail) || empty($password))  {
    header("Location: editemail.php?error=emptyField");
    exit();
}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: editemail.php?error=invalidEmail");
    exit();
}
else  {
    $sql2="select email from client where email='$newEmail' and clientID!='$id';";
    $result2 = mysqli_query($conn,$sql2);
    $row2=mysqli_fetch_assoc($result2);
    if (mysqli_num_rows($row2) > 0) {
        header("Location: editemail.php?error=emailTaken");
        exit();
    }
    else{
        $pwdCheck = password_verify($password, $row['password']);
        if ($pwdCheck == false) {
            header ("Location: editemail.php?error=wrongPassword");
            exit();
            } 
        else {
        $sql3="update client set email='$newEmail' where clientID='$id'";
        mysqli_query($conn,$sql3);
        header ("Location: editemail.php?email=updated");
        exit();
        }
    }
}
