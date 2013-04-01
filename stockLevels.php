<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
	<META http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="style.css" rel="stylesheet" type="text/css">
	</head>

	<body>
	<?php include 'header.php'; include 'sidebar.php' ?>
	<div id="content-wrapper">
		<div id="content">
			<h2>Stock levels</h2>
			<p> Hellooo?</p>
			
			<?php
				// Create connection					
				$con=mysqli_connect("k.tfa.ie","disney","kandy", "website");

				// Check connection
					if (mysqli_connect_errno($con))
					{
					  echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}
					
					else {
						echo "connected to db";
					}
					
					mysqli_close($con);
			?>	
	
		</div>
	</div>
	</body>

</html>