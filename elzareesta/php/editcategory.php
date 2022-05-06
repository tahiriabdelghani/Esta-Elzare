<?php 
require("conn.php");
$sql = "select *from category where categoryID= ?;";
$statement = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($statement,$sql)){
        echo "sql stmt failed";
    }else{
        mysqli_stmt_bind_param($statement, "i", $_GET['id']);
        mysqli_stmt_execute($statement);
        $result=mysqli_stmt_get_result($statement);
        $row=mysqli_fetch_assoc($result);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>EDIT CATEGORY</title>
	<link rel="stylesheet" href="../css/add.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <style>
		.goback{
    margin-left:300px;
	width: 100px;
	height: 45px;
	color: white;
    cursor: pointer;
    font-size: 20px;
	line-height: 45px;
	border-radius: 45px;
	border-radius: 5px;
	background: #171c24;
}
.goback:hover{
  background: #3A3B3C;
}
form input[type='submit']{
	background: #171c24;
}
form input[type='submit']:hover{
	background: #3A3B3C;
}
	</style>
</head>
<body>
	<div class="center">
	<div class="logo"><a href="index.php"><img width="210px" src="../images/esta.jpg" alt=""></a></div>
    <div class="header">
	<div style="display:inline;">Edit category</div>
    <a href="categories.admin.php"><button class="goback">Go back</button></a>
    </div>
    <form action="editcategory.inc.php" method="POST">
        <input type="text" name="categoryname" value="<?=$row['categoryName']?>" placeholder="Product name">
        <input type="text" name="description" value="<?= $row['description'] ?>" placeholder="Description">
        <input type="hidden" name="id" value="<?= $row['categoryID'] ?>" >
        <input type="submit" value="Save">
    </form>
	</div>	
</body>
</html>