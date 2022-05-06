<?php
session_start();
if (isset($_SESSION['id'])){
require("conn.php");
$id=$_SESSION['id'];
$sql = "select type from client where clientID='$id';";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
}

if (isset($_SESSION['id']) && $row['type']==1){
  include 'home.admin.php';
}
else if (isset($_SESSION['id']) && $row['type']==0){
  include 'homeclient.php';
}
else{
  include 'homeanonyme.php';
}
