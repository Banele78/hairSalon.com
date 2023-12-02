<?php include('serverService.php') ?>

<html>
<head>
<style type="text/css">
body{
	margin: 0;
	padding: 0;
	background: #ccc;
	
}
.navbar{
	z-index: 999; /* Ensure the navigation bar is above other elements */
}
.navbar ul{
	list-style: none;
 	background:#CCC;
	padding: 0;
	margin:0; 
	text-align:center;
	 z-index: 999; /* Ensure the navigation bar is above other elements */
}

.navbar li{
	display: inline-block;
}

.navbar a{
	text-decoration: none;
	color:#fff;
	width:100px;
	display:block;
	padding:25px 20px;
	font-size:15px;
	text-transform: uppercase;
	font-weight: bold;
	text-align: center;
}
/* Page content */
.content {
  padding: 16px;
}

/* The sticky class is added to the navbar with JS when it reaches its scroll position */
.sticky {
  position:sticky;
  top: 0;
  width: 100%;
}

/* Add some top padding to the page content to prevent sudden quick movement (as the navigation bar gets a new position at the top of the page (position:fixed and top:0) */
.sticky + .content {
  padding-top: 60px;
}
/*end of navbar*/

h1{
	
	text-align:center;
}

.container{

	width: 1100px;
	height:300px;
	margin:20px auto;
	margin-left:220px;
}

.container .image{
	position: relative;
	width:265px;
	height:330px;
	background:black;
	float:left;
	margin:15px;
	border-radius:10px;
		box-sizing:border-box;
	overflow:hidden;
	
  background-size: cover; 
  background-position: center;
   display: flex; 
  align-items: left; 
  justify-content: left; 
  
}

.container .image .image-text{
	font-size: 28px;
  color: white;
  padding: 10px;
  margin-top:260px;
  font-weight: bold;
  
}

.container .image .image-texts{
	font-size: 19px;
}

/* Bottom left text */
.container .image .bottom-left {
  position: absolute;
  bottom: 0px;
  left: 0px;
  font-size: 25px;
  color: white;
  padding: 10px;
  margin-top:260px;
  font-weight: bold;
}

.button{
	border-radius:20px;
	width:180px;
	height:40px;
	margin-left:600px;
	border:none;
	color:black;
	align-items:center;
}
</style>
</head>

</html>