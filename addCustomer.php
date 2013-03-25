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
			<h2>Add Customer</h2>
			<form action="insertCustomer.php" method="post">
			<ul>
			<li>Name: <input type="text" name="Name"></li>
			<li>Address: <input type="text" name="Address"></li>
			<li>Delivery Address: <input type="text" name="Delivery_address"></li>
			<li>Email: <input type="text" name="Email"></li>
			<li>Phone: <input type="text" name="Phone"></li>
			<li>Client Status: <input type="text" name="Client_status"></li>
			<li>Admin Status: <input type="text" name="Admin_status"></li>
			<li>Password: <input type="text" name="Password"></li>
			<li>Date of Birth: <input type="text" name="DOB"></li>
			<br>
			<input type="submit" value="Save">
			</ul>
			</form>
		</div>
	</div>

</body>
</html>