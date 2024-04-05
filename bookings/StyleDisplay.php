<?php
session_start();?>
<html>
    <head>
    <link rel="stylesheet" href="styleStyle.css">
    </head>

<body>
<?php

$db=mysqli_connect('localhost', 'root','','client');

if(!$db){
	die("Connect error");
}

//acess to the time slot table


if(isset($_POST['input'])){
    
    $input=$_POST['input'];

   
	$get_times = "SELECT * FROM time_slots WHERE appointment_date LIKE '{$input}%'";
	$result_time=mysqli_query($db,$get_times);
	
	if(mysqli_num_rows($result_time)>0){
       
		while($t=mysqli_fetch_assoc($result_time)){
			if($t['number']<=0){
			?>
	
			<button class="time-button" value="<?php echo $t['start_time']?>" disabled>
			<?php echo $t['start_time']?> </button>
			<?php
			}else{?>
<button class="time-button" value="<?php echo $t['start_time']?>">
			<?php echo $t['start_time']?> </button>

<?php
			}
			}
		
    }else{
        echo "<h6 class='text-danger text-center mt-3'>No data found</h6>";
    }


}



?>

</body>
</html>