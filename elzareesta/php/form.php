<?php
$pro_id=$_GET['pro_id'];
$q=$_GET['q'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign-up</title>
    <link rel="stylesheet" href="../css/signup.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>

<body>
    <div class="center">
        <div class="logo"><a href="index.php"><img width="210px" src="../images/esta.jpg" alt=""></a></div>
        <div class="header">Payment Form</div>
        <form action="singlecommand.php?pro_id=<?=$pro_id?>&q=<?=$q?>" method="POST">
            <input type="text" name="fname" placeholder="First Name">
            <input type="text" name="lname" placeholder="Last Name">
            <input type="text" name="email" placeholder="E-mail adresse">
            <input type="text" name="adresse" placeholder="Adresse">
            <label for="usercard">
                <span>Type de carte :</span>
            </label>
            <select required style="margin-top:20px; height:30px; width:260px; border-radius:5px;" id="card" name="usercard">
                <option value="Visa">Visa</option>
                <option value="Mastercard">Mastercard</option>
                <option value="American Express">American Express</option>
            </select>
            <input type="text" name="cardnumber" placeholder="Card Number" required>
            <input type="text" name="expdate" placeholder="Expiration Date" required>
            <input type="submit" value="Validate">
            <a href="product.client.php?id=<?=$_GET['pro_id']?>"><input class="signin" type="button" value="Go back"></a>
        </form>
    </div>
<style>
.signin{
    margin-bottom:15px;
    margin-top:-15px;
    margin-left:80px;
    width:180px;
}
.signin:hover{
    cursor:pointer;
}
.center{
    padding-bottom:300px;
}
</style>

</body>

</html>