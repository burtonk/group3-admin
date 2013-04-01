<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
	<META http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="style.css" rel="stylesheet" type="text/css">
	</head>

	<body>
		<div id="header-wrapper">
			<div id="header">
				<h1> Gradinata Admin Page </h1>
			</div>	
		</div>

	<div id="bar-wrapper">
		<div id="bar">
			<ul>
			<a href="home.php"><li>Home</li></a>
				<li>Manage orders<ul>
					<a href="currentOrders.php"><li>Orders being processed</li></a>
					<a href="accountDetails.php"><li>Customer account details</li></a>
					<a href="pastOrders.php"><li>Past orders</li></a>
					<a href="reviews.php"><li>Customer Reviews</li></a>
					
			</ul>

				</li>
				<li>Manage Stocks<ul>
					<a href="productCatalogue.php"><li>Product catalogue</li></a>
					<a href="stockLevels.php"><li>Stock levels</li></a>
					<a href="addProduct.php"><li>Add product</li></a>
					<a href="inactiveStock.php"><li>Inactive stock</li></a>
				</li>
			</ul>
		</div>
	</div>

	
	<div id="content-wrapper">
		<div id="content">
			<h2> Customer Reviews</h2>
					<?php
					include "/root/config/details.php";
					// Create connection
					
					$con=mysqli_connect($host,$logname,$pass, $db);
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