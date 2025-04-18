<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@fifitours.co.ke';

$email_subject = 'New Form Submission'

$email_body = "User Name: $name.\n".
            "User Email: $visitor_email.\n".
            "subject: $subject.\n".
            "User message: $visitor_email.\n";


$to = 'kariukir057@gmail.com';

$headers = "from: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: contact.html");


?>