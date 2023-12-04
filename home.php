<?php
session_start();?>
<Doctype! html>
<html lang="en"> 
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content=IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Home page</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
     integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="css/homeStyle.css">
<style>
 

</style>

</head>

<body>
<div class="navbar" id="myNavbar">
<img src="https://t4.ftcdn.net/jpg/01/96/07/43/240_F_196074365_AlruXARNe3SYD7tUgvtqvTh2g01eHthI.jpg" class="left">
<ul>

 <li><a href="home.php">Home</a></li>
 <li><a href="service.php">Service</a></li>
   <li><a href="contact.php">Contact</a></li>
    <li><a href="aboutUs.php">About</a></li>
   
 </ul>
 <?php
    if(!isset($_SESSION["username"])){
    ?>
    <div><a href="BHlogin.php" class="login"><?php echo "Log in"; ?></a></div>
    <?php }else{?>
      <div><a href="#" class="login"><?php echo "Hi". " ".$_SESSION["username"]; ?></a></div>
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
    <div><?php echo "Hi". " ".$_SESSION["username"]; ?></div>
    <?php }?>
      </div>

</div>

<!--dropDown menu for mobile navbar-->
<div class="dropdown_menu ">
<li><a href="home.php">Home</a></li>
 <li><a href="service.php">Service</a></li>
   <li><a href="contact.php">Contact</a></li>
    <li><a href="aboutUs.php">About</a></li>
    <?php
    if(!isset($_SESSION["username"])){
    ?>
    <li><a href="BHlogin.php" ><?php echo "Log in"; ?></a></li>
    <?php }else{?>
      <li><a href="#" ><?php echo "Settings"; ?></a></li>
      <?php }?>

</div>
 </div>

<div>
<h1><b>Welcome to the Salon storys<b><h1>
</div>


<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
  
    <img src="girls.jpg" >
	
	
  </div>

  <div class="mySlides fade">

    <img src="pic5.webp">
   
  </div>

  <div class="mySlides fade">
    
    <img src="salon.jpg" >
  
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

//code to open and close the dropDown menu
const toggleBtn=document.querySelector('.toggle_btn');
const toggleBtnIcon=document.querySelector('.toggle_btn i');
const dropDownMenu=document.querySelector('.dropdown_menu');

toggleBtn.onclick=function(){
  dropDownMenu.classList.toggle('open');
  document.body.style.overflowY = dropDownMenu.classList.contains("open") ? "hidden" : "auto";
  const isOpen=dropDownMenu.classList.contains('open');
 

  //switch icons
  toggleBtnIcon.classList=isOpen
  ? 'fa-solid fa-xmark'
  : 'fa-solid fa-bars';
}



</script>

</html>