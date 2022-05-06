<?php
session_start();
require 'conn.php';
$catid=$_GET['id'];

$sql2="select categoryName from category where categoryID='$catid';";
$result=mysqli_query($conn,$sql2);
$row=mysqli_fetch_assoc($result);
$sql="delete from category where categoryID='$catid';";
mysqli_query($conn,$sql);
$id=$_SESSION['id'];
$name=$row['categoryName'];
$action="Category: ".$name." was deleted";
$sql3="insert into action values ('$action','$id',CURRENT_DATE());";
mysqli_query($conn,$sql3);
header("Location: categories.admin.php?category=deleted");
exit();