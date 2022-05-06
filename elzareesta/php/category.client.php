
<?php
require 'conn.php';
$catid=$_GET['catid'];
$sql2="select *from product where categoryID='$catid';";
$result2 = mysqli_query($conn,$sql2);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>CATEGORY</title>
    <link rel="stylesheet" href="../css/categories.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <style>
.wrapper .logo a img{
        margin-left: -266px;
        padding-bottom: 0px;
        margin-top: -1.5pc;
        float: left;
        position: fixed;
        }
        .wrapper .nav-links{
        margin-top: 0px;
        display: inline-flex;
        margin-right: 272px;
        }
        .profile li a button{
  float: right;
  margin-right: 8px;
  height: 45px;
  margin-top: -40px;
  color: #f2f2f2;
  background:#242526;
  cursor: pointer;
  text-decoration: none;
  font-size: 18px;
  font-weight: 500;
  padding: 9px 15px;
  border-radius: 5px;
  transition: all 0.3s ease;
}

  </style>
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
    <br><br><br><br><br><br>
    <?php
    if ($catid==1){
        $class="mencat";  
    }else if ($catid==2){
        $class="womencat";
    }else if ($catid==3){
        $class="boyscat";
    }else if ($catid==4){
        $class="girlscat";
    }else if ($catid==5){
        $class="babiescat";
    }
    
    ?>

    <div style="margin-top: -40px;" class=<?=$class?>>
    </div>
    <div class="products">
    
    <?php if (mysqli_num_rows($result2) > 0 ):?>
        <?php foreach ($result2 as $product) :?>

        <div class="product">
        <div class="logo">
            <a href="product.client.php?id=<?=$product['productID']?>"><img  src=<?= $product['img1'] ?> alt="damn"></a>
            <div class="name"><?=$product['productName']?></div>
            <div class="old"><?=$product['price']?>DH</div>
            <div class="new"><?=$product['discountPrice']?>DH</div>
            </div>
            </div>
            <?php endforeach ?>
        <?php else  :?>
            <h1 style="margin-left:390px;margin-top:50px;">This category is still empty.</h1>';
            <?php endif  ?>
            </div>
</body>
</html>
