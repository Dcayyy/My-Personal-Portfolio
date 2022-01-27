<?php
//get data from form  
$name = $_POST['user-name'];
$email= $_POST['user-email-address'];
$message= $_POST['user-message"'];

$to = "zaharimikov2001@gmail.com";

print($email)

$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>