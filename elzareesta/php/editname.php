<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>EDIT NAME</title>
	<link rel="stylesheet" href="../css/editprofile.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>
<body>
	<div class="center">
	<div class="logo"><a href="index.php"><img width="210px" src="../images/esta.jpg" alt=""></a></div>
    <div class="header">Edit name</div>	
    <form action="editname.inc.php" method="POST">
        <input type="text" name="newname" placeholder="New name">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" value="Save">
    </form>
	</div>	
</body>
</html>