					<?php
					include "/root/config/details.php";
					// Create connection
					
					$con=mysqli_connect($host,$logname,$pass, $db);
					// Check connection
						if (mysqli_connect_errno($con))
						{
						  echo "Failed to connect to MySQL: " . mysqli_connect_error();
						}

				$sql="INSERT INTO product (Stock_Level)
				VALUES
				('$_POST[Stock_Level]')";

					if (!mysqli_query($con,$sql))		
					{
					die('Error: ' . mysqli_error());
					}
					echo "1 record added";

					mysqli_close($con);
	?>