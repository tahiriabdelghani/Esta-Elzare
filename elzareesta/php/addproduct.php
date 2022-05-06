<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ADD PRODUCT</title>
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
	<div style="display:inline;" >Add product</div>
	<a href="products.admin.php"><button class="goback">Go back</button></a>
    </div>	

    <form action="addproduct.inc.php" method="POST">
        <input type="text" name="productname" placeholder="Product name">
        <input type="text" name="categoryname" placeholder="Category name">
        <input type="text" name="img1" placeholder="Image 1 URL">
        <input type="text" name="img2" placeholder="Image 2 URL">
        <input type="text" name="color" placeholder="Product color">
        <input type="text" name="size" placeholder="Product size">
        <input type="text" name="price" placeholder="Price in MAD">
        <input type="text" name="discountprice" placeholder="Discount price in MAD">
        <input type="text" name="discount" placeholder="Discount in %">
        <input type="submit" value="Save">
    </form>
	</div>	
</body>
</html>