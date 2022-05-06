<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign-up</title>
    <link rel="stylesheet" href="../css/signup.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>

<body>
    <div class="center">
        <div class="logo"><a href="index.php"><img width="210px" src="../images/esta.jpg" alt=""></a></div>
        <div class="header">CREATE ACCOUNT</div>
        <form action="signup.inc.php" method="POST">
        <?php
        if(isset($_GET['error'])){
                if ($_GET['error']=='emptyField') {
                    echo '<p class="signuperror">Fill in all the fields! </p>';
                }
                else if ($_GET['error']=='invalidEmailAndName') {
                    echo '<p class="signuperror">Invalid name and e-mail!</p>';
                }
                else if ($_GET['error']=='invalidEmail') {
                    echo '<p class="signuperror">Invalid e-mail!</p>';
                }
                else if ($_GET['error']=='invalidName') {
                    echo '<p class="signuperror">Invalid name!</p>';
                }
                else if ($_GET['error']=='passwordMatchNot') {
                    echo '<p class="signuperror">Passwords did not match!</p>';
                }
                else if ($_GET['error']=='emailTaken') {
                    echo '<p class="signuperror">E-mail is already taken!</p>';
                }
                
        }
        else if (isset($_GET['signup'])) {
                if ($_GET['signup']=='success') {
                    echo '<p class="signupsuccess">Your account is created!</p>';
                }
        }
        ?>
            <input type="text" name="name" placeholder="Name">
            <i class="fas fa-user"></i>
            <input type="text" name="email" placeholder="E-mail">
            <i class="far fa-envelope"></i>
            <input id="pswrd" name="password" type="password" placeholder="Password">
            <i class="fas fa-lock" onclick="show()"></i>
            <input id="rpswrd" name="repassword" type="password" placeholder="Confirm Password">
            <i class="fas fa-lock" onclick="show()"></i>
            <input type="submit" value="create account">
            <a href="signin.php"><input class="signin" type="button" value="Sign in"></a>
        </form>
    </div>
<style>
.signin{
    margin-bottom:15px;
    margin-top:-15px;
    margin-left:80px;
    width:180px;
}
.signin:hover{
    cursor:pointer;
}
.center{
    padding-bottom:300px;
}
</style>

</body>

</html>