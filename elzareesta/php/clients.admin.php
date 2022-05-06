<?php 
require("conn.php");
$sql = "select *from client where type=0";
$result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title>CLIENTS</title>
        <link rel="stylesheet" href="../css/tables.admin.css"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <br><br><br><br><br><br>
    <?php if (mysqli_num_rows($result) > 0 ):?>
    <div class=clients>
    <table class=table>
        <thead>
            <th>Client ID</th>
            <th>Client Name</th>
            <th>E-mail</th>
            <th style="color: #242526;">revomve</th>
        </thead>
        
            <?php foreach ($result as $client) :?>
        <tbody>
            <td><?= $client['clientID']?></td>
            <td><?= $client['clientName'] ?></td>
            <td><?= $client['email'] ?></td>
            <td><a href="deleteclient.php?id=<?= $client['clientID'] ?>"><button class=btn>Remove</button></td></a>
        </tbody>
            <?php endforeach?>
        <?php else  :?>
        <h1 style="margin-left:620px;margin-top:100px;">No clients yet.</h1>
        <?php endif ?>
    </table>
    </div>
</body>
</html>
