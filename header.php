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

<div id="header-wrapper">
	<div id="header">
		<a href="home.php"><img src="logo.gif" alt = "Gradinata Admin" color="white" class = "head-pic"></a>		
		
		<form action="logout.php" method="post">
			<input name="return" type="hidden" value="<?php echo urlencode($_SERVER["PHP_SELF"]);?>" />
			<input type="submit" value="log out" />
		</form>		
		
	</div>	
</div>