<?php
session_start();

$db = mysqli_connect('localhost', 'root', '', 'client');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $Reset = mysqli_real_escape_string($db, $_POST['reset']);
   

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM information WHERE Email='$_SESSION[Email]' and reset='$Reset' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    
    if ($user['reset'] === $Reset) {
        
        $currentTime = date('Y-m-d H:i:s');
    if ($currentTime > $user['expirationTimestamp']) {
        // Token has expired, prevent password reset
        // You can also delete or mark the token as expired in the database at this point
        echo "code has expired";
        $query="UPDATE information SET reset='1' WHERE Email='$_SESSION[Email]'";
        $query_run=mysqli_query($db,$query);
    } else {
        // Token is still valid; allow the user to reset the password
        header("Location: resetPassword.php");
    }
    
    }
    

}


}

    ?>