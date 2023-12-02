<?php include('serverlogin.php') ?>

    <!DOCTYPE html>
    <html>
      <head>
        <title>Login Page</title>
        <style>
          body {
            text-align: center;
            font-family: Arial, sans-serif;
            background-color: #ccc;
            margin: 0;
	padding: 0;
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
    <li><a href="BHlogin.php" class="logIn"><?php echo "Log in"; ?></a></li>
    <?php }else{?>
      <li><a href="#" class="logIn"><?php echo "Hi". " ".$_SESSION["username"]; ?></a></li>
      <?php }?>
 </ul>
 </div>
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
  </body>
</html>
