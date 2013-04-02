<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
	<META http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="style.css" rel="stylesheet" type="text/css">
	</head>
<body>

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
	
	<?php include 'header.php'; include 'sidebar.php' ?>
	
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