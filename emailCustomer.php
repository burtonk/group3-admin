<?php
$progress = "Progress";
$to = "email";
$subject = "Current Order Tracking ";
$message = "Dear Customer, Your order is currently at the stage of " . $progress;
$from = "gradinata@gmail.com";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
echo "Mail Sent.";
?>