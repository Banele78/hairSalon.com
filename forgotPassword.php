<?php include('serverForgotPassword.php') ?>
<html>
<head>
<link rel="stylesheet" href="css/bookStyle.css">

<style>
.box{
  margin-top:110px;
}
  </style>
</head>

<body>

<div class="box">
<div class="form">
<form method="post" action="forgotPassword.php" enctype="multipart/form-data">


  
  <div   class="error"><?php if (isset($notFound)) { echo $notFound; } ?></div>
  <label for="lname">Email</label><br>
  <input type="text" id="email" name="Email" value="<?php echo $Email; ?>" placeholder="Enter Email"><br><br>
  
  
  <input type="submit" value="Next" class="button" name="reg_user">
</form>
</div>
</div>



</body>
<script>

</script>
</html>