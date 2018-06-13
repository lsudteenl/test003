<?php
$to = 'carabaocothitsupport@cbd.freshservice.com';
$subject = 'Marriage Proposal';
$message = 'Hi Jane, will you marry me?'; 
$from = 'ruttanon.n@carabao.co.th';
 
// Sending email
if(mail($to, $subject, $message, $from)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
?>
