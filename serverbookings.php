<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
// initializing variables
$Name = "";
$Email  = "";
$PhoneNo="";
$Password="";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'client');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $Name = mysqli_real_escape_string($db, $_POST['Name']);
  $Email = mysqli_real_escape_string($db, $_POST['Email']);
   $PhoneNo = mysqli_real_escape_string($db, $_POST['PhoneNo']);
   $cleaned_phone_number = preg_replace('/\D/', '', $PhoneNo);
   $Password = mysqli_real_escape_string($db, $_POST['Password']);
   $con_password= mysqli_real_escape_string($db, $_POST['Conpassword']);
   if(isset($_POST['tsCs'])){
   $tsCs= mysqli_real_escape_string($db, $_POST['tsCs']);
  }
  
   

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM information WHERE Email='$Email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
    
    
    
      if(empty($Name)){
        $nameEr="name is required";
      }else if(empty($Email)){
        $emailEr="Enter an email address";
      }else if(empty($PhoneNo)){
        $phoneEr="Enter phone number";
      }else if(empty($Password)){
        $passwordEr="Enter password";
      }else if(!isset($tsCs)){
        $tsCsEr="Please read and accept ts & Cs";
       
      }
      else if($Password!==$con_password){
        $passwordErs="Passwords do not match";
      }else if ($user) { // if user exists
      
      if($user['Email'] ==$Email) {
        $emailEr= "email already exists";
      }
      $emailEr= "email already exists";
    }else if(strlen($cleaned_phone_number) != 10){
        $phoneEr="Please enter a valid phone number";

      }else{
        //$password = md5($password_1);//encrypt the password before saving in the database
        $hashedPassword=password_hash($Password,PASSWORD_DEFAULT);
        $hashed_email = hash('sha256',$Email);
      
        $query = "INSERT INTO information (Name, Email, PhoneNo, user_password ,hashed_email,verified,TsCs) 
              VALUES('$Name', '$Email', '$PhoneNo', '$hashedPassword', '$hashed_email','0','$tsCs')";
        mysqli_query($db, $query);
        
        $_SESSION['success'] = "You are now logged in";
      header('location: VerifyEmail.php');
      // Include PHPMailer autoload.php file
  require 'vendor/autoload.php';
  
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
      }

       

      
    

    // Finally, register user if there are no errors in the form
if (count($errors) == 0) {
  
}
  
}
?>