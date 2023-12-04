<?php include('serverbookings.php') ?>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
     integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />


<link rel="stylesheet" href="css/bookStyle.css">
<link rel="stylesheet" href="css/navbar.css">
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
 
<div class="box">
<div class="form">
<form method="post" action="book.php" enctype="multipart/form-data">
<p>Create account</p>
<div   class="error"><?php if (isset($nameEr)) { echo $nameEr; } ?></div>
  <label for="fname">Name</label><br>
  <input type="text" id="fname" name="Name" value="<?php echo $Name; ?>" placeholder="Enter Name"><br><br>
  
  
  <div   class="error"><?php if (isset($emailEr)) { echo $emailEr; } ?></div>
  <label for="lname">Email</label><br>
  <input type="email" id="lname" name="Email" value="<?php echo $Email; ?>" placeholder="Enter Email"><br><br>
  
 <div   class="error"><?php if (isset($phoneEr)) { echo $phoneEr; } ?></div>
   <label for="lname">PhoneNo</label><br>
  <input type="text" id="lname" name="PhoneNo" value="<?php echo $PhoneNo; ?>" placeholder="Enter Phone number"><br><br>

  <div   class="error"><?php if (isset($passwordEr)) { echo $passwordEr; } ?></div>
   <label for="password">Password</label><br>
  <input type="password" id="password" name="Password" value="<?php echo $Password; ?>" placeholder="Enter password"
  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"><br><br>

  <div   class="error"><?php if (isset($passwordErs)) { echo $passwordErs; } ?></div>
   <label for="lname">Confirm password</label><br>
  <input type="password" id="confirm-password" name="Conpassword" value="<?php  ?>" placeholder="confirm password"
   oninput="checkPasswords()">

  <span id="password-error" style="display: none; color: red"
            >Passwords do not match.</span
          ><br><br>
          <div   class="error"><?php if (isset($tsCsEr)) { echo $tsCsEr; } ?></div>
          <input type="radio" name="tsCs" style="height:auto;  width:10px" value="accepted">
          <lable for="tsCs"><a href="termsandconditions.php" style="text-decoration: none">
          Terms and Conditions</a></label>
        
          <br>
            <br>
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

// function to check if the two passwords match
function checkPasswords() {
              var password = document.getElementById("password");
              var confirm_password =
                document.getElementById("confirm-password");
              var password_error = document.getElementById("password-error");

              if (password.value != confirm_password.value) {
                password_error.style.display = "inline";
              } else {
                password_error.style.display = "none";
              }
            }
</script>
</html>