<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
	<META http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="style.css" rel="stylesheet" type="text/css">
	</head>
<body>
	<?php include 'header.php'; include 'sidebar.php' ?>
	
	<div id="content-wrapper">
		<div id="content">
					
				<h2>Currently Processing Orders </h2>
					<?php
					
					// Create connection
					
					$con=mysqli_connect("k.tfa.ie","disney","kandy", "website");
					// Check connection
						if (mysqli_connect_errno($con))
						{
						  echo "Failed to connect to MySQL: " . mysqli_connect_error();
						}
							$result = mysqli_query($con,"SELECT * FROM the_order WHERE Progress <4");

							echo "<table border='1'>
							<tr>
							<th>Email</th>
							<th>Order I.D</th>							
							<th>Product items</th>
							<th>Total Price</th>
							<th>Date</th>
							<th>Progress</th>
							<th>Update</th>
							</tr>";
							while($row = mysqli_fetch_array($result))
							  {
							  
							  $prog=$row['Progress'];
							  $progStatus=mysqli_query($con,"SELECT * FROM progress_options WHERE Progress_Id=$prog");
							 if ($progStatus=NULL){
								echo "progStatus = NULL";
							 }
							 else{
								echo "progStatus != NULL";
							 }

							 /*product item fixer*/
							$order = $row['OrderID'];						 
							$items = mysqli_query($con, "SELECT	* FROM order_item WHERE Order_Id=$order");		
							

							  echo "<tr>";
							  echo "<td>" . $row['Email'] . "</td>";
							  echo "<td>" . $row['OrderID'] . "</td>";							  
							  
							  echo "<td>";
							  while ($getItems = mysqli_fetch_array($items)){
								echo "item" . $getItems['Name'] . " ";
								}
							  echo "</td>";
							  
							  echo "<td>" . $row['Total_Price'] . "</td>";
							  echo "<td>" . $row['Date1'] . "</td>";
							  
							  
							  /* FROM HERE!!!!*/
							  			  
										  
							
							  
							 echo "<td>start cell";
							 echo "<br> progress is " . $progStatus['Name'] . "<br>";
							 echo " end cell</td>";
							  
							  /*/echo "<td>" . $row['Progress'] . "</td>";
							  /*echo "<td><button type = 'button'>Update</button></td>"*/
							  echo "</tr>";
							  }
							echo "</table>";

							mysqli_close($con);
							?>
							<br>
							<br>
							<br>
							<!--<form action="emailCustomer.php" method="post">
								Customer to email: <input type="text" name="Email">
								Progress: <input type="text" name="Progress">
								<input type="submit" value="Send email">
							</form>-->
		</div>
	</div>

</body>
</html>