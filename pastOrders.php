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
			<h2>Past Customer Orders</h2>
			
			
			<?php
					
					// Create connection
					
					$con=mysqli_connect("k.tfa.ie","disney","kandy", "website");
					// Check connection
						if (mysqli_connect_errno($con))
						{
						  echo "Failed to connect to MySQL: " . mysqli_connect_error();
						}
							$result = mysqli_query($con,"SELECT * FROM the_order WHERE Progress =4");

							echo "<table border='1'>
							<tr>
							<th>Email</th>
							<th>Product items</th>
							<th>Total Price</th>
							<th>Date</th>
							<th>Progress</th>
							</tr>";
							while($row = mysqli_fetch_array($result))
							  {
							  echo "<tr>";
							  echo "<td>" . $row['Email'] . "</td>";
							
							$orderNo=$row['OrderID'];
							$itemTable=mysqli_query($con, "SELECT * FROM order_item WHERE Order_Id=$orderNo");
							$items=mysqli_fetch_array($itemTable);					 
							echo "<td>". $items['Name_of_Product']."</td>";

							echo "<td>" . $row['Total_Price'] . "</td>";
							  echo "<td>" . $row['Date1'] . "</td>";
							  
							  $progNo=$row['Progress'];
							$progTable=mysqli_query($con,"SELECT * FROM progress_options WHERE Progress_Id=$progNo");
							$progress= mysqli_fetch_array($progTable);
							
							  echo "<td>" . $progress['Name'] . "</td>";
							  echo "</tr>";
							  }
							echo "</table>";

							mysqli_close($con);
							?>
				
		</div>
	</div>

</body>
</html>