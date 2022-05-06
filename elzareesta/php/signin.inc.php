<?php
include_once "conn.php";

$email = $_POST['email'];
$password = $_POST['password'];
if (empty($email) || empty($password)) {
    header("Location: signin.php?error=emptyField");
    exit();
}
else {
    $sql = "select *from client where email=?";
    $statement = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($statement, $sql)) {
        header("Location signin.php?error=sqlError");
        exit();
    }
    else {
        mysqli_stmt_bind_param($statement, "s", $email);
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        if ($row = mysqli_fetch_assoc($result)) {
            $pwdCheck = password_verify($password, $row['password']);
            if ($pwdCheck == false) {
                header ("Location: signin.php?error=wrongPassword");
            } else {
                session_start();
                $_SESSION['id']=$row['clientID'];
                $_SESSION['email']=$row['email'];
                header("Location: index.php?login=success");
                exit();
            }
        }

        else  {
            header("Location: signin.php?error=noUser");
            exit();
        }
    }

}