<?php
	
	// Create connection
	
	$con=mysqli_connect("k.tfa.ie","disney","kandy", "website");
	// Check connection
		if (mysqli_connect_errno($con))
		{
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

$sql="INSERT INTO the_user (Name, Address, Delivery_address, Email, Phone, Client_status, Admin_status, Password, DOB)
VALUES
('$_POST[Name]','$_POST[Address]','$_POST[Delivery_address]','$_POST[Email]','$_POST[Phone]','$_POST[Client_Status]
','$_POST[Admin_Status]','$_POST[Password]','$_POST[DOB]')";

	if (!mysqli_query($con,$sql))		
	{
	die('Error: ' . mysqli_error());
	}	
	else{
	echo "1 record added";
	}

	mysqli_close($con);
?>