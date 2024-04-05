<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;


$db=mysqli_connect('localhost', 'root','','client');

if(!$db){
	die("Connect error");
}

if(isset($_SESSION["username"])){
    if(isset($_POST['selectedData'])){
        
        //get hairstyle name      
    $id=$_POST['name'];
    $get_style="SELECT * FROM hairstyletype WHERE image='$id'";
    $get=mysqli_query($db,$get_style);
    $s=mysqli_fetch_assoc($get);
    $hairstyle=$s['name'];
   
  $hairstyl="Banele";


    $name=$_SESSION["username"];
$email=$_SESSION["email"];
$phoneno= $_SESSION["phoneNo"];
$date=$_POST['selectedData'];
$time=$_POST['selected_Data'];


//code to send email to user once succesfully booked an appointment
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
$mail->addAddress($email, $name);
$mail->Subject = 'hairSalon';
$mail->isHTML(true);
$mail->Body = "<html>
<h1>Hello $name</h1>
<p>Your appointment date is on $date at $time please be on time thank you.<p>
</html>";

if ($mail->send()) {
    //Insert values to the appointment table
    $sql="INSERT INTO appointments(Name,Email,PhoneNo,appointment_date,appointment_time,hairstyle,appointment_status)
     VALUES ('$name','$email','$phoneno','$date','$time','$hairstyle','pending') ";
    mysqli_query($db, $sql);
   

  //When appointment is successfully booked the number of hair dresses decreases by 1
$get_times = "SELECT number FROM time_slots WHERE appointment_date='$date' and start_time='$time'";
$result_time=mysqli_query($db,$get_times);

if ($result_time) {
$t = mysqli_fetch_assoc($result_time);

if ($t['number'] > 0) {
    $add = $t['number'] - 1;

    $Update="UPDATE time_slots SET number= $add WHERE appointment_date='$date' and start_time='$time'" ;
    mysqli_query($db, $Update);
    
    echo "Subtraction successful. New value: $add";
} else {
    echo "No records found for the specified date.";
}
} else {
echo "Error: " . mysqli_error($db);

}
    
//header("Location: .php");
    echo 'Email sent successfully!';
    $_SESSION['InsertedS']="Thank you for booking with us.";
    $_SESSION['InsertedE']=" Please check your email for your booking confirmation.";
} else {
    echo 'Email sending failed. Error: ' . $mail->ErrorInfo;
    $_SESSION['InsertedS']="Failed to book an appointment.";
    $_SESSION['InsertedE']="please try agian.";
}

    }else{
        $error="Please select a date";
     }
}else{
    header("Location: BHlogin.php");
   
}




?>	