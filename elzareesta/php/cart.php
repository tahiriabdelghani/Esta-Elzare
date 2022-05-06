<?php
session_start();
if (isset($_SESSION['id'])){
require 'conn.php';
$id=$_SESSION['id'];
$sql="select *from cart where clientID= '$id';";
$result = mysqli_query($conn,$sql);

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>MY CART</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/cart.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		.signout{
			position: absolute;
	right:40px;
	top:34px;
	width: 100px;
	height: 40px;
	font-weight:bold;
	/* margin-left:30px; */
		}
		nav ul{
			margin-top:-15px; 
			margin-right:280px;

		}
		.signout:hover{
			background: aqua;
	        border: white solid;
		}
	</style>
</head>

<body>
	<nav >
		<img style="margin-left:20px;margin-top:8px; width:200px; height:auto;" src="../images/estaelzarelogo.png" class="logo">
    <form class="sf" action="search.client.php" method="POST">
		<input type="text" placeholder="Search for products Here" name="search" 
		style="width:700px;margin-top:10px">
        <button type="submit" style="width: 100px;margin-top: 10px;font-weight: bold;">Search</button>
	</form>
	
        <a href="profile.php"><input type="button" name="pop" value="My Profile" class="movme" style="font-weight: bold;"></a>
	        <form action="signout.inc.php">
          
              <input class="signout" type="submit" value="Sign out">
          
            </form>
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="categories.client.php">Categories</a></li>
		<li><a href="cart.php">My Cart</a></li>
		<li><a href="mycommands.php">My COMMANDS</a></li>
		<li><a href="#Lnaguages">Languges</a></li>
		<li><a href="about.client.php">About</a></li>
	</ul>
	
</nav>
<fieldset style="height:auto; margin-top:50px; border-radius: 20px; border:solid;" class="fieldset1">
<section class="sec">
    <?php if (mysqli_num_rows($result) > 0 )
	:?>
	<h2 style="color: #333; margin-top:-20px; margin-bottom:20px">Here Is Your Cart</h2>
	<a href="cartform.php?"><button style="height:50px; width:110px; float:right; margin-top:-55px; margin-right:20px;">BUY</button></a>
	
	
    
	
	<?php $Total=0; foreach ($result as $product) :
		$sql2="select productID, productName, discountPrice, img1 from product where productID=".$product['productID'];	
		$result2=mysqli_query($conn,$sql2);
        $row2 = mysqli_fetch_assoc($result2);
		$Total+=$product['unitTotal'];
		// $row = mysqli_fetch_assoc($product);
	?>
    <div style="display:inline-block; margin:5px;" class="productt">
    <img style=" width: 220px;" src=<?=$row2['img1']?>>
	<form action="quantity.php?cart_id=<?=$product['cartID']?>&pro_id=<?=$row2['productID']?>" method="POST">
	Quantity: <input style="width:40px; margin-left:30px;" type="number" name="quantity" value="<?=$product['quantity']?>" class="quantity">
	<input type="submit" value="Go">
    </form>
	<h3 style="margin-left:-25px;"><?=$product['unitTotal'] ?> DH</h3>
<section class="sec1">

    <form action="remove.php?id=<?=$product['cartID']?>" method="POST">
    <input style="margin-left:15px;" type="submit" name="h" value="remove">
	</form>
</section>
</div>
	<?php endforeach ?>
	<h2 style="color: #333; float:right; margin-top:-45px; margin-right:150px;">Total: <?=$Total?> DH</h2>
            <?php else  :?>
                <h1 style="color: #333; margin-top:-20px; float:left; margin-bottom:20px">Your Cart Is Empty.</h1>
            <?php endif ?>


</section>

</fieldset>
	
	
</br>
</br>
</br>
<footer>
  <div class="footer-content">
  	<h3>Esta Elzare</h3>
   <p> Share Our Page With Your Friends </p>
 <ul class="socials">
 	<li><a href="#"><i class="fa fa-facebook" name="fb"></i></a></li>
 	<li><a href="#"><i class="fa fa-twitter" name="fb"></i></a></li>
 	<li><a href="#"><i class="fa fa-youtube" name="fb"></i></a></li>
 	<li><a href="#"><i class="fa fa-instagram" name="fb"></i></a></li>
 	</ul>
 </div>
<div class="footer-bottom">
	<p>Copyright &copy; 2021 ALL Right Reserved For  <span>Esta Elzare</span>  &reg; Team</p>

</footer>
	
</body>
</html>