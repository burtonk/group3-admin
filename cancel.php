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
/*increase progress level of order (update Progress in original of row)*/
$sql=mysqli_query($con, "UPDATE the_order SET Progress=5 WHERE OrderID=$id");
	if (!mysqli_query($con,$sql))		
	{
	die('Error: ' . mysqli_error());
	}

/*send email*/
$to = $row['email'];
$subject = "Current Order Tracking ";
$message = "Dear Customer, Your order has been cancelled. We apologise for the inconvenience";
$headers = "From: gradinata@gmail.com";
mail($to,$subject,$message,$headers);
echo "Mail Sent.";
?>
