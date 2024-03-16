<?php
session_start();
if(isset($_SESSION['admin']))
{
	$admin=$_SESSION['admin'];
}
	?>
	<html>
	<head>
	<title>TOURISM</title>
	<style>
	.button {
  background-color:#ff99ff;
  border:1px solid black;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  height:10%;
 
  
}
h1{
	text-align:center;
	color:white;
}
body
{
	background-color:#cc6699;
	background-image:url("img2.jpg");
	background-size:1600px,800px;
}
	</style>
	</head>
	<body>
	<h1>TOURISM SYSTEM</h1>
	<div>
	<form method="post" action="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<button type="submit" class="button" name="userdetails"><a href="displayuser.php">User details</a></button>
	&nbsp;&nbsp;
	
	<button type="submit" class="button" name="place"><a href="place1.php">Place and Package</a></button>
	&nbsp;&nbsp;
	
	<button type="submit" class="button" name="hotel"><a href="stay1.php">Stay details</a></button>
	&nbsp;&nbsp;
	</form>
	</div>
	<p><center><a href="index.php">Back</a><center></p>
	</body>
	</html>