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

<?php
	// Create connection
				
	$con=mysqli_connect("k.tfa.ie","disney","kandy", "website");
	// Check connection
		if (mysqli_connect_errno())
			{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}

			$sql="INSERT INTO product (Name, P_Id, Price, Description, Img_location, Weight, S_Name, Stock_Level, Min_Level)
			VALUES
			('$_POST[Name]','$_POST[P_Id]','$_POST[Price]','$_POST[Description]','$_POST[Img_location]','$_POST[Weight]
			','$_POST[S_Name]','$_POST[Stock_Level]','$_POST[Min_Level]')";

				if (!mysqli_query($con,$sql))		
				{
				die('Error: ' . mysqli_error());
				}
				echo "1 record added";

				mysqli_close($con);
?>