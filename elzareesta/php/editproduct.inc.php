<?php
session_start();
require("conn.php");
$productName = $_POST['productname'];
$categoryName = $_POST['categoryname'];
$productID= (int)$_POST['id'];
$img1 =(string) $_POST['img1'];
$img2 = (string)$_POST['img2'];
$color = $_POST['color'];
$size = $_POST['size'];
$price = (int)$_POST['price'];
$discountPrice = (int)$_POST['discountprice'];
$discount = (int)$_POST['discount'];
if (empty($productName) || empty($categoryName) || empty($img1) || empty($img2) || empty($color) || empty($size) || empty($price) || empty($discountPrice) || empty($discount) ) {
    header("Location: addproduct.php?error=emptyField");
    exit();
}
else if ($categoryName != 'Men' && $categoryName != 'Women' && $categoryName != 'Boys' && $categoryName != 'Girls' && $categoryName != 'Babies' ) {
    header("Location: addproduct.php?error=invalidCategory");
    exit();
}
else {
    $sql="select categoryID from category where categoryName=?;";
    $statement = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($statement,$sql)){
        echo "sql stmt failed";
    }else{
        mysqli_stmt_bind_param($statement, "s", $categoryName);
        mysqli_stmt_execute($statement);
        $result=mysqli_stmt_get_result($statement);
        $row=mysqli_fetch_assoc($result);
        $categoryID=(int)$row['categoryID'];
        $sql3="select productName from product where productID='$productID'; ";
        $result3=mysqli_query($conn,$sql3);
        $row3=mysqli_fetch_assoc($result3);
        $sql2="update product set productName='$productName', categoryID='$categoryID',img1='$img1',img2='$img2',color='$color',size='$size',price='$price',discountPrice='$discountPrice',discount='$discount' where productID='$productID';";
        mysqli_query($conn,$sql2);
        $id=$_SESSION['id'];
        $action="Product: ".$row3['productName'].", was updated";
        $sql4="insert into action values ('$action','$id',CURRENT_DATE());";
        mysqli_query($conn,$sql4);
        header("Location: editproduct.php?product=updated&id=$productID");
        exit();
    }
    }
