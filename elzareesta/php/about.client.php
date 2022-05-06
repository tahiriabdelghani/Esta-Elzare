<?php



if ($_SERVER['REQUEST_METHOD'] == 'POST'){

   $user = filter_var($_POST['username'],FILTER_SANITIZE_STRING);
   $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
   $phone = $_POST['phonenumber'];
   $message =filter_var($_POST['msg'],FILTER_SANITIZE_STRING);

   $formerrors = array();

if(strlen($user) <= 4){
	$formerrors[] = '<label style="color:orange"> Username must be larger than 4 Characters &#128680</label>';

}
if(strlen($phone) < 10){
	$formerrors[] = '<label style="color:orange"> Phone Number must be larger than 9 Characters &#128680</label>'  ;

}

if(strlen($message) <= 10){
	$formerrors[] = '<label style="color:orange"> Your Message must be larger than 10 Characters &#128680</label>'.'</br>';

}

$mail='tahiriabdelghani@gmail.com';
$headers = 'From'. $mail .'\r\n';




}

?>


<title>ABOUT</title>
<link rel="stylesheet" type="text/css" href="../css/navfoot.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   
   
</head>
<body>

	<style type="text/css">	
		 form {
max-width: 440px;
margin-left: %;

 }

form input,form textarea{
 margin-bottom: 20px;

}

.contact-form .form-group{
	margin-bottom: 0px;
	position: relative;
}

.signout{
			position: absolute;
	right:40px;
	top:34px;
	width: 100px;
	height: 40px;
	font-weight:bold;
	/* margin-left:30px; */
		}
		nav ul{
			margin-top:-15px; 
			margin-right:280px;

		}
		.signout:hover{
			background: aqua;
	        border: white solid;
		}

	</style>


<nav >
		<a href="index.php"><img style="margin-left:20px;margin-top:8px; width:200px; height:auto;" src="../images/estaelzarelogo.png" class="logo"></a>
    <form class="sf" action="search.client.php" method="POST">
		<input type="text" placeholder="Search for products Here" name="search" 
		style="width:700px;margin-top:10px; height:40px; margin-left:-400px;">
        <button type="submit" style="width: 100px;margin-top: 10px;font-weight: bold;">Search</button>
	</form>
	
        <a href="profile.php"><input type="button" name="pop" value="My Profile" class="movme" style="font-weight: bold;"></a>
	        <form action="signout.inc.php">
          
              <input class="signout" type="submit" value="Sign out">
          
            </form>
	<ul style="margin-top:0px;">
		<li><a href="index.php">Home</a></li>
		<li><a href="categories.client.php">Categories</a></li>
		<li><a href="cart.php">My Cart</a></li>
		<li><a href="mycommands.php">My COMMANDS</a></li>
		<li><a href="#Lnaguages">Languges</a></li>
		<li><a href="#">About</a></li>
	</ul>
	
</nav>




<div class="col-sm-6" style="float:right;margin-right: 100px;margin-top: 30px">
<h1 style="text-align: center;">CONTACT US</h1>

<fieldset style="background: #EFEFEF;width: 520px;height: 320px;margin-left: 31%;padding-top:40px ">
	<div class="container">

<div class="errors">
	<?php

   if(isset($formerrors)){
       foreach ($formerrors as $error) {
   	echo $error .'</br>';
   	# code...
   }}

	?>
	

</div>


<form method="POST" action="<?php echo $_SERVER['PHP_SELF']  ?>" > 

	
<input type="text" placeholder="&#129489 Type Your Name" name="username" class="form-control" value="<?php
 if(isset($user)){
	echo $user;
} ?>">

<input type="email" placeholder="&#128231 Your Email" name="email" class="form-control" value="<?php
 if(isset($email)){
	echo $email;
} ?>"> 
<input type="number" placeholder="&#128222 Your Phone Number" name="phonenumber" class="form-control" value="<?php
 if(isset($phone)){
	echo $phone;
} ?>">
<textarea class="form-control" name='msg' placeholder="&#128172 Your Message Here !"><?php
 if(isset($message)){
	echo $message;
} ?></textarea>
<input class="btn btn-primary " type="submit" name="submit" value="&#128396 Send Message"/>

</form>

	</div>
</fieldset>
</div>
<div class="col-sm-6" style="position: absolute;top:200px">
	<section>
	   
		
		<h1 style="font-family:'Bahnschrift';">About 
		<span style="color: blue ;">ES</span><span style="color: black ;">TA</span>-<span style="color:rgb(201, 37, 119);">EL</span><span style="color: green;">ZA</span><span style="color: red;">RE</span></h1>
		<h3 style="font-family:'Bahnschrift';" > 
		ESTA-ELZARE is an e-commerce web application that was made by the INPT students:
		</h3 style="font-family:'Bahnschrift';">
		<ul style="font-size:18px; font-family:'Bahnschrift'; margin-left:20px;">
		<li><span style="color: blue ;">ESSALIHI MOUAD</span></li>
		<li><span style="color: black ;">TAHIRI ABDELGHANI</span></li>
		<li><span style="color: rgb(201, 37, 119);">ELMADANI SANAE</span></li>
		<li><span style="color: green;">ZAIDI HICHAM</span></li>
		<li><span style="color: red;">REDOUANE SALMA</span></li>
		</ul>
		<h3>And supervised by Mr. ABDELHAY HAQIQ.</h3>
		<div style="margin-top:100px;" >
		<img style="margin-top:100px; margin-left:300px" width=250px src="../images/11.png" alt="">
	    <a target="_blank" href="https://www.inpt.ac.ma/"><img style="margin-top:100px; float:right; margin-right:-400px;" width=200px src="../images/Logo_inpt.png" alt=""></a>
		</div>
	</section>		


</div>


</body>
</html>
<footer style="margin-top:700px;">
  <div class="footer-content">
  	<h3>Esta Elzare</h3>
   <p> Share Our Page With Your Friends </p>
 <ul class="socials">
 	<li><a href="#"><i class="fa fa-facebook" name="fb"></i></a></li>
 	<li><a href="#"><i class="fa fa-twitter" name="fb"></i></a></li>
 	<li><a href="#"><i class="fa fa-youtube" name="fb"></i></a></li>
 	<li><a href="#"><i class="fa fa-instagram" name="fb"></i></a></li>
 	</ul>
 </div>
<div class="footer-bottom">
	<p>Copyright &copy; 2021 ALL Right Reserved For  <span>Esta Elzare</span>  &reg; Team</p>

</footer>