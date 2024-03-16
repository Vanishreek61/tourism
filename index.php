<?php
session_start();
?>
<html>
<head>
<title>TOURISM</title>
<style>
body{
	background-color:#66ffff;
	background-image:url("jog.jpg");
	background-size: 1600px 800px;
}
h1{
	text-align:center;
	color:#9900cc;
}
.button{
	background-color:blue;
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
<form action="index1.php" method="post">
<input type="submit" class="button" value="ADMIN"/>

</form>
<form action="user.php" method="post">
<input type="submit" class="button" value="USER"/>
</form>
</body>
</html>
