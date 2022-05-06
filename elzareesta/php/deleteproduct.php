<?php
session_start();
require 'conn.php';
$proid=$_GET['id'];

$sql2="select productName from product where productID='$proid';";
$result=mysqli_query($conn,$sql2);
$row=mysqli_fetch_assoc($result);
$sql="delete from product where productID='$proid';";
mysqli_query($conn,$sql);
$id=$_SESSION['id'];
$name=$row['productName'];
$action="Product: ".$name." was deleted";
$sql3="insert into action values ('$action','$id',CURRENT_DATE());";
mysqli_query($conn,$sql3);
header("Location: products.admin.php?product=deleted");
exit();