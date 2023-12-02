<?php
session_start();
$db=mysqli_connect('localhost', 'root','','client');

if(!$db){
	die("Connect error");
}

$get_user="SELECT * FROM hairstyletype";
$result=mysqli_query($db,$get_user);



  if(isset($_POST['Button_Name'])){
	$id=$P_POSt['id'];
	$name=$P_POSt['name'];

	$query="UPDATE hairstyletype SET cost='$name' WHERE id='$id'";
	$query_run=mysqli_query($db,$query);

	if ($query_run){
		$_SESSION['status']="Not Updated";
		header("Location: dataAdmi.php");
	}else{
		$_SESSION['status']="Not Updated";
		header("Location: dataAdmin.php");
	}
  }
	?>	