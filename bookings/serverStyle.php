<?php
session_start();
$db=mysqli_connect('localhost', 'root','','client');

if(!$db){
	die("Connect error");
}
//access to the hairstyle type table
$id=$_GET['id'];
$get_style="SELECT * FROM hairstyletype WHERE id=$id";
$get=mysqli_query($db,$get_style);

//access to the date slots table
$get_dates="SELECT * FROM date_slots";
$result_date=mysqli_query($db,$get_dates);

$get_dates2="SELECT * FROM date_slots";
$result_date2=mysqli_query($db,$get_dates2);




//acess to the time slot table

if(isset($_POST['name'])){
    $name=$_POST['name'];
$email=$_POST['email'];
$phoneno=$_POST['phone'];

    $sql="INSERT INTO appointments(Name,Email,PhoneNo) VALUES ('$name','$email','$phoneno')  ";
    mysqli_query($db, $sql);
}


?>	