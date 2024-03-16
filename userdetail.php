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
     <div style="margin: 80px;padding: 10px; text-align: center;">
     <form method="POST" action='#'>
       <fieldset class="abc">
         <legend>Enter Tourist Details </legend>
         <table>
             <tr>
                <td>Name: </td>
                <td><input type="text" name="name" pattern="[A-Za-z]+" required></td>
             </tr>
			 
			 <tr>
			 <tr>
                <td>Age: </td>
                <td><input type="number" name="age" pattern="[0-9]+" required></td>
             </tr>
			 <tr>
                <td>Gender: </td>&nbsp;
                <td><input type="radio" name="gender" id="male" <?php if (isset($gender) && $gender=="male") echo "checked";?>
value="male"></td><td>Male</td>
<td><input type="radio" name="gender" id="female"<?php if (isset($gender) && $gender=="female") echo "checked";?>
value="female"></td><td>Female</td>
             </tr>
			 <tr>
                <td>Contact Number: </td>
                <td><input type="tel" name="phone" pattern="[0-9]{4}[0-9]{6}" required></td>
             </tr>
             <tr>
                <td>Address: </td>
                <td><input type="text" name="address" pattern="[A-Za-z]+" required></td>
             </tr> 
            <tr>
                <td>Place: </td>
                <td><select name="place">
				<?php
									include 'config.php';
									$query1="select * from package";
									$result=mysqli_query($con,$query1);
									$count1=mysqlI_num_rows($result);
									if($count1>0)
									{
										while($row=mysqli_fetch_array($result))
										{
											$id=$row[0];
											$place_name=$row[1];
											$total_days=$row[2];
											$amount=$row[3];
											
									
									?>
										<option value="<?php echo $place_name; ?>"><?php echo $place_name; ?></option>
										
										<option value="<?php echo $total_days; ?>"><?php echo $total_days; ?></option>
										<option value="<?php echo $amount; ?>"><?php echo $amount; ?></option>
										<?php
										}
										}
										?>
										</select>
				</td>
             </tr>	
<tr>
                <td>Visiting date: </td>
                <td><input type="date" name="visit_date"/></td>
             </tr>
<tr>
                <td>Stay Hotel: </td>
                <td><select name="hotel">
				<?php
									include 'config.php';
									$query1="select * from hotel";
									$result=mysqli_query($con,$query1);
									$count1=mysqlI_num_rows($result);
									if($count1>0)
									{
										while($row=mysqli_fetch_array($result))
										{
											$id=$row[0];
											$hotel_name=$row[1];
											$address=$row[2];
											
											$no_of_days=$row[3];
											$amount=$row[4];
											
									
									?>
										<option value="<?php echo $hotel_name; ?>"><?php echo $hotel_name; ?></option>
										<option value="<?php echo $address; ?>"><?php echo $address; ?></option>
										<option value="<?php echo $no_of_days; ?>"><?php echo $no_of_days; ?></option>
										<option value="<?php echo $amount; ?>"><?php echo $amount; ?></option>
										<?php
										
										}
										}
										?>
										</select>
				</td>
             </tr>			 
			 
         </table>
      
	   
            
        
	   <div style="margin-top: 20px; padding: 10px;text-align: center;">
           <Button type="submit" name="save">Submit</button>
       </div>
 </fieldset>	   
     </form>
	 
	 <?php
if(isset($_POST['save']))
{
	error_reporting(1);
	include("config.php");
	
	{
		
		$name=$_POST['name'];
		$age=$_POST['age'];
		$gender=$_POST['gender'];
		$phone=$_POST['phone'];
		$address=$_POST['address'];
		$place=$_POST['place'];
		$visit_date=$_POST['visit_date'];
		$hotel=$_POST['hotel'];
		
		
			 {
		                          $query2="select place_name from package where place_name='".$place."'";
									$result2=mysqli_query($con,$query2);
									$count2=mysqlI_num_rows($result2);
									if($count2>0)
									{
										while($row2=mysqli_fetch_array($result2))
										{
											$place=$row2[0];
										}
									}

		$query = "insert into user(name,age,gender,phone,address,place,visit_date,hotel) values('".$name."','".$age."','".$gender."','".$phone."','".$address."','".$place."','".$visit_date."','".$hotel."')";
           
            mysqli_query($con,$query) or die(mysqli_error($con));
		
		
		echo "<script>
				alert('record added Successfully.');
			</script>";
			echo "<script> location.href='userdetail.php'; </script>";
			}
			
	}
}
?>
<p><a href="index.php">Go Back</a></p>
     </div>
	 
  </body>
</html>
