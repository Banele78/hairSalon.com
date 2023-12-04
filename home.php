<?php
session_start();?>
<Doctype! html>
<html lang="en"> 
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content=IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Home page</title>
<style>
  body{
	margin: 0;
	padding: 0;
	background: #ccc;
	font-family: Arial;	
}
.navbar{
	z-index: 999; /* Ensure the navigation bar is above other elements */
}
.navbar ul{
	list-style: none;
	padding: 0;
	background: #ccc;
	margin:0; 
	text-align:center;
	 z-index: 999; /* Ensure the navigation bar is above other elements */
}

.navbar .logIn{
	text-align: right;
	margin-left: 130%;
	font-size:18px;
	text-transform: capitalize;
	text-decoration: underline;
	
}

.navbar img{
	width:5%;
	height: 10%;
	float:left;
	border-radius:50%;
	margin-left:4%;
	margin-top:5px;
}
.navbar li{
	display: inline-block;
}

.navbar a{
	text-decoration: none;
	color:#fff;
	width:100px;
	display:block;
	padding:25px 20px;
	font-size:15px;
	text-transform: uppercase;
	font-weight: bold;
	text-align: center;
}
/* Page content */
.content {
  padding: 16px;
}

/* The sticky class is added to the navbar with JS when it reaches its scroll position */
.sticky {
  position:sticky;
  top: 0;
  width: 100%;
}

/* Add some top padding to the page content to prevent sudden quick movement (as the navigation bar gets a new position at the top of the page (position:fixed and top:0) */
.sticky + .content {
  padding-top: 60px;
}
/*end of navbar*/


logo{
padding:100px;
font-size:50px;
font-family:Tahoma;
color:black;
}

body{
background-color:#ccc;
}

.copy{
justify-content:space-between;
font-family: Tahoma;
text-align:center;
}

.links{
justify-content:space-between;
font-family: Tahoma;
text-align:center;
}

button{
font-family:Tahoma;
width:150px;
padding:9px ;
background:transparent;
border-radius:10px;
color:black;
text-align:center;
}

.services{
text-align:center;
padding:10px;
}


button::hover{
transition:0.5s;
}

h1{
text-align:center;
font-size:50px;
font-family:Tahoma;
color:black;
}

.slideshow-container {
 text-align:center;
  position: relative;
  margin: auto;
  border-radius:30px;
  padding:9px;
 
}

/* Hide the images by default */
.mySlides {
  display: none;
}


/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color:#bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
   position: relative;
  bottom: 20px;
  left: 16px;
}

.active, .dot:hover {
  background-color: #717171;
}


/* Fading animation */
fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}



</style>

</head>

<body>
<div class="navbar" id="myNavbar">
<img src="https://t4.ftcdn.net/jpg/01/96/07/43/240_F_196074365_AlruXARNe3SYD7tUgvtqvTh2g01eHthI.jpg" >
<ul>

 <li><a href="home.php">on</a></li>
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

<div>
<h1><b>Welcome to the Salon storys<b><h1>
</div>


<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
  
    <img src="girls.jpg" style="width:700px; height:500px ">
	
	
  </div>

  <div class="mySlides fade">

    <img src="pic5.webp" style="width:700px; height:500px ">
   
  </div>

  <div class="mySlides fade">
    
    <img src="salon.jpg" style="width:700px; height:500px ">
  
</div>
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
</div>
<p>
The salon storys is all about making our customres to look and feel better about themselves .
The beauty and cosmetics industry is one of the few sectors <br>in which South African women dominate but beauty salons and 
nail bars are industries that cater predominantly for women, but this is beginning to change. “Interestingly men are also increasingly making use of these services.
</p>
<div class="services">
<a href="service.php"><button type="submit"><span></span>Services</button></a>
<button type="button"><span></span>Tips</button>
</div>

</body>
<footer>
<div class="copy">&copy; 2023 Developer</div>
<div class="links">
      <span>Social Links</span>
      <a href="#">facebook<i class="fab fa-facebook"></i></a>
	  
      <a href="#">twitter<i class="fab fa-twitter"></i></a>
      <a href="#">instagram<i class="fab fa-instagram"></i></a>
	  <p>Call: (011)-523-3678<br>
	  WhatApp: 071-523-3648
	  </p>
	  
    </div>
</footer>
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


//slide slow
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  
   let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
   for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}



</script>

</html>