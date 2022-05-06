<?php 
require("conn.php");
$sql = "select *from product where productID= ?;";
$statement = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($statement,$sql)){
        echo "sql stmt failed";
    }else{
        mysqli_stmt_bind_param($statement, "i", $_GET['id']);
        mysqli_stmt_execute($statement);
        $result=mysqli_stmt_get_result($statement);
        $row=mysqli_fetch_assoc($result);
    }
$sql2 = "select categoryName from category where categoryID= ?;";
$statement2 = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($statement2,$sql2)){
        echo "sql stmt failed";
    }else{
        mysqli_stmt_bind_param($statement2, "i", $row['categoryID']);
        mysqli_stmt_execute($statement2);
        $result=mysqli_stmt_get_result($statement2);
        $row2=mysqli_fetch_assoc($result);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>EDIT PRODUCT</title>
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
	<div style="display:inline;" >Edit product</div>
	<a href="products.admin.php"><button class="goback">Go back</button></a>
    </div>	

    <form action="editproduct.inc.php" method="POST">
        <input type="text" name="productname" value="<?=$row['productName']?>" placeholder="Product name">
        <input type="text" name="categoryname" value="<?= $row2['categoryName'] ?>" placeholder="Category name">
        <input type="text" name="img1" value='<?=(string)$row['img1']?>' placeholder="Image 1 URL">
        <input type="text" name="img2" value='<?=(string)$row['img2']?>' placeholder="Image 2 URL">
        <input type="text" name="color" value="<?=$row['color']?>" placeholder="Product color">
        <input type="text" name="size" value="<?=$row['size']?>" placeholder="Product size">
        <input type="text" name="price" value="<?=$row['price']?>" placeholder="Price in MAD">
        <input type="text" name="discountprice" value="<?=$row['discountPrice']?>" placeholder="Discount price in MAD">
        <input type="text" name="discount" value="<?=$row['discount']?>" placeholder="Discount in %">
        <input type="hidden" name="id" value="<?= $row['productID'] ?>" >
        <input type="submit" value="Save">
    </form>
	</div>	
</body>
</html>