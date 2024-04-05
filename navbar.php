<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/navbar.css">
</head>
<body>
<div class="navbar" id="myNavbar">
<img src="5.webp" class="left">
<ul>

 <li><a href="/hairSalon/clientSide/home.php">Home</a></li>
 <li><a href="/hairSalon/clientSide/bookings/service.php">Service</a></li>
   <li><a href="/hairSalon/clientSide/contact.php">Contact</a></li>
    <li><a href="/hairSalon/clientSide/aboutUs.php">About</a></li>
   
 </ul>
 <?php
    if(!isset($_SESSION["username"])){
    ?>
    <div><a href="/hairSalon/clientSide/BHlogin.php" class="login"><?php echo "Log in"; ?></a></div>
    <?php }else{?>
      <div><a href="#" class="login"><?php echo "Hi". ",".$_SESSION["username"]; ?></a></div>
      <?php }?>
<!--code for the mobile navbar-->
      <div class="mobile" >
      
<div class="toggle_btn">
 <i class="fa-solid fa-bars"></i>
</div>

<div class="image">
<img src="https://t4.ftcdn.net/jpg/01/96/07/43/240_F_196074365_AlruXARNe3SYD7tUgvtqvTh2g01eHthI.jpg" class="">

</div>
<div class="name">
<?php
    if(isset($_SESSION["username"])){
    ?>
    <div><?php echo "Hi". ",".$_SESSION["username"]; ?></div>
    <?php }?>
      </div>

</div>

<!--dropDown menu for mobile navbar-->
<div class="dropdown_menu ">
<li><a href="/hairSalon/clientSide/home.php">Home</a></li>
 <li><a href="/hairSalon/clientSide/bookings/service.php">Service</a></li>
   <li><a href="/hairSalon/clientSide/contact.php">Contact</a></li>
    <li><a href="/hairSalon/clientSide/aboutUs.php">About</a></li>
    <?php
    if(!isset($_SESSION["username"])){
    ?>
    <li><a href="/hairSalon/clientSide/BHlogin.php" ><?php echo "Log in"; ?></a></li>
    <?php }else{?>
      <li><a href="#" ><?php echo "Settings"; ?></a></li>
      <?php }?>

</div>
    </div>

 <div class="hr">
 <hr></div>




 
 


</body>


</html>