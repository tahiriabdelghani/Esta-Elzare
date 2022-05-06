<?php
session_start();
require 'conn.php';
$id=$_GET['id'];
$sql2="select clientName from client where clientID='$id';";
$result2=mysqli_query($conn,$sql2);
$row2=mysqli_fetch_assoc($result2);
$sql="delete from client where clientID='$id';";
mysqli_query($conn,$sql);
$idd=$_SESSION['id'];
$action="Client: ".$row2['clientName'].", was deleted.";
$sql2="insert into action values ('$action','$idd',CURRENT_DATE());";
mysqli_query($conn,$sql2);
header("Location: clients.admin.php?client=deleted");
exit();