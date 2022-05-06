<?php
require("conn.php");

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
if (empty($name) || empty($email) || empty($password) || empty($repassword) ) {
    header("Location: signup.php?error=emptyField&name=".$name."&email=".$email);
    exit();
}
else if (!filter_var($email,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9 .]+$/", $name)) {
    header("Location: signup.php?error=invalidEmailAndName");
    exit();
}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: signup.php?error=invalidEmail&name=".$name);
    exit();
}
else if (!preg_match("/^[a-zA-Z0-9]*$/", $name)) {
    header("Location: signup.php?error=invalidName&email=".$email);
    exit();
}
else if ($password !== $repassword) {
    header("Location: signup.php?error=passwordMatchNot&name=".$name."&email=".$email);
    exit();
}
else {
    $sql="select email from client where email=?";
    $statement = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($statement, $sql)) {
        header("Location: signup.php?error=sqlError");
        exit();
    }
    else {
        mysqli_stmt_bind_param($statement, "s", $email);
        mysqli_stmt_execute($statement);
        mysqli_stmt_store_result($statement);
        $resultCheck = mysqli_stmt_num_rows($statement);
        if ($resultCheck > 0) {
            header("Location: signup.php?error=emailTaken&name=".$name);
            exit();
        }
        else {
            $sql = "insert into client (clientName,email,password,registrationDate,type) values (?,?,?,CURRENT_DATE(),0)";
            $statement = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($statement, $sql)) {
            header("Location: signup.php?error=sqlError");
            exit();
            }
            else {
                $hashedpwd = password_hash($password, PASSWORD_DEFAULT);

                mysqli_stmt_bind_param($statement, "sss", $name, $email, $hashedpwd);
                mysqli_stmt_execute($statement);
                header("Location: signup.php?signup=success");
                exit();
            }
        }
    }
}




















// $sql = "insert into client (clientName,email,password) values ('$name','$email','$password');";


// mysqli_query($conn, $sql);
// header ("Location: welcome.html?signup=success");
