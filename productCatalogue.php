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
		
			<h2>Product Catalogue</h2>
					<?php
					include "/root/config/details.php";
					// Create connection
					
					$con=mysqli_connect($host,$logname,$pass, $db);
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
							<th>Product Description</th>
							<th>Picture</th>
							<th>Weight</th>
							<th>Native Name</th>
							<th>Stock Level</th>
							<th>Minimum Level</th>

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

							  echo "</tr>";
							  }
							echo "</table>";

							mysqli_close($con);
							?>
		
				<br>
				<br>
				<button onclick="location.href='addProduct.php'">Add Product</button>
		</div>
	</div>

</body>
</html>