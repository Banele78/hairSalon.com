<?php include('serverReset.php') ?>
<html>
<head>
<link rel="stylesheet" href="bookStyle.css">
</head>

<body>




 
<div class="box">
<div class="form">
<form method="post" action="resetPassword.php" enctype="multipart/form-data">


  
  <div   class="error"><?php if (isset($error)) { echo "$error"; } ?></div>
  <label for="lname">Password</label><br>
  <input type="text" id="password" name="Password" value="" placeholder="Enter password"
  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" ><br><br>
  
 

  <div   class="error"></div>
   <label for="password">confirm Password</label><br>
  <input type="text"  id="confirm-password" name="RePassword" value="<?php  ?>" placeholder="confirm password"
  oninput="checkPasswords()">
  <span id="password-error" style="display: none; color: red"
            >Passwords do not match.</span>
          
  <br><br>

  
  
  <input type="submit" value="Next" class="button" name="reg_user">
</form>
</div>
</div>



</body>

<script>

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