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
      <div id="myNavbar">
<div class="toggle_btn">
<i ></i>
</div>
<div class="dropdown_menu "></div>


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

      <script src="/hairSalon/clientSide/navbar.js">

  
</script>
   
    </html>
  </body>
</html>
