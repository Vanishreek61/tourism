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
         <legend>Hotels</legend>
         <table>
             <tr>
                <td>Hotel Name: </td>
                <td><input type="text" name="hotel_name" pattern="[A-Za-z]+" required></td>
             </tr>
             <tr>
                <td>Address: </td>
                <td><input type="text" name="address" pattern="[A-Za-z]+" required></td>
             </tr>  
			 <tr>
                <td>Contact Number: </td>
                <td><input type="tel" name="phone" pattern="[0-9]{4}[0-9]{6}" title="please enter valid phone number"></td>
             </tr>  
			 <tr>
                <td>NO.of.Days: </td>
                <td><input type="text" name="no_of_days"/></td>
             </tr>  
			 <tr>
                <td>Amount: </td>
                <td><input type="number" name="amount"/></td>
             </tr>  
         </table>
       
	   
            
        
	   <div style="margin-top: 20px; padding: 10px;text-align: center;">
           <Button type="submit" name="save">Submit</button>
       </div>  
     </form>
	 <form method="post" action="displayhotel.php">
	 <Button type="submit" name="display">Display</button>
	 </fieldset>
	 </form>
	 <?php
if(isset($_POST['save']))
{
	error_reporting(1);
	include("config.php");
	
	{
		
		$hotel_name=$_POST['hotel_name'];
		$address=$_POST['address'];
		$phone=$_POST['phone'];
		$no_of_days=$_POST['no_of_days'];
		$amount=$_POST['amount'];
		
		
			 {
		

		$query = "insert into hotel(hotel_name,address,phone,no_of_days,amount) values('".$hotel_name."','".$address."','".$phone."','".$no_of_days."','".$amount."')";
           
            mysqli_query($con,$query) or die(mysqli_error($con));
		
		
		echo "<script>
				alert('record added Successfully.');
			</script>";
			echo "<script> location.href='stay1.php'; </script>";
			}
			
	}
}
?>
     </div>
	 <p><center><a href="home1.php">Back Home Page</a></center></p>
  </body>
</html>
