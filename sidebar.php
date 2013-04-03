<?php
	// Connects to your Database
	mysql_connect("k.tfa.ie", "disney", "kandy") or die(mysql_error());
	mysql_select_db("website") or die(mysql_error());

	//Checks if there is a login cookie
	if(isset($_COOKIE['ID_my_site'])){
	//if there is, it logs you in and directes you to the members page
		$username = $_COOKIE['ID_my_site']; 
		$pass = $_COOKIE['Key_my_site'];
		$check = mysql_query("SELECT * FROM the_user WHERE Email = '$username' AND Admin_status = '1' ")or die(mysql_error());

		while($info = mysql_fetch_array( $check )) {
			if ($pass != $info['Password']){
				header("Location: login.php");
			}
			else{
				//do nothing
			}
		}
	 }
	 else {
		header("Location: login.php");
	  }
	?>

<div id="bar-wrapper">
	<div id="bar">
		<ul>
		<a href="home.php"><li><b>Home</b></li></a>
			<li>Manage orders<ul>
				<a href="currentOrders.php" class = "side"><li>Current Orders</li></a>				
				<a href="pastOrders.php" class = "side"><li>Past orders</li></a>
				<a href="accountDetails.php" class = "side"><li>Customer accounts</li></a>
				<a href="reviews.php" class = "side"><li>Customer Reviews</li></a>			
		</ul>
		</li>
			<li>Manage Stocks<ul>
				<a href="productCatalogue.php" class = "side"><li>Product catalogue</li></a>
				<a href="stockLevels.php" class = "side"><li>Stock levels</li></a>
				<a href="addProduct.php" class = "side"><li>Add product</li></a>
				<a href="inactiveStock.php" class = "side"><li >Inactive stock</li></a>
		</ul>
		</li>			
			<li>Admin<ul>
			<a href="insertAdmin.php" class = "side"><li>Add New Admin</li></a>
			</ul>
		</li>
	</div>
</div>