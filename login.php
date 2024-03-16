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
	background:#FF99FF;
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
        <h2 align="center">Login</h2>
        <form method="POST" action="#">
          <p>
            <label>Email<span>*</span></label>
            <input type="email" name="email" placeholder=" Email" required>
          </p>
          <p>
            <label>Password<span>*</span></label>
            <input type="password" name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
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
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	$sql = "select * from user_register where email='$email' and password='$password'";
	$result = mysqli_query($con,$sql);
	$count=mysqlI_num_rows($result);


	if($count>0)
	{
		session_start();
		$_SESSION['admin']=$email;
		$id=$_SESSION['admin'];
		echo "<script>
				alert('Login Successful');
			</script>";
		echo "<script> location.href='userdetail.php'; </script>";
		if(!$_SESSION['admin'])
	{
		//Header("Location:userdetail.php"); //admin login page
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
   <a href="user.php">Back</a>
  </div>
</div>
</body>
</html>