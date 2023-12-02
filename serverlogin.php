<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
// initializing variables

$Email    = "";

$Password="";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'client');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $Email = mysqli_real_escape_string($db, $_POST['Email']);
   $Password = mysqli_real_escape_string($db, $_POST['Password']);
  

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM information WHERE Email='$Email'  LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  
  
  if(mysqli_num_rows($result) == 1) {
    $user = mysqli_fetch_assoc($result);
    if (password_verify($Password, $user["user_password"])) {
      if($user["verified"]==1){
        $_SESSION["username"] = $user["Name"];
        $_SESSION["email"] = $user["Email"];
        $_SESSION["phoneNo"] = $user["PhoneNo"];
        header("Location: service.php");
        exit();

      }else{
        require 'vendor/autoload.php';
        $hashed_email=$user['hashed_email'];
  $mail = new PHPMailer();
  // SMTP settings
  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com.';
  $mail->SMTPAuth = true;
  $mail->Username = 'nhlapob78@gmail.com';
  $mail->Password = 'lhql lsby sper cqnj';
  $mail->SMTPSecure = 'tls'; // Use TLS
  $mail->Port = 587; // TLS port (usually 587)
  
  // Email content
  $mail->setFrom('nhlapob78@gmail.com', 'Banele');
  $mail->addAddress($Email, '');
  $mail->Subject = 'hairSalon';
  $mail->isHTML(true);
  $mail->Body = "<html>
  <h1>Verify email address</h1>
  <p><a href=http://localhost/hairSalon/clientside/verify.php?id=$hashed_email>Click here</a> to verify  your account</p>
  
  </html>";
  
  if ($mail->send()) {
      echo 'Email sent successfully!';
  } else {
    //$notFound='Email sending failed. Error: ' . $mail->ErrorInfo;
      $notFound="Please enter email address";
  
  }
  header("Location: VerifyEmail.php");

      }
       
    } else {
        $error_message = "Invalid password";
    }
  }else {
    $error_message = " Email address not found";
}

  
 
}
?>