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
	table.center {
            margin-left: auto;
            margin-right: auto;
        }
		body{
			background-color:#ccccff;
		}
	</style>
	</head>
	<body>
	<h2><center>Hotel Details</center></h2>
	<table border="2px solid black" class="center" width="50%">
                                <thead>
                                    <tr>
                                        <th scope="col">SL.NO</th>
                                        <th scope="col">Hotel Name</th>
										<th scope="col">Address</th>
										<th scope="col">Contact Number</th>
                                        <th scope="col">No.of Days</th>
                                        <th scope="col">Amount</th>
										
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php
									include 'config.php';
									$sql1 = "select * from hotel";
									$result1 = mysqli_query($con,$sql1);
									$num1=mysqlI_num_rows($result1);
									$sl=0;
									if($num1 > 0)
									{ 
										while($row1 = mysqli_fetch_array($result1))
										{ 
											$sl+=1;
											$id=$row1[0];
											$hotel_name=$row1['hotel_name'];
											$address=$row1['address'];
											$phone=$row1['phone'];
											$no_of_days=$row1['no_of_days'];
											$amount=$row1['amount'];
											
											
								?>
                                    <tr>			
										<td><?php echo $sl; ?></td>
										
										<td><?php echo $hotel_name; ?></td>
										<td><?php echo $address; ?></td>
										<td><?php echo $phone; ?></td>
										<td><?php echo $no_of_days; ?></td>
										<td><?php echo $amount; ?></td>
										
										<td>
											<form method="post" action="#">
											
												<input type="text" name="id[]" value="<?php echo $id; ?>" hidden="true">
												<td><button type="submit" name="delete" class="btn btn-danger">Delete</button></td>
												</form>
												</td>
										</tr>
										<?php
												}
												}
											?>
                                </tbody>
                            </table>
							<?php
										if(isset($_POST['delete']))
										{
											foreach ($_POST['id'] as $key => $value) 
											{	
												$selectid=$value;	
											}
											$query1 = "delete from hotel where id='".$selectid."'";
											mysqli_query($con,$query1) or die(mysqli_error($con));
											echo "<script>
												alert('record Deleted Successful');
											</script>";
											echo "<script> location.href='displayhotel.php'; </script>";
										}
									?>
									<p><center><a href="stay1.php">Back</a></center></p>
</body>
</html>