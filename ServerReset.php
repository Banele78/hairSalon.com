<?php
session_start();

// initializing variables

$Password="";
$RePassword="";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'client');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  
   $Password = mysqli_real_escape_string($db, $_POST['Password']);
   $RePassword=mysqli_real_escape_string($db, $_POST['RePassword']);
   
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM information WHERE Email='$_SESSION[Email]' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    
    if (empty($Password)) {
    if($user['Email']==$_SESSION['Email']){
       
    $error="Please insert password";
}
  }else if($Password!==$RePassword){
   
  
      $errors="Password does not match";
 

  }else{
        
    //$password = md5($password_1);//encrypt the password before saving in the database
    $hashedPassword=password_hash($Password,PASSWORD_DEFAULT);

    $query="UPDATE information SET user_password='$hashedPassword' WHERE Email='$_SESSION[Email]'";
    $query_run=mysqli_query($db,$query);

    if ($query_run){
        
        $_SESSION['success'] = "You are now logged in";
        header("Location: BHlogin.php");
      }else{
        $_SESSION['status']="Not Updated";
        
      }
  }
}

  // Finally, register user if there are no errors in the form
 
}
?>