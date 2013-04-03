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
		if (mysqli_connect_errno($con)){
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

		echo "In emailCustomer!";
		echo "order id is ".$_POST['order'];
		
	//reselect order
		
		//increase progress level of order (update Progress in original of row)

		/*$orderNo=$row['OrderID'];
						$itemTable=mysqli_query($con, "SELECT * FROM order_item WHERE Order_Id=$orderNo");
						$items=mysqli_fetch_array($itemTable);					 */
		
		
$orderTable=mysqli_query($con, "SELECT * FROM the_order WHERE OrderID=$_POST['order']");
$order=mysql_fetch_array($orderTable);

$increase=$order['Progress']+1;

echo "new progress: " . $increase;
echo "order ID: " . $order['OrderID'];

/*
$sql="UPDATE the_order SET Progress=$increase WHERE OrderID=$id";

if (!mysqli_query($con,$sql))		
	{
	die('Error: ' . mysqli_error());
	}
	echo "Progress updated";


/*get new word - reset progress*
$progNo=$row['Progress'];
$progTable=mysqli_query($con,"SELECT * FROM progress_options WHERE Progress_Id=$progNo");
$progress= mysqli_fetch_array($progTable);	


/*send email*
$to = $row['email'];
$subject = "Current Order Tracking ";
$message = "Dear Customer, Your order is currently at the stage of " . $progress['Name'];
$headers = "From: gradinata@gmail.com";
mail($to,$subject,$message,$headers);
echo "Mail Sent to ".$to;
*/
mysqli_close($con);
?>