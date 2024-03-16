<?php
session_start();
?>
<!doctype html>
<html>
<head>
<title>TOURISM</title>
<link type="text/css" rel="stylesheet" href="new.css"/>
<style> 
.container {
    position: relative;
    width: 100%;
    max-width: 600px;
    height: auto;
    display: flex;
    background: pink;
    box-shadow: 0 0 5px red;
}
.wrapper {
    margin: 0 auto;
    width: 100%;
    max-width: 1140px;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
	background-image:url("img1.jpg");
	background-size: 1600px 800px;
}
.col-right {
    padding: 60px 30px;
    width: 50%;
    margin-left: -10%;
}
</style>
</head>
<body>
<div class="wrapper">
  <div class="container">
    <div class="col-left">
      <div class="login-text">
        <h2>WELCOME</h2>
        <p><br></p>
      </div>
    </div>
    <div class="col-right">
      <div class="login-form">
        <h2 align="center">Admin Login</h2>
        <form method="POST" action="#">
          <p>
            <label>Username<span>*</span></label>
            <input type="text" name="username" placeholder="Username or Email" required>
          </p>
          <p>
            <label>Password<span>*</span></label>
            <input type="password" name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="length should be minimum 8 characters" required>
          </p>
          <p>
		  </dl>
           <center> <input type="submit" name="submit" value="Sign In" /></center>
          </p>
          <p>
            <a href=""></a>
          </p>
        </form>
		<?php
if(isset($_POST['submit']))
{
	error_reporting(1);
	include("config.php");
	echo "<script>console.log('Hello')</script>";
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$sql = "select * from admin where username='$username' and password='$password'";
	$result = mysqli_query($con,$sql);
	$count=mysqlI_num_rows($result);


	if($count>0)
	{
		session_start();
		$_SESSION['admin']=$username;
		$id=$_SESSION['admin'];
		echo "<script>
				alert('Login Successful $id');
			</script>";
		echo "<script> location.href='home1.php'; </script>";
		if(!$_SESSION['admin'])
	{
		//Header("Location:home1.php"); //admin login page
		//exit;
	}
	}
	else
	{
		
		echo "<script>
				alert('Invalid username or Password');
				
			</script>";
	}
}
?>
      </div>
    </div>
  </div>
  <div class="credit">
   <a href="index.php">Back</a>
  </div>
</div>
</body>
</html>