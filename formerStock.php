
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
			<h2> Inactive Stock</h2>
					<table border="1">
					<tr>
					<th>Product</th>
					<th>Price</th>
					<th><small>Stock Amount</small></th>
					<th>Weight</th>
					</tr>
					<tr>
					<td>name</td>
					<td>amount</td>
					<td>size</td>
					<td>amount</td>

					</tr>
					<tr>
					<td>name</td>
					<td>amount</td>
					<td>size</td>
					<td>amount</td>

					</tr>
					<tr>
					<td>name</td>
					<td>amount</td>
					<td>size</td>
					<td>amount</td>

					</tr>
					<tr>
					<td>name</td>
					<td>amount</td>
					<td>size</td>
					<td>amount</td>

					</tr>
					<tr>
					<td>name</td>
					<td>amount</td>
					<td>size</td>
					<td>amount</td>

					</tr>
					<tr>
					<td>name</td>
					<td>amount</td>
					<td>size</td>
					<td>amount</td>

					</tr>
					<tr>
					<td>name</td>
					<td>amount</td>
					<td>size</td>
					<td>amount</td>

					</tr>
					<tr>
					<td>name</td>
					<td>amount</td>
					<td>size</td>
					<td>amount</td>

					</tr>
					<tr>
					<td>name</td>
					<td>amount</td>
					<td>size</td>
					<td>amount</td>

					</tr>
					<tr>
					<td>name</td>
					<td>amount</td>
					<td>size</td>
					<td>amount</td>

					</tr>
					<tr>
					<td>name</td>
					<td>amount</td>
					<td>size</td>
					<td>amount</td>

					</tr>
					</table>
					<br>
					<br>

				<input type="submit" value="Reinstate product">
				
		</div>
	</div>

</body>
</html>