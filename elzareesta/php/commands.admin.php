<?php 
require("conn.php");
$sql = "select *from command";
$result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title>COMMANDS</title>
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
                <li><a href="home.admin.php">Home</a></li> 
                <li>
                    <a href="categories.admin.php" class="desktop-item">Categories</a>
                </li>
                <li><a href="products.admin.php">Products</a></li>
                <li><a href="commands.admin.php">Commands</a></li>
                <li><a href="clients.admin.php">Clients</a></li>
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
                <!-- <li><a href="#">About</a></li> -->
        
            </ul>
        </div>
        <!-- <div class="menu-icon"><span class="fas fa-bars"></span></div>
        <div class="search-icon"><span class="fas fa-search"></span></div>
        <div class="cancel-icon"><span class="fas fa-times"></span></div>
        <form action="#">
            <input type="search" class="search-data" placeholder="Type to search..." required >
            <button type="submit" class="fas fa-search"></button>
        </form> -->
          <div style="margin-top:-75px;" class="profile">
            <li><a href="profile.php"><button>My profile</button></a></li>
        </div>
        <form  action="signout.inc.php">
            <input style="margin-top:50px;" type="submit" value="Sign out">
        </form>
    </nav>
    <table>
        
    </table>
    <br><br><br><br><br><br>
    <?php if (mysqli_num_rows($result) > 0 ):?>
    <div class=commands>
    <table class=table>
        <thead>
            <th>Command ID</th>
            <th>Product Name</th>
            <th>Size and Color</th>
            <th>Quantity</th>
            <th>Total Price</th>
            <th>Client E-mail</th>
            <th>Adresse</th>
            <th>Command Date</th>
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
            <td><?=$command['commandID']?></td>
            <td><?= $row1['productName'] ?></td>
            <td><?= $row1['size'],' ',$row1['color'] ?></td>
            <td><?=$command['quantity']?></td>
            <td><?=$command['totalprice']?></td>
            <td><?= $row2['email'] ?></td>
            <td><?=$command['adresse']?></td>
            <td><?=$command['commandeDate']?></td>
        </tbody>
        <?php endforeach?>
        <?php else  :?>
        <h1 style="margin-left:620px;margin-top:100px;">No commands yet.</h1>
        <?php endif ?>
    </table>
    </div>
</body>
</html>
