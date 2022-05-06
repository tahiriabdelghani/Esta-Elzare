<?php
session_start();
require 'conn.php';
$id=$_SESSION['id'];
$adresse=$_POST['adresse'];
$cardNum=$_POST['cardnumber'];
$cardtype=$_POST['usercard'];
$firstName=$_POST['fname'];
$lastName=$_POST['lname'];
$email=$_POST['email'];
$exprDate=$_POST['expdate'];
$sql2="select *from cart where clientID='$id';";
$result2=mysqli_query($conn,$sql2);
foreach ($result2 as $command){
// $row2=mysqli_fetch_assoc($result2);
$pro_id=$command['productID'];
$q=$command['quantity'];
$totalprice=$command['unitTotal'];

$sql="insert into command (productID,quantity,totalprice,clientID,firstName,lastName,email,adresse,commandeDate,cardNumber,cardType,exprDate) values ('$pro_id','$q','$totalprice','$id','$firstName','$lastName','$email','$adresse',CURRENT_DATE(),'$cardNum','$cardtype','$exprDate');";
mysqli_query($conn,$sql);
}
$sql3="delete from cart where clientID='$id';";
mysqli_query($conn,$sql3);
header("Location: cart.php");
exit();