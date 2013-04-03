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
			
			
								<?php
					
					// Create connection
					
					$con=mysqli_connect("k.tfa.ie","disney","kandy", "website");
					// Check connection
						if (mysqli_connect_errno($con))
						{
						  echo "Failed to connect to MySQL: " . mysqli_connect_error();
						}
							$result = mysqli_query($con,"SELECT * FROM product
							WHERE Active != 1");
							echo "<table border='1'>
							<tr>
							<th>Name</th>
							<th>Product ID</th>
							<th>Price</th>
							<th>Description</th>
							<th>Weight</th>
							<th>Native Name</th>
							<th>Stock Level</th>
							<th>Minimum Level</th>
							<th>Restore</th>


							</tr>";
							while($row = mysqli_fetch_array($result))
							  {
							  echo "<tr>";
							  echo "<td>" . $row['Name'] . "</td>";
							  echo "<td>" . $row['P_Id'] . "</td>";
							  echo "<td>" . $row['Price'] . "</td>";
							  echo "<td>" . $row['Description'] . "</td>";
							  echo "<td>" . $row['Weight'] . "</td>";
							  echo "<td>" . $row['S_Name'] . "</td>";
							  echo "<td>" . $row['Stock_Level'] . "</td>";
							  echo "<td>" . $row['Min_Level'] . "</td>";
							  ?>
							  
								<td> <form action='activate.php' method='post'>
								<input type="hidden" name="productID" value="<?php echo $row['P_Id']?>">						
								<input type='submit' value='Reactivate'></form></td>
								</tr><?php
								
							  }
							echo "</table>";

							mysqli_close($con);
							?>
					

		</div>
	</div>

</body>
</html>