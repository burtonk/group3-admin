<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
	<META http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
	
	<?php
	// Connects to your Database
	mysql_connect("k.tfa.ie", "disney", "kandy") or die(mysql_error());
	mysql_select_db("website") or die(mysql_error());

	//Checks if there is a login cookie
	if(isset($_COOKIE['ID_my_site'])){
	//if there is, it logs you in and directes you to the members page
		$username = $_COOKIE['ID_my_site']; 
		$pass = $_COOKIE['Key_my_site'];
		$check = mysql_query("SELECT * FROM the_user WHERE Email = '$username' AND Admin_status = '1' ")or die(mysql_error());

		while($info = mysql_fetch_array( $check )) {
			if ($pass != $info['Password']){
				header("Location: login.php");
			}
			else{
				//do nothing
			}
		}
	 }
	 else {
		header("Location: login.php");
	  }
	?>
	
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

							$result = mysqli_query($con,"SELECT * FROM the_user WHERE Client_status=1");

							echo "<table border='1'>
							<tr>
							<th>Name</th>
							<th>Address</th>
							<th>Delivery Address</th>
							<th>Email</th>							
							<th>Phone</th>
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
							  echo "<td>" . $row['DOB'] . "</td>";
							  echo "</tr>";
							  }
							echo "</table>";

							mysqli_close($con);
							?>
							<br>
							<br>
							<button onclick="location.href='addCustomer.php'">Add Customer</button>
							<button onclick="location.href='insertAdmin.php'">Add Admin</button>

		</div>
	</div>

</body>
</html>