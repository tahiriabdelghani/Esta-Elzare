<?php
session_start();
require 'conn.php';
$id=$_GET['id'];

$sql="delete from action";
mysqli_query($conn,$sql);
$id=$_SESSION['id'];
$action="Action list was cleared.";
$sql2="insert into action values ('$action','$id',CURRENT_DATE());";
mysqli_query($conn,$sql2);
header("Location: home.admin.php?list=cleared");
exit();