<?php include('serverPin.php') ?>
<html>
<head>
<link rel="stylesheet" href="css/bookStyle.css">
</head>
<style>
.box{
  margin-top:110px;
}
</style>
<body>

 
<div class="box">
<div class="form">
<form method="post" action="EnterPin.php" enctype="multipart/form-data">


  
  <div   class="error"></div>
  <label for="lname">Reset code</label><br>
  <input type="text" id="lname" name="reset" value="" placeholder="Enter reset code"><br><br>
  
 

  

  
  
  <input type="submit" value="Next" class="button" name="reg_user">
</form>
</div>
</div>



</body>

</html>