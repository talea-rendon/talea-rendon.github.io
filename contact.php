<?php
$name = $_POST['name'];
$visitor_email = $POST['email'];
$message = $POST{'message'};


$email_from = 'talea.rendon@gmail.com'

$email_subject = "website new submission";

$email_body = "User Name: $name.\n".
				"User Email: $visitor_email.\n".
				"USer Message: $message.\n";

$to = "talea.rendon@gmail.com";

$headers = "From: $email_form \r\n\ ";

$headers .= "Reply-To: $visitor_email \r\n ";

mail($to, $email_subject, $email_body, $headers);

header ("location: contact.html"); 

?>