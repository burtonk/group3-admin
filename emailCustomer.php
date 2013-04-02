<?php
/*also increase progress level, get new word*/
$to = $row['email'];
$subject = "Current Order Tracking ";
$message = "Dear Customer, Your order is currently at the stage of " . $progress['Name'];
$headers = "From: gradinata@gmail.com";
mail($to,$subject,$message,$headers);
echo "Mail Sent.";
?>