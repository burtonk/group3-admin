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
		<h3>Welcome</h3>

		<div style="padding-top:10px;padding-left:150px;float:middle"><b>Latest Orders </b></div>
			<div style="padding-top:10px;padding-left:100px;float:middle">

					<?php
					include "root/config/details.php";
					// Create connection
					
					$con=mysqli_connect($host,$logname,$pass, $db);
					// Check connection
						if (mysqli_connect_errno($con))
						{
						  echo "Failed to connect to MySQL: " . mysqli_connect_error();
						}
							$result = mysqli_query($con,"SELECT * FROM the_order
							WHERE Progress < 3");
							echo "<table border='1'>
							<tr>
							<th>Email</th>
							<th>Product</th>
							<th>Price</th>
							<th>Date Ordered</th>
							<th>Progress</th>

							</tr>";
							while($row = mysqli_fetch_array($result))
							  {
							  echo "<tr>";
							  echo "<td>" . $row['Email'] . "</td>";
							  echo "<td>" . $row['Product_items'] . "</td>";
							  echo "<td>" . $row['Total_Price'] . "</td>";
							  echo "<td>" . $row['Date1'] . "</td>";
							  echo "<td>" . $row['Progress'] . "</td>";
							  echo "</tr>";
							  }
							echo "</table>";

							mysqli_close($con);
							?>
							
							
		
		</div>
		
		<div style="padding-top:70px;padding-left:150px;float:middle"><b>Products running low</b></div>
			<div style="padding-top:10px;padding-left:100px;float:middle">

					<?php
					include '../config/details.php';
					// Create connection
					
					$con=mysqli_connect($host,$logname,$pass, $db);
					// Check connection
						if (mysqli_connect_errno($con))
						{
						  echo "Failed to connect to MySQL: " . mysqli_connect_error();
						}
							$result = mysqli_query($con,"SELECT * FROM product
							WHERE Stock_Level < 100");
							echo "<table border='1'>
							<tr>
							<th>Product</th>
							<th>Price</th>
							<th>Weight</th>
							<th>Stock Level</th>
							<th>Minimum Level</th>
							
							</tr>";
							while($row = mysqli_fetch_array($result))
							  {
							  echo "<tr>";
							  echo "<td>" . $row['Name'] . "</td>";
							  echo "<td>" . $row['Price'] . "</td>";
							  echo "<td>" . $row['Weight'] . "</td>";
							  echo "<td>" . $row['Stock_Level'] . "</td>";
							  echo "<td>" . $row['Min_Level'] . "</td>";

							  echo "</tr>";
							  }
							echo "</table>";

							mysqli_close($con);
							?>
							
			</div>
		</div>
	</div>

</body>
</html>