<?php
session_start();
require 'conn.php';
$commandID=$_GET['id'];
$sql="delete from command where commandID='$commandID';";
mysqli_query($conn,$sql);
header("Location: mycommands.php?product=deleted");
exit();