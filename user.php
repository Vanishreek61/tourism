<?php
session_start();
?>
<html>
<head>
<title>TOURISM</title>
<style>
body{
	background-image:url("img5.jpg");
	background-size:1600px,800px;
}
h1{
	text-align:center;
	color:#9900cc;
}
.button{
	background-color:red;
	color:white;
	text-align:center;
	padding:15px;
	font-size:25px;
	
	width:250px;
	height:100px;
	margin-left:40%;

}
.form1{
	border: 1px solid #ccc;
}
</style>
</head>
<body>


<h1>TOURISM MANAGEMENT SYSTEM</h1>
<form action="login.php" method="post">
<p><center>You already registered?Please Login Here.</center></p>
<input type="submit" class="button" value="User Login"/>

</form>
<form action="register.php" method="post">
<input type="submit" class="button" value="User Register"/>
</form>
<p><center><a href="index.php">Back</a></center></p>
</body>
</html>
