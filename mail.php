<?php
$name = $_POST['name'];
$email = $_POST['emailAddress'];

$to = "mranderson85@gmail.com";

$subject = "test Mail";

$txt = "Name: ". $name . "\r\n Email: " . $email ;

$headers = "From: noreply@testsite.com";

if($email!=NULL)
    mail($to,$subject,$txt,$headers);

echo "Thanks!!";
?>