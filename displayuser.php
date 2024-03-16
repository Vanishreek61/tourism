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
			background-color:pink;
        }
		body{
			
			background-image:url("img4.jpg");
			background-size:1600px,800px;
			
		}
		</style>
	</head>
	<body>
	<h2><center>User Details</center></h2>
	<table border="2px solid black" class="center" width="70%">
                                <thead>
                                    <tr>
                                        <th scope="col">SL.NO</th>
                                        <th scope="col">Name</th>
										 <th scope="col">Age</th>
										 <th scope="col">Gender</th>
										 
										 <th scope="col">Contact Number</th>
										<th scope="col">Address</th>
										<th scope="col">Place</th>
                                        <th scope="col">Visit date</th>
                                        <th scope="col">Stay Hotel</th>
										
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php
									include 'config.php';
									$sql1 = "select * from user";
									$result1 = mysqli_query($con,$sql1);
									$num1=mysqlI_num_rows($result1);
									$sl=0;
									if($num1 > 0)
									{ 
										while($row1 = mysqli_fetch_array($result1))
										{ 
											$sl+=1;
											$id=$row1[0];
											$name=$row1['name'];
											$age=$row1['age'];
											$gender=$row1['gender'];
											$phone=$row1['phone'];
											$address=$row1['address'];
											$place=$row1['place'];
											$visit_date=$row1['visit_date'];
											$hotel=$row1['hotel'];
											
											
								?>
                                    <tr>			
										<td><?php echo $sl; ?></td>
										
										<td><?php echo $name; ?></td>
										<td><?php echo $age; ?></td>
										<td><?php echo $gender; ?></td>
										<td><?php echo $phone; ?></td>
										<td><?php echo $address; ?></td>
										<td><?php echo $place; ?></td>
										<td><?php echo $visit_date; ?></td>
										<td><?php echo $hotel; ?></td>
										
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
											$query1 = "delete from user where id='".$selectid."'";
											mysqli_query($con,$query1) or die(mysqli_error($con));
											echo "<script>
												alert('record Deleted Successful');
											</script>";
											echo "<script> location.href='displayuser.php'; </script>";
										}
									?>
									<p><center><a href="home1.php">Back</a></center></p>
</body>
</html>