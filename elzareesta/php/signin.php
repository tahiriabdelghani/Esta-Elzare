<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign-in</title>
	<link rel="stylesheet" href="../css/signin.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>
<body>
	<div class="center">
	<div class="logo"><a href="index.php"><img width="210px" src="../images/esta.jpg" alt=""></a></div>
	<div class="header">Sign-in</div>	
	<form action="signin.inc.php" method="POST">
	<?php
        if(isset($_GET['error'])){
                if ($_GET['error']=='emptyField') {
                    echo '<p class="signinerror">Fill in all the fields! </p>';
                }
                else if ($_GET['error']=='wrongPassword') {
                    echo '<p class="signinerror">Password is wrong!</p>';
                }
                else if ($_GET['error']=='noUser') {
                    echo '<p class="signinerror">Wrong e-mail adresse!</p>';
                }
        }
        ?>
		<input name="email"  type="text" placeholder="E-mail">
		<i class="far fa-envelope"></i>
		<input name="password" id="pswrd" type="password" placeholder="Password">
		<i class="fas fa-lock" onclick="show()"></i>
		<input type="submit" value="Sign in">
		<a href="">Forgot Password?</a>
		<!-- <a href="/html/signup.html"><button>Create account</button></a> -->
		<div class="signup">
			<li><a href="signup.php">Create account</a></li>
		</div>

	</form>	
	</div>	
</body>
</html>