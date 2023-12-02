<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
// initializing variables
$random=rand(100000,999999);
$expirationTimestamp = date('Y-m-d H:i:s', strtotime('+1 hour'));
$Email = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'client');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $Email = mysqli_real_escape_string($db, $_POST['Email']);
   

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM information WHERE Email='$Email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  if(empty($Email)){
    $notFound="Please enter email address";
  }else{
    if ($user) { // if user exists
    

      if ($user['Email'] === $Email) {
        
        $query="UPDATE information SET reset='$random',  expirationTimestamp='$expirationTimestamp' WHERE Email='$Email'";
        $query_run=mysqli_query($db,$query);
        if ($query_run){
          $_SESSION['Email']=$user['Email'];
          
          header("Location: EnterPin.php");
        }else{
          $_SESSION['status']="Not Updated";
          
        }
  
        
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
  <h1>Reset passcode</h1>
  <p>Your passcode is $random. You can use it to reset your HairSalon password. This code expires in 1 hour.<p>
  
  </html>";
  
  if ($mail->send()) {
      echo 'Email sent successfully!';
  } else {
    //$notFound='Email sending failed. Error: ' . $mail->ErrorInfo;
      $notFound="Please enter email address";
  
  }
  
  
  
    
  
      }
    }else{
      $notFound="Email address not found";
    }

  }
  

  
}


?>