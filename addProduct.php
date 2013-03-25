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
		
			<h2>Add Product </h2>

			<form action="insertProduct.php" method="post">
			<ul>
			<li>Name: <input type="text" name="Name"></li>
			<li>Product I.D: <input type="text" name="P_Id"></li>
			<li>Price: <input type="text" name="Price"></li>
			<li>Product Description: <input type="text" name="Description"></li>
			<li>Picture: <input type="text" name="Img_location"></li>
			<li>Weight: <input type="text" name="Weight"></li>
			<li>Native Name: <input type="text" name="S_Name"></li>
			<li>Stock Level: <input type="text" name="Stock_Level"></li>
			<li>Minimum Level: <input type="text" name="Min_Level"></li>
			<br>
			<input type="submit" value="Save">
			</ul>
			</form>


		
		</div>
	</div>

</body>
</html>