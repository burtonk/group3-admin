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
		
		<h2>Customer Account Details </h2>
					<?php
					// Create connection
					
					$con=mysqli_connect("k.tfa.ie","disney","kandy", "website");
					// Check connection
						if (mysqli_connect_errno($con))
						{
						  echo "Failed to connect to MySQL: " . mysqli_connect_error();
						}

							$result = mysqli_query($con,"SELECT * FROM the_user");

							echo "<table border='1'>
							<tr>
							<th>Name</th>
							<th>Address</th>
							<th>Delivery Address</th>
							<th>Email</th>							
							<th>Phone</th>
							<th>Client/Admin</th>
							<th>Date of Birth</th>


							</tr>";
							while($row = mysqli_fetch_array($result))
							  {
							  echo "<tr>";
							  echo "<td>" . $row['Name'] . "</td>";      
							  echo "<td>" . $row['Address'] . "</td>";							  							  
							  echo "<td>" . $row['Delivery_address'] . "</td>";
							  echo "<td>" . $row['Email'] . "</td>";
							  echo "<td>" . $row['Phone'] . "</td>";
							  
							  echo "<td>" 							  
							  if($row['Client_status'] ==1){
								echo "client";
							  }
							  else{
								echo "admin";
							  }					
							  echo "</td>";
							  
							  echo "<td>" . $row['Admin_status'] . "</td>";
							  echo "<td>" . $row['DOB'] . "</td>";
							  echo "</tr>";
							  }
							echo "</table>";

							mysqli_close($con);
							?>
							<br>
							<br>
							<button onclick="location.href='addCustomer.php'">Add Customer</button>
							<!--<button onclick="location.href='insertAdmin.php'">Add Admin</button>*/-->

		</div>
	</div>

</body>
</html>