<?php
session_start();?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
     integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="css/contactStyle.css">
<link rel="stylesheet" href="css/navbar.css">

</head>
<body >
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
