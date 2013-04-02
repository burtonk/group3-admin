<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
	<META http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="style.css" rel="stylesheet" type="text/css">
	</head>
</body>

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
			<input type="submit" value="save">
			</ul>
			</form>
		</div>
	</div>

</body>
</html>