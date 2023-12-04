<?php include('serverlogin.php') ?>
<html>
<head>
<link rel="stylesheet" href="css/bookStyle.css">
</head>

<body>
<?php

$nameEr="";
$surnameEr="";
$emailEr="";
$phoneNoEr="";


if(isset($_POST["reg_user"])){
	
	if (empty($_POST["Name"])) {
    $nameEr = "Name is required";
	}
	if (empty($_POST["Email"])) {
    $emailEr = "email is required";
	}
	if (empty($_POST["PhoneNo"])) {
    $phoneNoEr = "PhoneNo is required";
	}
	

}



?>
<div class="navbar" id="myNavbar">
<ul>
 <li><a href="home.html">Home</a></li>
  <li><a href="book.html">Book</a></li>
   <li><a href="a">Service</a></li>
    <li><a href="a">About</a></li>
 </ul>
 </div>
 
<div class="box">
<div class="form">
<form method="post" action="book.php" enctype="multipart/form-data">


  
  <div   class="error"><?php echo $emailEr; ?></div>
  <label for="lname">Email</label><br>
  <input type="text" id="lname" name="Email" value="<?php echo $Email; ?>" placeholder="Enter Email"><br><br>
  
 

  <div   class="error"><?php echo $phoneNoEr; ?></div>
   <label for="password">Password</label><br>
  <input type="text" id="password" name="Password" value="<?php  ?>" placeholder="Enter password"><br><br>

  
  
  <input type="submit" value="Next" class="button" name="reg_user">
</form>
</div>
</div>



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