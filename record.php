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

	// Create connection	
	$con=mysqli_connect("k.tfa.ie","disney","kandy", "website");

	// Check connection
		if (mysqli_connect_errno($con))
		{
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

$sql="INSERT INTO the_user (Name, Address, Delivery Address, Email, Phone, Client Status, Admin Status, Password, Date of Birth)
VALUES
('$_POST[Name]','$_POST[Address]','$_POST[Delivery_address]','$_POST[Email]','$_POST[Phone]','$_POST[Client_Status]
','$_POST[Admin_Status]','$_POST[Password]','$_POST[DOB]')";

	if (!mysqli_query($con,$sql))		
	{
	die('Error: ' . mysqli_error());
	}
	echo "1 record added";

	mysqli_close($con);
?>