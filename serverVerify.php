<?php
session_start();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'client');

// REGISTER USER

  // receive all input values from the form
  
  $email=$_GET['id'];
  $Email="nhlapob78@gmail.com";
  $name="Banel";

  if (isset($_GET['id'])) {
    $hashed_email =mysqli_real_escape_string($db, $_GET['id']);;
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM information WHERE hashed_email='$hashed_email'  LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  
  
  if(mysqli_num_rows($result) == 1) {
    $user = mysqli_fetch_assoc($result);
    $message="account succussfully verified";
    
    $query="UPDATE information SET verified='1' WHERE hashed_email='$hashed_email'";
    $query_run=mysqli_query($db,$query);
  }else {
    
    $message = "Email address not found";
}

}else{
    $message="Email not provided";
}
 

?>