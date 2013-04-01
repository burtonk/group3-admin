<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
	<META http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="style.css" rel="stylesheet" type="text/css">
	</head>
</body>
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
			<input type="submit" value="Save">
			</ul>
			</form>
		</div>
	</div>

</body>
</html>