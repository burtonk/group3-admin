<?php
/*increase progress level of order (update Progress in original of row)*/
$increase=$row['Progress']+1;
mysqli_query($con, "UPDATE the_order SET Progress=$increase WHERE OrderID=$row['OrderID']");

/*get new word - reset progress*
$progNo=$row['Progress'];
$progTable=mysqli_query($con,"SELECT * FROM progress_options WHERE Progress_Id=$progNo");
$progress= mysqli_fetch_array($progTable);	

/*send email*/
$to = $row['email'];
$subject = "Current Order Tracking ";
$message = "Dear Customer, Your order is currently at the stage of " . $progress['Name'];
$headers = "From: gradinata@gmail.com";
mail($to,$subject,$message,$headers);
echo "Mail Sent.";
?>