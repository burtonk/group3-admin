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

			<?php 

			 //This code runs if the form has been submitted
			 if (isset($_POST['submit'])) { 
				//This makes sure they did not leave any fields blank

				if (!$_POST['name'] |!$_POST['username'] | !$_POST['pass'] | !$_POST['pass2'] ) {
					die('You did not complete all of the required fields');
				}
				
				// checks if the username is in use

				if (!get_magic_quotes_gpc()) {
					$_POST['username'] = addslashes($_POST['username']);
				}

				$usercheck = $_POST['username'];
				$check = mysql_query("SELECT Email FROM the_user WHERE Email = '$usercheck'") 
				or die(mysql_error());
				$check2 = mysql_num_rows($check);

				//if the name exists it gives an error
				if ($check2 != 0) {
					die('Sorry, the email '.$_POST['username'].' is already in use.');
				}

				// this makes sure both passwords entered match
				if ($_POST['pass'] != $_POST['pass2']) {
					die('Your passwords did not match. ');
				}
				
				// here we encrypt the password and add slashes if needed
				$_POST['pass'] = md5($_POST['pass']);

				if (!get_magic_quotes_gpc()) {
					$_POST['pass'] = addslashes($_POST['pass']);
					$_POST['username'] = addslashes($_POST['username']);
				}

				// now we insert it into the database
				$insert = "INSERT INTO the_user (Name, Email,Client_status, Admin_status, Password)
					VALUES ('".$_POST['name']."', '".$_POST['username']."', '0','1', '".$_POST['pass']."')";
				$add_member = mysql_query($insert);
				?>
			 
			 <h1>Registered</h1>
			 <p>Thank you, you have registered - you may now login</a>.</p>
			 <?php 
			 } 

			 else {	
			 ?>
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
				<table border="0">
				<tr><td>Name:</td><td>
				<input type="text" name="name" maxlength="60">
				</td></tr>
				<tr><td>Email:</td><td>
				<input type="text" name="username" maxlength="60">
				</td></tr>
				<tr><td>Password:</td><td>
				<input type="password" name="pass" maxlength="25">
				</td></tr>
				<tr><td>Confirm Password:</td><td>
				<input type="password" name="pass2" maxlength="25">
				</td></tr>	
				<tr><th colspan=2><input type="submit" name="submit" value="Register"></th></tr> </table>
				</form>
			<?php
			}
			?> 

		</div>
	</div>

</body>
</html>