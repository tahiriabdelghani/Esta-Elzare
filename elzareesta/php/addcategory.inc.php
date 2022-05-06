<?php
session_start();
require("conn.php");
$categoryName = $_POST['categoryname'];
$description = $_POST['description'];
if (empty($description) || empty($categoryName)) {
    header("Location: addcategory.php?error=emptyField");
    exit();
}
else {
    $sql="insert into category (categoryName,description ) values ('$categoryName','$description')";
    mysqli_query($conn,$sql);
    $id=$_SESSION['id'];
    $action="Category: ".$categoryName.", was added.";
    $sql2="insert into action values ('$action','$id',CURRENT_DATE());";
    mysqli_query($conn,$sql2);
    header("Location: addcategory.php?category=added");
    exit();
}