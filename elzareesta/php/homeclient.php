<?php
require 'conn.php';
$sql="select *from product where rate=5;";
$result = mysqli_query($conn,$sql);
$sql2="select *from product where rate=4;";
$result2 = mysqli_query($conn,$sql2);
$sql3="select *from product where discount>=30;";
$result3 = mysqli_query($conn,$sql3);

?>
<!DOCTYPE html>

<html>
    
    <head>
        <title>HOME</title>
        <link rel="stylesheet" href="../css/styles.css">
    </head>
    <style>
        .background{
            height: 700px;
            /* margin-top:10px; */
            background-image: url('../images/main.jpeg');
            background-repeat: no-repeat;
            background-size: 100%;
        }
        .searcher {
            margin-right:250px;
            margin-top:-20px;
            margin-bottom:20px;  
        }
        .navbut li{
            color:white;
            /* background:rgb(228, 125, 228); */
            padding: 8px 12px;
            border-radius:5px;
            margin-right:10px;
        }
        .navbut li:hover{
            /* color:white; */
            background:rgb(228, 125, 228);
            /* padding: 8px 12px; */
        }
        .signout{
            color:white;
            /* background:rgb(228, 125, 228); */
            padding: 8px 12px;
            border-radius:5px;
            margin-right:10px;
            display:inline-block;
            margin-top:8px;
            background:none;
            border:none;color:white;
            font-weight:bold;
            font-family: arial,sans-serif;
            font-size: 15px;
        }
        .signout:hover{
            /* color:white; */
            background:rgb(228, 125, 228);
            /* padding: 8px 12px; */
        }
        .products{
  /* max-width: 1200px; */
  margin: auto;
  margin-top: 40px;
  overflow: auto;
  max-height:400px;
  display:felx:
  overflow-x:auto;
}

.product {
    margin: 5px;
    /* line-height:380px; */

    border: 3px solid;
    border-radius: 10px;
    display: inline;
    float: left;
    width: 290px;
    background: white;
}
.product img {
    margin-top: 10px;
    width: 100%;
    height: auto;
    background-color: white;
}
.product img:hover{
    opacity: 5;
}
.name, .new,.old {
    padding: 5px;
    text-align: center;
    color: white;
    background-color: #171c24;
}
.old{
    text-decoration: line-through;
    font-size: 14px;
    color: grey;
}
    </style>
    <body>
                <header style="position:fixed; width:100%;">
            <div  class="center">
                <a href="index.php"><img style="border-radius:6px; width:200px; margin-top: 15px; margin-left: 20px;" src="../images/estaelzarelogo.png" alt=""></a>
                <nav>
                    <form action="search.client.php" method="POST" class=searcher >
                        <label for="gsearch"></label><input style="width:900px; height:30px;" type="search" id="gsearch" name="search">
                        <input type="submit" style="width:60px; height:31px; float:right;" value="Search">
                    </form>
                    <ul class="navbut" style="margin-left:40px;">
                        <a href="index.php"><li>HOME</li></a>
                        <a href="categories.client.php"><li>CATEGORIES</li></a>
                        <a href=""><li>LANGUAGE</li></a>
                        <a href="cart.php"><li>MY CART</li></a>
                        <a href="mycommands.php"><li>MY COMMANDS</li></a>
                        <a href="about.client.php"><li>ABOUT</li></a>
                        <a href="profile.php"><li>MY PROFILE</li></a>
                        <a href="signout.inc.php"><li>SIGN OUT</li></a>
                        
                    </ul>
                </nav>
            </div>
        
        </header>
        <section style="width:100%;" id="welcome">
            <div class="background">
                <!-- <img src="images/main.jpeg" > -->
            </div>
        
        <section  class="owl-carousel owl-theme">
            <div class="cen">
                <h2>Most Rated</h2>
                <div class="products">
                <?php if (mysqli_num_rows($result) > 0 ):?>
        <?php foreach ($result as $product) : ?>
        <div class="product">
        <div class="logo">
            <a href="product.client.php?id=<?=$product['productID']?>"><img - src=<?= $product['img1'] ?> alt="damn"></a>
            <div class="name"><?=$product['productName']?></div>
            <div class="old"><?=$product['price']?>DH</div>
            <div class="new"><?=$product['discountPrice']?>DH</div>
            

        </div>
        </div> 
        <?php endforeach ?>
        <?php else  :?>
                <h1 style="margin-left:620px;margin-top:100px;">No results found.</h1>
    <?php endif  ?>
    </div>
            </div>
        
        </section>
        
        <section class="visual">
            <div class="cen">
                <h2>Most Selled</h2>
                <div class="products">
                <?php if (mysqli_num_rows($result2) > 0 ):?>
        <?php foreach ($result2 as $product2) : ?>
        <div class="product">
        <div class="logo">
            <a href="product.client.php?id=<?=$product2['productID']?>"><img - src=<?= $product2['img1'] ?> alt="damn"></a>
            <div class="name"><?=$product2['productName']?></div>
            <div class="old"><?=$product2['price']?>DH</div>
            <div class="new"><?=$product2['discountPrice']?>DH</div>
            

        </div>
        </div> 
        <?php endforeach ?>
        <?php else  :?>
                <h1 style="margin-left:620px;margin-top:100px;">No results found.</h1>
    <?php endif  ?>
    </div>
            </div>
        
        </section>
        
        
        <section class="visual">
            <div class="cen">
                <h2>Promotion   </h2>
                <div class="products">
                <?php if (mysqli_num_rows($result3) > 0 ):?>
        <?php foreach ($result3 as $product3) : ?>
        <div class="product">
        <div class="logo">
            <a href="product.client.php?id=<?=$product3['productID']?>"><img - src=<?= $product3['img1'] ?> alt="damn"></a>
            <div class="name"><?=$product3['productName']?></div>
            <div class="old"><?=$product3['price']?>DH</div>
            <div class="new"><?=$product3['discountPrice']?>DH</div>
            

        </div>
        </div> 
        <?php endforeach ?>
        <?php else  :?>
                <h1 style="margin-left:620px;margin-top:100px;">No results found.</h1>
    <?php endif  ?>
    </div>
                </div>
            </div>
        
        </section>
        
        
        
        
        
        
        <footer>
            <div class="cen">
                <h3>ABOUT</h3>
                <p>we re students trying to run our first business</p>
            </div>
        
        </footer>
    </body>
    
</html>
    