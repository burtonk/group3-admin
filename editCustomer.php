	<?php
		include "details.php";
					// Create connection
					
					$con=mysqli_connect($host,$logname,$pass, $db);
		// Check connection
			if (mysqli_connect_errno())
				{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}

				$sql="INSERT INTO product (Name, P_Id, Price, Description, Img_location, Weight, S_Name, Stock_Level, Min_Level)
				VALUES
				('$_POST[Name]','$_POST[P_Id]','$_POST[Price]','$_POST[Description]','$_POST[Img_location]','$_POST[Weight]
				','$_POST[S_Name]','$_POST[Stock_Level]','$_POST[Min_Level]')";

					if (!mysqli_query($con,$sql))		
					{
					die('Error: ' . mysqli_error());
					}
					echo "1 record added";

					mysqli_close($con);
	?>