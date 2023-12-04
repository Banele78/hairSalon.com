<?php
session_start();?>
<html>
<head>
<link rel="stylesheet" href="css/aboutStyle.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
     integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />

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