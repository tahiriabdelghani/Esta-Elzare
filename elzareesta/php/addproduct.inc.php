<?php
require("conn.php");
$productName = $_POST['productname'];
$categoryName = $_POST['categoryname'];
$img1 = $_POST['img1'];
$img2 = $_POST['img2'];
$color = $_POST['color'];
$size = $_POST['size'];
$price = $_POST['price'];
$discountPrice = $_POST['discountprice'];
$discount = $_POST['discount'];
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
        $categoryID=$row['categoryID'];
    }
    $sql2 = "insert into product (productName,categoryID,img1,img2,color,size,price,discountPrice,discount) values ('$productName',' $categoryID','$img1','$img2','$color','$size','$price','$discountPrice','$discount');";
    mysqli_query($conn,$sql2);
    $id=$_SESSION['id'];
    $action="Product ".$productName.", was added.";
    $sql3="insert into action values ('$action','$id',CURRENT_DATE());";
    mysqli_query($conn,$sql3);
    header("Location: addproduct.php?product=added");
    exit();
}
