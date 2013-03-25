
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
					<a href="pastOrders.php"><li>Past orders</li></a></ul>
					<a href="reviews.php"><li>Customer Reviews</li></a></ul>

				</li>
				<li>Manage Stocks<ul>
					<a href="productCatalogue.php"><li>Product catalogue</li></a>
					<a href="stockLevels.php"><li>Stock levels</li></a>
					<a href="addProduct.php"><li>Add product</li></a>
					<a href="formerStock.php"><li>Former stock</li></a></ul>
				</li>
			</ul>
		</div>
	</div>


	
	<div id="content-wrapper">
		<div id="content">
			<h2>Customer Account Details</h2>
			<ul>
				<li><b>Name: </b></li>
				<li>Orders: </li>
				<li>Phone:</li>
				<li>Email:</li>
				<li>Address:</li>
				<li>Password:</li>
				<button onclick="location.href='editCustomer.html'">Edit</button>
				</ul>
		
				
		</div>
	</div>

</body>
</html>