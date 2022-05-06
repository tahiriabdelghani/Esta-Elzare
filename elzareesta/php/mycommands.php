<?php 
session_start();
$id=$_SESSION['id'];
require("conn.php");
$sql = "select *from command where clientID='$id';";
$result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title>MY COMMANDS</title>
        <link rel="stylesheet" href="../css/tables.admin.css"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .commands{
                /* width:300px; */
                margin-top: 100px;
                margin-left: 100px;
                margin-right:100px
}
        </style>
    </head>
<body>
    <nav>
    <div class="wrapper">
      <div class="menu-icon"><span class="fas fa-bars"></span></div>
      <div class="logo"><a href="index.php"><img width="200px" style="margin-top:-40px;" src="../images/estaelzarelogo.png" alt=""></a></div>
      <ul class="nav-links">
        <li><a href="index.php">Home</a></li> 
        <li>
          <a href="categories.client.php" class="desktop-item">Categories</a>
          <input  class="inpt" type="button" id="showDrop">
          <label for="showDrop" class="mobile-item">Dropdown Menu</label>
          <ul class="drop-menu">
            <li><a href="category.client.php?catid=1">Men</a></li>
            <li><a href="category.client.php?catid=2">Women</a></li>
            <li><a href="category.client.php?catid=3">Boys</a></li>
            <li><a href="category.client.php?catid=4">Girls</a></li>
            <li><a href="category.client.php?catid=5">Babies</a></li>
          </ul>
        </li>
        <li><a href="cart.php">My Cart</a></li>
        <li><a href="#">My Commands</a></li>
        <li>
          <a href="#" class="desktop-item">Language</a>
          <input class="inpt" type="button" id="langDrop">
          <label for="langDrop" class="mobile-item">Dropdown Menu</label>
          <ul class="drop-menu">
            <li><a href="#">English</a></li>
            <li><a href="#">French</a></li>
            <li><a href="#">Arabic</a></li>
          </ul> 
        </li>
        <li><a href="about.client.php">About</a></li>
        
      </ul>
    </div>
    <div class="menu-icon"><span class="fas fa-bars"></span></div>
    <div class="search-icon"><span class="fas fa-search"></span></div>
    <div class="cancel-icon"><span class="fas fa-times"></span></div>
    <form action="search.client.php" method="POST">
      <input type="search" name="search" class="search-data" placeholder="Type to search..." required >
      <button type="submit" class="fas fa-search"></button>
    </form>
          <div class="profile">
              <li><a href="profile.php?"><button>My profile</button></a></li>
          </div>
          <form action="signout.inc.php">
          
              <input type="submit" value="Sign out">
          
          </form>
    </nav>
    <table>
        
    </table>
    <br><br><br><br><br><br>
    <?php if (mysqli_num_rows($result) > 0 ):?>
    <div style="max-width:900px; margin-left:0px;"  class=commands>
    <table  class=table>
        <thead>
            <th>Product Name</th>
            <th>Size and Color</th>
            <th>Quantity</th>
            <th>Total Price</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>E-mail Adresse</th>
            <th>Adresse</th>
            <th>ِCard Number</th>
            <th>Card Type</th>
            <th>Expiration Date</th>
            <th>Command Date</th>
            <th style="color: #242526;">revomve</th>
        </thead>
        <?php foreach ($result as $command) :
            $sql1="select productName,size,color from product where productID = ".$command['productID'];
            $result1=mysqli_query($conn,$sql1);
            $row1 = mysqli_fetch_assoc($result1);
            $sql2="select email from client where clientID = ".$command['clientID'];
            $result2=mysqli_query($conn,$sql2);
            $row2 = mysqli_fetch_assoc($result2);
            ?>
            
        <tbody>
            <td><?= $row1['productName'] ?></td>
            <td><?= $row1['size'],' ',$row1['color'] ?></td>
            <td><?=$command['quantity']?></td>
            <td><?=$command['totalprice']?></td>
            <td><?=$command['firstName']?></td>
            <td><?=$command['lastName']?></td>
            <td><?=$command['email']?></td>
            <td><?=$command['adresse']?></td>
            <td><?=$command['cardNumber']?></td>
            <td><?=$command['cardType']?></td>
            <td><?=$command['exprDate']?></td>
            <td><?=$command['commandeDate']?></td>
            <td><a href="cancelcommand.php?id=<?= $command['commandID'] ?>" ><button class=btn>Cancel</button></a></td>

        </tbody>
        <?php endforeach?>
        <?php else  :?>
        <h1 style="margin-left:620px;margin-top:100px;">No commands yet.</h1>
        <?php endif ?>
    </table>
    </div>
</body>
</html>
