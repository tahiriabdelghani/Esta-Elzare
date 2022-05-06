<?php
session_start();
require("conn.php");
$description = $_POST['description'];
$categoryName = $_POST['categoryname'];
$categoryID= (int)$_POST['id'];
if (empty($description) || empty($categoryName)) {
    header("Location: addcategory.php?error=emptyField");
    exit();
}
else{
    $sql2="select categoryName from category where categoryID='$categoryID'; ";
    $result2=mysqli_query($conn,$sql2);
    $row2=mysqli_fetch_assoc($result2);
    $sql="update category set categoryName='$categoryName', description='$description' where categoryID='$categoryID';";
    mysqli_query($conn,$sql);
    $id=$_SESSION['id'];
    $action="Category: ".$row2['categoryName'].", was renamed to ".$categoryName;
    $sql3="insert into action values ('$action','$id',CURRENT_DATE());";
    mysqli_query($conn,$sql3);
    header("Location: editcategory.php?category=updated");
    exit();
}