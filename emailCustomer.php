<?php
/*change $row['Progress'] to new number (+1)

$progressNum = $row['Progress']
/*number -> word
get Name where Progress_Id == $progressNum
*

$progress = $progressNum;*/
$to = $row['email'];
$subject = "Current Order Tracking ";
$message = "Dear Customer, Your order is currently at the stage of " . 'Progress';
$from = "gradinata@gmail.com";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
echo "Mail Sent.";
?>