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
	.abc{
		background-color:#ccffcc;
		width:50%;
		margin-left:20%;
		height:40%;
	}
	</style>
	</head>
	<body>
	<center><h1>TOURISM SYSTEM</h1></center>
     <div style="margin: 40px;padding: 10px; text-align: center;">
     <form method="POST" action='#'>
       <fieldset class="abc">
         <legend>Place and Packages</legend>
         <table>
             <tr>
                <td>Place Name: </td>
                <td><input type="text" name="place_name" pattern="[A-Za-z]+" required></td>
             </tr>
			 <br>
             <tr>
                <td>No of Days: </td>
                <td><input type="text" name="total_days"/></td>
             </tr>
<br>			 
			 <tr>
                <td>Amount: </td>
                <td><input type="number" name="amount"/></td>
             </tr>  
         </table>
       
	   
            
        
	   <div style="margin-top: 20px; padding: 10px;text-align: center;">
           <Button type="submit" name="save">Submit</button>
       </div>  
     </form>
	 
	 <form method="post" action="displayplace.php">
	 <Button type="submit" name="display">Display</button>
	 </fieldset>
	 </form>
	 <?php
if(isset($_POST['save']))
{
	error_reporting(1);
	include("config.php");
	
	{
		
		$place_name=$_POST['place_name'];
		$total_days=$_POST['total_days'];
		$amount=$_POST['amount'];
		
		
			 {
		

		$query = "insert into package(place_name,total_days,amount) values('".$place_name."','".$total_days."','".$amount."')";
           
            mysqli_query($con,$query) or die(mysqli_error($con));
		
		
		echo "<script>
				alert('record added Successfully.');
			</script>";
			echo "<script> location.href='place1.php'; </script>";
			}
			
	}
}
?>
<p><a href="home1.php">Home Page</a></p>
     </div>
  </body>
</html>
