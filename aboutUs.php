<?php
session_start();?>
<html>
<head>
<style>
     body{
        margin: 0;
	padding: 0;
	background: #ccc;
	
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
p{
font-size: 50px;
text-align: center;
}
.border{
width: 1180px;
height: 100px;
background-color: #C0C0C0;
color: #000000;
font-family: verdana;
padding-left: 25px;
margin-left:30px;

}
.border1{
height: 180px;
width: 1180px;
background-color: #E5E4E2;
color: #000000;
font-family: verdana;
padding-left: 30px;
margin-left:30px;
}


a:link{
color: #fff;
text-decoration: none;
}
</style>
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

<p>About Us</p>
<div class="border">
<br>
<b>About Salon Story</b><br>

<br>
Below is a description of our mandate, mission and vision.Please take a look at them to better understand us. 
</div>


<br><br>
<div class="border1">
<br>
<b>Our vision</b>
<br></br>
Our main aim is to satisfy our customers needs and ensure that we deliver the perfect service as promised.
The aim of a salon application is to provide a platform for customers to book appointments, manage their schedules, view services and 
prices, communicate with salon staff, and leave reviews. The application may also offer loyalty programs, 
discounts, or promotions to enhance customer engagement and retention. From the perspective of the salon or its management, the 
application can help track performance metrics, and gather valuable customer insights.
</div>
<br><br>
<div class="border1"><br>
<b>Our Mission</b>
<br><br>
We are commitedd to providing functional and modern hairstyles that are long lasting and enable quality beauty. Salon Story application 
can improve customer satisfaction and change salon operations by providing a convenient platform for booking appointments, manage their 
schedules, view services and prices. Overall, our app can provide significant benefits to both customers and salon owners, leading to 
greater satisfaction, loyalty, and business success.
</div>
<br><br>


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