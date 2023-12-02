<?php
session_start();?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
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
#sp{
width: 690px;
height: 550px;
border: 1px solid black;
float: right;
}
img{
float: left;
}
.button {
  background-color: black;
  border: none;
  color: white;
  padding: 10px 50px;
   text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 16px;
}
input , textarea{
border: 2px solid #000;
border-radius: 6px;
box-sizing: border-box;
}
p{
font-size:45px;
}
.border{
width: 1216px;
height: 30px;
color: white;
background-color: #d1e0e0;
padding: 2px;
}
</style>
</head>
<body bgcolor="lightgrey">
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

<br>
<img src="r6.jpg" width="500px" height="550px"></img>
<div id="sp">
<center>
<p><b>Contact Us</b></p></center>
<form>
<table>
<tbody>
<tr>
<td>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Full Name:<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input size="41" required>
</td>
<td>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<i class="fa fa-phone fa_custom">&phone;</i>&nbsp;Call Us <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
065 980 3536, 067 930 9431
</td>
</tr>
</tbody>
</table>
<br><br>
<table>
<tbody>
<tr>
<td>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="email">Email Adress:</label><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" size="41" title="Enter valid email" id="email" required />
</td>
<td>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<i class="fa fa-map-marker">&#x2316;</i>&nbsp;Location<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
1314 3rd Street, 27 Suite <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Johannesburg, 2101
</td>
</tr>
</tbody>
</table>
<table>
<tbody>
<tr>
<td>
<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Message
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea cols="40" rows="6" required></textarea>
</td>
<td>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<i class="fas fa-globe">&#x1F310;</i>&nbsp;Website<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
www.salonstory.com</td>
</tr>
</tbody>
</table>
<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="button"><a href="login2.html" style="text-decoration:none">Contact Us</a></button>
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
