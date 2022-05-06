<?php
session_start();
if (isset($_SESSION['id'])){
require("conn.php");
$id=$_SESSION['id'];
$sql = "select clientName, email,registrationDate from client where clientID='$id'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MY PROFILE</title>
	<link rel="stylesheet" href="../css/profile.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>
<body>
	<div style="width:600px" class="center">
	<div class="logo"><a href="index.php"><img style="margin-left:180px;" width="210px" src="../images/esta.jpg" alt=""></a></div>
	<div class="header">My profile</div>	
    <ul style="list-style: none;">
    <br>
	<li>
        <h4> Name &nbsp <i class="fa fa-user"></i> : &nbsp&nbsp&nbsp&nbsp&nbsp<label><?= $row['clientName'] ?></label></h4>
        <a  href="editname.php"><button style="margin-left:0px; float:right;" class="editname">Edit</button></a>
        
    </li>
	</br><br><br>
	<li>
        <h4>Email &nbsp <i class="fa fa-at"></i> : &nbsp&nbsp&nbsp<label><?= $row['email'] ?></label></h4>
        <a  href="editemail.php"><button style="margin-left:0px; float:right;" class="editemail">Edit</button></a>
    </li>
	</br><br><br>
	<li>
        <h4>Registration Date &nbsp <i class="fa fa-user-clock"></i> : &nbsp&nbsp&nbsp<label><?= $row['registrationDate'] ?> (YYYY/MM/DD)</label></h4>
    </li>
    <br>
    <a href="editpwd.php"><button style="margin-left:190px; margin-top:20px;" class="editpwd">Edit password</button></a>
    <a href="deleteacc.php"><button class="deleteacc">Delete account</button></a>
    <style>
    .center .deleteacc {
    margin-left: 160px;
    margin-top: 20px;
    width: 200px;
    padding: 10px 20px;
    border: 0px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 17px;
    color: white;
    background-color:#da1313;

    }
    .center .deleteacc:hover{
    background-color: #ee4141;
    }
    </style>
    <br>
    </ul>
	</div>	
</body>
</html>