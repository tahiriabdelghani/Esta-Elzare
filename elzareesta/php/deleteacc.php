<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Delete account</title>
	<link rel="stylesheet" href="../css/editprofile.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>
<body>
	<div class="center">
	<div class="logo"><a href="index.php"><img width="210px" src="../images/esta.jpg" alt=""></a></div>
	<div class="header">DELETE ACCOUNT</div>	
    <form action="deleteacc.inc.php" method="POST">
        <input type="password" name="password" placeholder="Password">
        <button class="delete" type='submit'>Delete</button>

    </form>
    <style>
    .delete {
    margin-left: 83px;
    margin-top: 25px;
    margin-bottom:15px;
    width: 200px;
    padding: 10px 20px;
    border: 0px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 17px;
    color: white;
    cursor:pointer;
    background-color:#da1313;
    }
    .delete:hover{
    background-color:  #ee4141;
    }
    </style>
	</div>	
</body>
</html>