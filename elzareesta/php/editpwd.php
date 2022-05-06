<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>EDIT PASSWORD</title>
	<link rel="stylesheet" href="../css/editprofile.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>
<body>
	<div class="center">
	<div class="logo"><a href="index.php"><img width="210px" src="../images/esta.jpg" alt=""></a></div>
	<div class="header">Edit password</div>	
    <form action="editpwd.inc.php" method="POST">
        <input type="password" name="password" placeholder="Current password">
        <input type="password" name="newpwd" placeholder="New password">
        <input type="password" name="renewpwd" placeholder="Re-New password">
        <input type="submit" value="Save">
    </form>
	</div>	
</body>
</html>