<?php
session_start();
require 'conn.php';
$pro_id=$_GET['pro_id'];
$id=$_SESSION['id'];
$q=$_GET['q'];
$adresse=$_POST['adresse'];
$cardNum=$_POST['cardnumber'];
$cardtype=$_POST['usercard'];
$firstName=$_POST['fname'];
$lastName=$_POST['lname'];
$email=$_POST['email'];
$exprDate=$_POST['expdate'];

$sql2="select discountPrice from product where productID='$pro_id';";
$result2=mysqli_query($conn,$sql2);
$row2=mysqli_fetch_assoc($result2);
$totalprice=$row2['discountPrice']*$q;
$sql="insert into command (productID,quantity,totalprice,clientID,firstName,lastName,email,adresse,commandeDate,cardNumber,cardType,exprDate) values ('$pro_id','$q','$totalprice','$id','$firstName','$lastName','$email','$adresse',CURRENT_DATE(),'$cardNum','$cardtype','$exprDate');";
mysqli_query($conn,$sql);
header("Location: product.client.php?id=$pro_id");
exit();