<?php
/**
 * This section ensures that Twilio gets a response.
 */
header('Content-type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<Response></Response>'; //Place the desired response (if any) here
 
/**
 * This section actually sends the email.
 */
//$to      = "carmen@test.com, brainy@test.com, edb@test.com";
$to      = "brainy@teste.com";
$subject = "Message from {$_REQUEST['From']} at {$_REQUEST['To']}";
$message = "You have received a message from {$_REQUEST['From']}.
Body: {$_REQUEST['Body']}";
$headers = "From: www@test.com"; // Who should it come from?
 
mail($to, $subject, $message, $headers);
?>
