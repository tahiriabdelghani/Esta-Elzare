<?php
  require 'conn.php';
  $id=$_GET['id'];
  $sql = "select *from product where productID='$id';"; 
  $result = mysqli_query($conn,$sql);
  $row=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/product.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;1,300;1,400&display=swap"
      rel="stylesheet"
    />
    <link
      href="/your-path-to-fontawesome/css/fontawesome.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>PRODUCT</title>
  </head>
  <body>
    <header>
      <div class="logo-container">
    <a href="index.php"><img src="image.svg" alt="logo" class="logo"></a>

      </div>
      <nav>
        <ul class="nav-links">
            <li><a href="index.php" class="nav-link">HOME</a></li>
          <li><a href="categories.anonyme.php" class="nav-link">CATEGORIES</a></li>
          <!-- <li><a href="#" class="nav-link">MY CARD</a></li> -->
          <!-- <li><a href="#" class="nav-link">WISHLIST</a></li> -->
          <li><a href="#" class="nav-link">LANGUAGE</a></li>
          <li><a href="about.anonyme.php" class="nav-link">ABOUT</a></li>
        </ul>
        <div class="sign-btns"> 
          <div></div>
          <a href="signin.php"><button class="btn signin-btn">SIGN IN</button></a>
          <a href="signup.php"><button class="btn signup-btn">SIGN UP</button></a>
            <img src="search.svg" alt="Cart" class="active"/>
          <img src="cart.svg" alt="Cart" class="cart"/>
        
            <form class="search-box" action="search.anonyme.php" method="POST" >
              <input name="search" type="text" name="" class="search-input">
              <a href="search.anonyme.php"><input  type="submit" value="search" class="search-btn"></a>
</form>
        </div>
      </nav>
    </header>
    
    <div class="container">
      <div class="row">
        <div class="products">
          <div class="product__title">
            <h3><?=$row['productName']?></h3>
          </div>
          <div class="product__content">
            <div class="image1">
              <img style="width: 200px;" src=<?=$row['img1']?> alt="product" />
            </div>
            <!-- <div class="image2">
            <img style="width: 200px;" src="" alt="" />
            </div> -->
            <div class="product__details">
              <div class="options">
                <!-- <div class="color__options">
                  <label for="shirt">SHIRT</label>
                  <select name="shirt" id="shirt">
                    <option value="blue">BLUE</option>
                    <option value="pink">PINK</option>
                    <option value="green">GREEN</option>
                  </select>
                </div> -->
                <div class="shirt__options">
                  <label for="shirt">COLOR</label>
                  <p><?=$row['color']?></p>
                </div>
                <div class="size__options">
                  <label for="size">SIZE</label>
                  <p><?=$row['size']?></p>
                </div>
                <div>
              <img src="star.svg" alt="star" class="star">
              <img src="star.svg" alt="star" class="star">
              <img src="star.svg" alt="star" class="star">
              <img src="star.svg" alt="star" class="star">
              <img src="star1.svg" alt="star" class="star">
                </div>
                <div class="price">
                  <span class="old-price"><?=$row['price']?> DH</span>
                  <span><b><?=$row['discountPrice']?> DH</b></span>
                </div>
                  <div class="discount-label black"> <span><?=$row['discount']?>%</span> </div>
              </div>

            
            </div>
          </div>
          <div class="author">
            <!-- <div class="user">
              <img src="user.svg" alt="avatar" class="avatar">
              <span class="user-name">agence</span>
              <button class="follow-button">+ Follow</button>
            </div> -->
            <div class="rate">
                <span>Rate:</span>
                <div class="rating">
                    <input type="radio" name="star" id="star1"><label for="star1"></label>
                    <input type="radio" name="star" id="star2"><label for="star2"></label>
                    <input type="radio" name="star" id="star3"><label for="star3"></label>
                    <input type="radio" name="star" id="star4"><label for="star4"></label>
                    <input type="radio" name="star" id="star5"><label for="star5"></label>
                  </div>
          
            </div>
            <div class="share">
              <span>Share</span>
              <img src="instagram.svg" alt="instagram" class="instagram">
              <img src="facebook.svg" alt="facebook" class="facebook">
            </div>
          </div>
        </div>
        <div class="total__amount">
          <h3>The total amount of</h3>
          <div class="temporary__amount">
            <p>Temporary amount</p>
            <span>$53.98</span>
          </div>
          <!-- <div class="shipping">
            <p>Shipping</p>
            <p>Gratis</p>
          </div> -->
          <hr>
          <div class="quantity__options">
                  <label for="quantity">QUANTITY</label>
                  <input
                    type="number"
                    name="quantity"
                    id="quantity"
                    value="1"
                  />
                </div>
          <div class="btns">
          <a href="signin.php"><button class="buy-btn">BUY NOW</button></a>
          <a href="signin.php"><button class="addtocart-btn">ADD TO CARD</button></a>
          <!-- <button class="addtowish-btn">ADD TO WISH</button>   -->
          </div>
        </div>
      </div>
    </div>
    <script src="app.js"></script>
  </body>
</html>
