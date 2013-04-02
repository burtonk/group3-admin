<?php
	
	// Create connection	
	$con=mysqli_connect("k.tfa.ie","disney","kandy", "website");
	
	// Check connection
		if (mysqli_connect_errno($con))
		{
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

$sql="INSERT INTO product (Name, P_Id, Price, Description, Img_location, Weight, S_Name, Stock_Level, Min_Level, Active)
VALUES
('$_POST[Name]','$_POST[P_Id]','$_POST[Price]','$_POST[Description]','$_POST[Img_location]','$_POST[Weight]
','$_POST[S_Name]','$_POST[Stock_Level]','$_POST[Min_Level]',1)";

	if (!mysqli_query($con,$sql))		
	{
	die('Error: ' . mysqli_error());
	}
	echo "1 record added";

	mysqli_close($con);
?>