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
	<h2><center>Place and Package Details</center></h2>
	<table border="2px solid black" class="center" width="50%">
                                <thead>
                                    <tr>
                                        <th scope="col">SL.NO</th>
                                        <th scope="col">Place Name</th>
                                        <th scope="col">No.of Days</th>
                                        <th scope="col">Amount</th>
										
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php
									include 'config.php';
									$sql1 = "select * from package";
									$result1 = mysqli_query($con,$sql1);
									$num1=mysqlI_num_rows($result1);
									$sl=0;
									if($num1 > 0)
									{ 
										while($row1 = mysqli_fetch_array($result1))
										{ 
											$sl+=1;
											$id=$row1[0];
											$place_name=$row1['place_name'];
											$total_days=$row1['total_days'];
											$amount=$row1['amount'];
											
											
								?>
                                    <tr>			
										<td><?php echo $sl; ?></td>
										
										<td><?php echo $place_name; ?></td>
										<td><?php echo $total_days; ?></td>
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
											$query1 = "delete from package where id='".$selectid."'";
											mysqli_query($con,$query1) or die(mysqli_error($con));
											echo "<script>
												alert('record Deleted Successful');
											</script>";
											echo "<script> location.href='displayplace.php'; </script>";
										}
									?>
									<p><center><a href="place1.php">Back</a></center></p>
</body>
</html>