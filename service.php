<?php include('serverService.php') ?>
<html>
<head>
<link rel="stylesheet" href="serviceStyle.css">

</head>

<body>
<div class="navbar" id="myNavbar">
<img src="https://t4.ftcdn.net/jpg/01/96/07/43/240_F_196074365_AlruXARNe3SYD7tUgvtqvTh2g01eHthI.jpg" >
<ul>

 <li><a href="home.php">Home</a></li>
 <li><a href="service.php">Service</a></li>
   <li><a href="contact.php">Contact us</a></li>
    <li><a href="aboutUs.php">About</a></li>
    <?php
    if(!isset($_SESSION["username"])){
    ?>
    <li><a href="BHlogin.php" class="login"><?php echo "Log in"; ?></a></li>
    <?php }else{?>
      <li><a href="#" class="login"><?php echo "Hi". " ".$_SESSION["username"]; ?></a></li>
      <?php }?>
 </ul>
 
 </div>

<h1>Hairstyles from most<br> commom</h1> 

<!-- fetch data from the database and display it-->
<div class="container">
<?php

while($row=mysqli_fetch_assoc($result)){
  $id=$row['id'];
?>
<div class="image">
<a href="style.php?id=<?php echo $id;?>"><img src="hairstyleImg/<?php echo $row['image']; ?>" class="iamge-inside" ></a>
<div class="bottom-left"><span class="image-texts"><?php echo $row['name']; ?>
</span><br>R<?php echo $row['cost']; ?></div>

</div>
  
<?php

}
?>


</div>

</div>


<br><br>
<!--<div>
<form>
  <input type="submit" value="View all" class="button">
</form>
</div>-->
</body>
<script>
// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("myNavbar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
</html>