<?php
require 'class.phpmailer.php';
require 'class.smtp.php';
$contact_name 		= 'Andra';
$contact_email 		= 'gondank@gmail.com';
$contact_phone 		= '085643688710'; 
$contact_subject 	= 'Latihan Kirim EMail'; 

$message = 'Message';

//Create a new PHPMailer instance
$mail = new PHPMailer;
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Host = 'ssl://smtp.googlemail.com';
$mail->Port = '465';
$mail->Username = 'imanudinsholeh20@gmail.com';
$mail->Password = 'qpqfiwipiumncfty';
$mail->setFrom($contact_email, $contact_name);
$mail->addAddress('imanudin.sholeh@gmail.com', 'Arwendra Adi Putra');
//Set the subject line
$mail->Subject = $contact_subject;
$mail->msgHTML($message);
$mail->AltBody = 'This is a plain-text message body';

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
?>	