<?php
session_start();
require 'conn.php';
$id=$_SESSION['id'];
$proid=$_GET['id'];

$sql="delete from cart where cartID='$proid' and clientID='$id';";
mysqli_query($conn,$sql);
header("Location: cart.php?product=deleted");
exit();