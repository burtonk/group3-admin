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
			<h2> Customer Reviews</h2>
					<?php
					
					// Create connection
					
					$con=mysqli_connect("k.tfa.ie","disney","kandy", "website");
					// Check connection
						if (mysqli_connect_errno($con))
						{
						  echo "Failed to connect to MySQL: " . mysqli_connect_error();
						}

							$result = mysqli_query($con,"SELECT * FROM reviews");

							echo "<table border='1'>
							<tr>
							<th>Product I.D</th>
							<th>Email</th>
							<th>Stars</th>
							<th>Comments</th>							
							<th>Date</th>
							<th>Time</th>


							</tr>";
							while($row = mysqli_fetch_array($result))
							  {
							  echo "<tr>";
							  echo "<td>" . $row['P_Id'] . "</td>";      
							  echo "<td>" . $row['Email'] . "</td>";							  							  
							  echo "<td>" . $row['Stars'] . "</td>";
							  echo "<td>" . $row['Comments'] . "</td>";
							  echo "<td>" . $row['Date1'] . "</td>";
							  echo "<td>" . $row['Time1'] . "</td>";
							  echo "</tr>";
							  }
							echo "</table>";

							mysqli_close($con);
							?>
				
		</div>
	</div>

</body>
</html>