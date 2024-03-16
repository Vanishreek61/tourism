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
    background: #ffffcc;
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
	background:#c1c1d7;
}
.col-right {
    padding: 60px 30px;
    width: 50%;
    margin-left: 20%;
}
</style>
</head>
<body>
<div class="wrapper">
  <div class="container">
    <div class="col-left">
      <div class="login-text">
        <h2></h2>
        <p><br></p>
      </div>
    </div>
    <div class="col-right">
      <div class="login-form">
        <h2 align="center">Register Now</h2>
        <form method="POST" action="#">
          <p>
            <label>Username<span>*</span></label>
            <input type="text" name="name" placeholder="Username" pattern="[A-Za-z]+" required>
          </p>
		   <p>
            <label>Email<span>*</span></label>
            <input type="email" name="email" placeholder="Email" required>
          </p>
          <p>
            <label>Password<span>*</span></label>
            <input type="password" name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
          </p>
          <p>
		  </dl>
           <center> <input type="submit" name="submit" value="Register" /></center>
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
	
	$email=$_POST['email'];

	$sql = "select * from user_register where email='$email'";
	$result = mysqli_query($con,$sql);
	$count=mysqlI_num_rows($result);


	if($count>0)
	{
		
		echo "<script>
				alert('There is an existing account associated with this email.');
			</script>";
			echo "<script> location.href='register.php'; </script>";
	}
	else
	{
		$name=$_POST['name'];
		
		$email=$_POST['email'];
		
	    $password=$_POST['password'];
		
		
		
   $query = "insert into user_register(name,email,password) values('".$name."','".$email."','".$password."')";
           
           
            mysqli_query($con,$query) or die(mysqli_error($con));
		
		
		echo "<script>
				alert('Registeration Completed, Please Login.');
			</script>";
			echo "<script> location.href='login.php'; </script>";
		}
	}

?>
      </div>
    </div>
  </div>
  <div class="credit">
   <a href="login.php">Back</a>
  </div>
</div>
</body>
</html>