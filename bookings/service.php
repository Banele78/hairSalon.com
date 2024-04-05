<?php include('serverService.php') ?>

<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/hairSalon/clientSide/css/serviceStyle.css">
<link rel="stylesheet" href="/hairSalon/clientSide/css/navbar.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
     integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<div id="myNavbar">
<div class="toggle_btn">
<i ></i>
</div>
<div class="dropdown_menu "></div>


</div>

<h1>Check out some of the most<br> popular styles </h1> 

<!-- fetch data from the database and display it-->
<div class="container">
<?php

while($row=mysqli_fetch_assoc($result)){
  $id=$row['id'];
?>
<div class="image">
<a href="style.php?id=<?php echo $id;?>"><img src="/hairSalon/clientSide/hairstyleImg/<?php echo $row['image']; ?>" class="iamge-inside" ></a>
<div class="bottom-left"><span class="image-texts"><?php echo $row['name']; ?>
</span><br>R<?php echo $row['cost']; ?></div>

</div>
  
<?php

}
?>

</div>




<br><br>

<!--<div>
<form>
  <input type="submit" value="View all" class="button">
</form>
</div>-->
<script src="/hairSalon/clientSide/navbar.js"></script>
<script src="/hairSalon/clientSide/footer.js"></script>
</body>

</html>