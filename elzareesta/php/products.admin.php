<?php 
require("conn.php");
$sql = "select *from product";
$result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title>PRODUCTS</title>
        <link rel="stylesheet" href="../css/tables.admin.css"> 
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <script src="https://use.fontawesome.com/6f636db11c.js"></script>
        <link rel="icon" href="images/favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
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
        <div class="cancel-icon"><span class="fas fa-times"></span></div> -->
        <!-- <form action="#">
            <input type="search" class="search-data" placeholder="Type to search..." required >
            <button type="submit" class="fas fa-search"></button>
        </form> -->
          <div style="margin-top:-85px;" class="profile">
            <li><a href="profile.php"><button>My profile</button></a></li>
        </div>
        <form  action="signout.inc.php">
            <input style="margin-top:40px; margin-left:1060px;" type="submit" value="Sign out">
        </form>
    
    
    </nav>
    <br><br><br><br><br><br>
    <?php if (mysqli_num_rows($result) > 0 ):?>
    <div style="margin-left:170px;" class=products>
    <a href="addproduct.php"><button class=btn>Add product</button></a>
    <table class=table>
        <thead>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Image 1</th>
            <th>Categorie Name</th>
            <th>Color</th>
            <th>Size</th>
            <th>Price</th>
            <th>Discount Price</th>
            <th>Discount</th>
            <th>Rate</th>
            <th style="color: #242526;">revomve</th>
            <th style="color: #242526;">edit</th>
        </thead>
            <?php foreach ($result as $product) :
                    $sql2="select categoryName from category where categoryID = ".$product['categoryID'];
                    $result2=mysqli_query($conn,$sql2);
                    $row = mysqli_fetch_assoc($result2);
                ?>
        <tbody>
            <td><?= $product['productID'] ?></td>
            <td><?= $product['productName'] ?></td>
            <td><img src=<?= $product['img1'] ?> style="width:120px"></td>
            <td><?=$row['categoryName'] ?></td>
            <td><?= $product['color'] ?></td>
            <td><?= $product['size'] ?></td>
            <td><?= $product['price'] ?> DH</td>
            <td><?= $product['discountPrice'] ?> DH</td>
            <td><?= $product['discount'] ?> %</td>
            <td><?= $product['rate'] ?></td>
            <td><a href="deleteproduct.php?id=<?= $product['productID'] ?>" ><button class=btn>Remove</button></a></td>
            <td><a href="editproduct.php?id=<?= $product['productID'] ?>"><button class=btn>Edit</button></a></td>
                    <?php endforeach ?>
            <?php else  :?>
                <h1 style="margin-left:620px;margin-top:100px;">No products yet.</h1>
                <a style="margin-left:690px; margin-top:200px;" href="addproduct.php"><button class=btn>Add product</button></a>
            <?php endif ?>    
        </tbody>
    </table>
    </div>
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
