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
			<h2> Inactive Stock</h2>
			
			
								<?php
					
					// Create connection
					
					$con=mysqli_connect("k.tfa.ie","disney","kandy", "website");
					// Check connection
						if (mysqli_connect_errno($con))
						{
						  echo "Failed to connect to MySQL: " . mysqli_connect_error();
						}
							$result = mysqli_query($con,"SELECT * FROM product
							WHERE Active != 1");
							echo "<table border='1'>
							<tr>
							<th>Name</th>
							<th>Product I.D</th>
							<th>Price</th>
							<th>Product Description</th>
							<th>Picture</th>
							<th>Weight</th>
							<th>Native Name</th>
							<th>Stock Level</th>
							<th>Minimum Level</th>
							<th>Activity</th>


							</tr>";
							while($row = mysqli_fetch_array($result))
							  {
							  echo "<tr>";
							  echo "<td>" . $row['Name'] . "</td>";
							  echo "<td>" . $row['P_Id'] . "</td>";
							  echo "<td>" . $row['Price'] . "</td>";
							  echo "<td>" . $row['Description'] . "</td>";
							  echo "<td>" . $row['Img_location'] . "</td>";
							  echo "<td>" . $row['Weight'] . "</td>";
							  echo "<td>" . $row['S_Name'] . "</td>";
							  echo "<td>" . $row['Stock_Level'] . "</td>";
							  echo "<td>" . $row['Min_Level'] . "</td>";
							  echo "<td>" . $row['Active'] . "</td>";

							  echo "</tr>";
							  }
							echo "</table>";

							mysqli_close($con);
							?>
					
			<form action="insertProduct.php" method="post">
				<input type="submit" value="Reinstate product">
			</form>

		</div>
	</div>

</body>
</html>