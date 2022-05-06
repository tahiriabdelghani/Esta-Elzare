
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>CATEGORIES</title>
    <link rel="stylesheet" href="../css/categories.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
<body>
  <nav>
    <div class="wrapper">
      <div class="menu-icon"><span class="fas fa-bars"></span></div>
      <div class="logo"><a href="index.php"><img width="200px" style="margin-top:-40px;" src="../images/estaelzarelogo.png" alt=""></a></div>
      <ul class="nav-links">
        <li><a href="index.php">Home</a></li> 
        <li>
          <a href="categories.anonyme.php" class="desktop-item">Categories</a>
          <input  class="inpt" type="button" id="showDrop">
          <label for="showDrop" class="mobile-item">Dropdown Menu</label>
          <ul class="drop-menu">
            <li><a href="category.anonyme.php?catid=1">Men</a></li>
            <li><a href="category.anonyme.php?catid=2">Women</a></li>
            <li><a href="category.anonyme.php?catid=3">Boys</a></li>
            <li><a href="category.anonyme.php?catid=4">Girls</a></li>
            <li><a href="category.anonyme.php?catid=5">Babies</a></li>
          </ul>
        </li>
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
        <li><a href="about.anonyme.php">About</a></li>
        
      </ul>
    </div>
    <div class="menu-icon"><span class="fas fa-bars"></span></div>
    <div class="search-icon"><span class="fas fa-search"></span></div>
    <div class="cancel-icon"><span class="fas fa-times"></span></div>
    <form action="search.anonyme.php" method="POST">
      <input type="search" name="search" class="search-data" placeholder="Type to search..." required >
      <button type="submit" class="fas fa-search"></button>
    </form>
          
          <div class="signup">
              <li><a href="signin.php"><button>Sign in</button></a></li>
          </div>
          <div class="signin">
              <li><a href="signup.php"><button>Sign up </button></a></li>
          </div>
    </nav>
    <br><br><br><br><br><br>
    <p style="margin-top:50px;" class="heading">Our Categories</p>
    <a href="category.anonyme.php?catid=1"><div class="mencat">
    </div></a>
    <a href="category.anonyme.php?catid=2"><div class="womencat">
    </div></a>
    <a href="category.anonyme.php?catid=3"><div class="boyscat">
    </div></a>
    <a href="category.anonyme.php?catid=4"><div class="girlscat">
    </div></a>
    <a href="category.anonyme.php?catid=5"><div class="babiescat">
    </div></a>
        
          <style>
          .wrapper .logo a img{
          margin-left: -326px;
          padding-bottom: 0px;
          margin-top: -1.5pc;
          float: left;
          position: fixed;
          }

          .wrapper .nav-links{
          margin-top: 0px;
          display: inline-flex;
          margin-right: 422px;
          }
          .signin li a button{
  float: right;
  margin-right: -97px;
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
.signup li a button{
  float: right;
  margin-right: 28px;
  height: 45px;
  margin-top: 10px;
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
         

</body>
</html>