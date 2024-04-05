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
      <link rel="stylesheet" href="css/navbar.css">
     
<style>
 

</style>

</head>

<body>
<div  id="myNavbar">

<div class="toggle_btn">
<i  class="fa-solid fa-bars" ></i>
</div>
<div class="dropdown_menu "></div>

 </div>

<div>

</div>


<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
  
    <img src="3.webp" >
	
	
  </div>

 

  <div class="mySlides fade">
    
    <img src="1.webp" >
  
</div>
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
</div>

<div class="container">
<!--first box-->
<div class="box">
<div class="icon">
<i class="fa fa-clock-o" aria-hidden="true"></i>
</div>

<div class="content">
<h3>Avoid the long<br> wait</h3>
<p>book a amazing experiance with us now</p>
<br>
<a href="hairstyle.php">Book now</a>
</div>
</div>

<!--second box-->
<div class="box">
<div class="icon">
<i class="fa fa-map-marker" aria-hidden="true"></i>
</div>

<div class="content">
<h3>Find your nearest<br> Salon</h3>
<p>Quickly make your next<br>appointment in-store. </p>
<br>
<a href="a">Find store</a>
</div>
</div>

<!--third box-->

</div>

<div><p>jsajsha</p></div>

<script src="/hairSalon/clientSide/navbar.js"></script>
<script src="/hairSalon/clientSide/footer.js"></script>

<script >
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
  setTimeout(showSlides, 7000); // Change image every 2 seconds
}

</script>
</body>



</html>