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

	$edit=$_POST['Stock_Level'];	
	$id=$_POST['productID'];	
	echo $edit;
	echo $id;
	
	$sql="UPDATE product SET Stock_Level=$edit WHERE P_Id=$id";
	
	/*$id=$_POST['order'];	

	//reselect order
	$orderTable=mysqli_query($con, "SELECT * FROM the_order WHERE OrderID=$id");
	$order=mysqli_fetch_array($orderTable);

	$sql="UPDATE the_order SET Progress=5 WHERE OrderID=$id";
	if (!mysqli_query($con,$sql)){
		die('Error: ' . mysqli_error());
	}
	  
	  /*
	// Create connection
	
	$edit=$_POST['Stock_Level'];	
	$id=$_POST['productID'];	
	$sql="UPDATE product SET Stock_Level=$_POST['Stock_Level'] WHERE P_Id=$_POST['productID']";

	if (!mysqli_query($con,$sql)){
		die('Error: ' . mysqli_error());
	}
	
	echo "1 record added";/

	mysqli_close($con);
?>