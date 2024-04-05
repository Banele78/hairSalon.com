<?php
session_start();?>
<!DOCTYPE html>
<html>
  <head>
    <style>
      body {
        background-image: url("https://img.freepik.com/premium-photo/beautiful-composition-spring-flowers-mothers-day-with-copy-space-text-generative-ai_834602-4272.jpg?size=626&ext=jpg&ga=GA1.1.386372595.1698537600&semt=ais");
        background-size: cover;
        background-repeat: no-repeat;
        font-family: sans-serif;
        color: blueviolet;
        text-align: center;
        padding-top: 40vh;
      }
      span {
        font-size: 22px;
        color: blueviolet;
        font-style: italic;
        font-weight: bolder;
      }
    </style>
  </head>
  <body>
    <span>
      <?php echo $_SESSION['InsertedS'];?><br>
      <?php echo $_SESSION['InsertedE'];?><br>
    <a href="home.php">Home</a></span>
  </body>
</html>
