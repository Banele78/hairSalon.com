<?php include('serverUpload.php') ?>

<html>
<head>

</head>
<body>
<?php
$nameEr="";
$CostEr="";
$CatagoryEr="";
$timeEr="";


?>
<div class="header">
  	<h2>Hairstyle information manager</h2>
  </div>
  <div class="header">
  <p class="error">*Required field</p>
  </div>
	
	
  <form method="post" action="uploadimg.php" enctype="multipart/form-data">
  	
  	<p>
  	  <label> <span class="error">*</span><b>Hairstyle Name:</b> </label>
  	  <input type="text" name="name" value="<?php echo $name; ?>" placeholder="Enter Name">
	 <span class="error"><?php echo $nameEr; ?></span>
  	</p>
	
  	<p>
  	  <label> <span class="error">*</span><b>Cost:</b></label>
  	  <input type="text" name="cost" value="<?php echo $cost; ?>" placeholder="Enter Cost">
	  <span class="error"><?php echo $CostEr; ?></span>
  	</p>
	
  	<p>
  	  <label> <span class="error">*</span><b>Catagory:</b></label>
  	  <input type="text" name="catagory" value="<?php echo $catagory; ?>" placeholder="Enter Catagory">
	  <span class="error"><?php echo $CatagoryEr; ?></span>
  	</p>

  	<p>
  	  <label> <span class="error">*</span><b>time it takes:</b></label>
  	  <input type="text" name="time" value="<?php echo $time; ?>" placeholder="Enter time">
	   <span class="error"><?php echo $timeEr; ?></span>
  	</p>
	
	<br>
	<div class="input-group">
  	  <label><b>Hairstyle pic:</b></label>
  	  <input type="file" name="uploadfile" value=""/>
  	</div>
	<br>
	
	<br>
  	<div class="input-group">
	<label></label>
  	  <button type="submit" class="btn" name="reg_user">Submit</button>
	   <button onclick="document.location='register.php'">Reset</button>
  	</div>
	
	  
               <div class="popup">
               <input type="button" value="Edit"  onclick="myFunctionName()" >
               
            <span class="popuptext" id="myPopup">Hairstyle name...<input type="text" value="" name="id">
            <input type="text" value="" name="name">
            <input type="submit" value="Change" name="Button_Name" >
        </span>
          </div>
               
  
  </form>
</body>
</html>