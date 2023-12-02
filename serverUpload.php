<?php
session_start();

// initializing variables
$name = "";
$cost = "";
$catagory="";
$time="";
$terms="";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'client');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $cost = mysqli_real_escape_string($db, $_POST['cost']);
  $catagory = mysqli_real_escape_string($db, $_POST['catagory']);
  $time = mysqli_real_escape_string($db, $_POST['time']);
   
	$filename=$_FILES["uploadfile"]["name"];
	$tempname=$_FILES["uploadfile"]["tmp_name"];
	

$folder="./hairstyleImg/".$filename;

 
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM hairstyletype WHERE name='$name' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['name'] === $name) {
      array_push($errors, "Username already exists");
    }

  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	

  	$query = "INSERT INTO hairstyletype (name, cost, catagory, timeittake,image) 
  			  VALUES('$name', '$cost', '$catagory','$time','$filename')";
  	mysqli_query($db, $query);
	move_uploaded_file($tempname,$folder);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}

//show image info
$get_user="SELECT * FROM hairstyletype";
$result=mysqli_query($db,$get_user);

//Update image info 
  if(isset($_POST['Button_Name'])){
	

  $id= mysqli_real_escape_string($db, $_POST['id']);
  $name = mysqli_real_escape_string($db, $_POST['name']);

	$query="UPDATE hairstyletype SET name='$name' WHERE id='$id'";
	$query_run=mysqli_query($db,$query);

	if ($query_run){
		$_SESSION['status']="Not Updated";
    header("Location: dataAdmin.php");
	}else{
		$_SESSION['status']="Not Updated";
		
	}
  }
?>