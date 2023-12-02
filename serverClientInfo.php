<?php

$db=mysqli_connect('localhost', 'root','','client');

if(!$db){
	die("Connect error");
}

$get_user="SELECT * FROM information";
$result=mysqli_query($db,$get_user);



?>