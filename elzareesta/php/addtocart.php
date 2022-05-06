<?php
session_start();
require 'conn.php';
$pro_id=$_GET['pro_id'];
$id=$_SESSION['id'];
$quantity=$_POST['quantity'];
$sql2="select discountPrice from product where productID='$pro_id';";
$result2=mysqli_query($conn,$sql2);
$row2=mysqli_fetch_assoc($result2);
$unitTotal=$row2['discountPrice']*$quantity;
if (isset($_POST['addtocart'])){
$sql="insert into cart (productID,quantity,unitTotal,clientID) values ('$pro_id','$quantity','$unitTotal','$id');";
mysqli_query($conn,$sql);
header ("Location: product.client.php?id=".$pro_id."&cart=updated");
exit();
}
else if (isset($_POST['buy'])){
    // $adresse=$_POST['adresse'];
    header("Location: form.php?pro_id=$pro_id&q=$quantity");
    exit();

}