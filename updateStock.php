<?php
	
	$sql="INSERT INTO product (Stock_Level)
	VALUES
	('$_POST[Stock_Level]')";

	if (!mysqli_query($con,$sql))		
	{
	die('Error: ' . mysqli_error());
	}
	echo "1 record added";

?>