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
			<h2>Stock levels</h2>
			<p> Hellooo?</p>
			
			<?php
				// Create connection					
				$con=mysqli_connect("k.tfa.ie","disney","kandy", "website");

				// Check connection
					if (mysqli_connect_errno($con))
					{
					  echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}
					
					$result = mysqli_query($con,"SELECT * FROM product");
					
					echo "<table border='1'>
							<tr>
							<th>Name</th>
							<th>Product I.D</th>
							<th>Price</th>
							<th>Weight</th>
							<th>Stock Level</th>
							<th>Minimum Level</th>

							</tr>";
					
					while($row = mysqli_fetch_array($result)) {
					  echo "<tr>";
					  echo "<td>" . $row['Name'] . "</td>";      
					  echo "<td>" . $row['P_Id'] . "</td>";
					  echo "<td>" . $row['Price'] . "</td>";
					  echo "<td>" . $row['Weight'] . "</td>";
					  echo "<td>" . $row['Stock_Level'] . "</td>";
					  echo "<td>" . $row['Min_Level'] . "</td>";
					  }/*
					  echo "<td>" . $row['Name'] . "</td>";
					  echo "<td>" . $row['P_Id'] . "</td>";
					  echo "<td>" . $row['Price'] . "</td>";
					  echo "<td>" . $row['Weight'] . "</td>";
					  echo "<td>" . $row['Stock_Level'] . "</td>";
					  echo "<td>" . $row['Min_Level'] . "</td>";
					  echo "<td>"	/*<form action='updateProduct.php' method='post'>
									New Level: <input type='text' name='Stock_Level'></li>
									<input type='submit' value='Save'>"</td>"
					  echo "</tr>";
					}*/
					echo "</table>";
				
					mysqli_close($con);
			?>	
	
		</div>
	</div>
	</body>

</html>