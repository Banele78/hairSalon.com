<?php include('serverClientInfo.php') ?>
<html>
<head>

</head>
<body>
<div class="container">
<table>
<tr>
  <th>Name</th>
  <th>Email</th>
  <th>PhoneNo</th>
</tr>

<tr>
<?php
 while($row=mysqli_fetch_assoc($result)){
	 
 
?>
  <td><?php echo $row['Name']; ?></td>
   <td><?php echo $row['Email']; ?></td>
  <td><?php echo $row['PhoneNo']; ?></td>
</tr>
<?php
 }
 ?>
</table>

</div>
</body>
</html>