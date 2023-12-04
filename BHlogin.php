<?php include('serverlogin.php') ?>

    <!DOCTYPE html>
    <html>
      <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
     integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
       
        <style>
          body {
           
            background-color: #ccc;
            margin: 0;
	padding: 0;
          }

          .body{
            text-align: center;
          }
          h1 {
      color: #000;
      font-family: "Times New Roman", Times, serif;
    }
          label {
            display: block;
            margin-bottom: 10px;
          }
          input[type="text"],
          input[type="password"] {
            width: 250px;
            padding: 5px;
            margin-bottom: 10px;
          }
          .forgot-password {
            color: blue;
            text-decoration: underline;
            margin-bottom: 10px;
            cursor: pointer;
          }
          .create-account {
            display: block;
            margin-top: 20px;
          }
         
        </style>
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
    <div><a href="BHlogin.php" class="logIn"><?php echo "Log in"; ?></a></div>
    <?php }else{?>
      <div><a href="#" class="logIn"><?php echo "Hi". ",".$_SESSION["username"]; ?></a></div>
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
 <div class="body">
 <h1>SALON STORY</h1>
    <p></p>
    <br />

    <img
      src="https://t4.ftcdn.net/jpg/01/96/07/43/240_F_196074365_AlruXARNe3SYD7tUgvtqvTh2g01eHthI.jpg"
    />
 
 
        <h1>Login Page</h1>
        <?php if (isset($error_message)) { echo "<p>$error_message</p>"; } ?>
        <form method="post" action="BHlogin.php" enctype="multipart/form-data">
          <label for="email">Email Address:</label>
          <input type="text" id="email" name="Email" value="<?php echo $Email; ?>" required />
          <label for="password">Password:</label>
          <input type="password" id="password" name="Password" required />
          <br/>
          <button type="submit" name="reg_user">Login</button>

         <a href="forgotPassword.php"> <p class="forgot-password">Forgot Password?</p></a>
        </form>
        <a href="book.php" class="create-account"
          >Create an Account</a
        >
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
  </body>
</html>
