<?php
session_start();
require 'conn.php';
$cartID=$_GET['cart_id'];
$pro_id=$_GET['pro_id'];
$quantity=$_POST['quantity'];

$sql2="select discountPrice from product where productID='$pro_id';";
$result2=mysqli_query($conn,$sql2);
$row2=mysqli_fetch_assoc($result2);
$unitTotal=$row2['discountPrice']*$quantity;
$sql="update cart set quantity ='$quantity', unitTotal='$unitTotal' where cartID='$cartID';";
mysqli_query($conn,$sql);
header("Location: cart.php");
exit();