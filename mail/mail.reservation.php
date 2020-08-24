<?php
//include('../../../../assets/classes/config.php');
require 'PHPMailerAutoload.php';
require 'class.phpmailer.php';

$contact_menu 		= mysql_real_escape_string($_POST['menu']);
$contact_name 		= mysql_real_escape_string($_POST['name']);
$contact_email 		= mysql_real_escape_string($_POST['email']);
$contact_phone 		= mysql_real_escape_string($_POST['phone']); 
$contact_address 	= mysql_real_escape_string($_POST['address']); 
$contact_subject 	= 'Reservation Griya Tawang';
$contact_message 	= mysql_real_escape_string($_POST['message']);

$message = '
	<html>
	<head>
	<title>New Order Message from '.$contact_name.'</title>
	<style>
	@media only screen and (max-width:800px)
	{
		.wrapper{width: 100% !important; min-width: inherit !important;}
		.wrapper table{width: 100% !important;}
		.no-images{padding: 0 !important; display: none;}
		.logo{ text-align: center;}
		.logo .logo-left{ text-align: center !important;}
	}
	</style>
	</head>
	<body>
	<center class="wrapper" style="display: table;table-layout: fixed;width: 100%;min-width: 620px;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;background-color: #ecf5f3;">
      <table class="header centered" style="border-collapse: collapse;border-spacing: 0;Margin-left: auto;Margin-right: auto;width: 600px;">
        <tbody><tr>
          <td style="padding: 0;vertical-align: top;">
            <table class="preheader" style="border-collapse: collapse;border-spacing: 0;" align="right">
              <tbody><tr>
                <td class="no-images" style="padding: 0;vertical-align: top;padding-bottom: 24px;padding-top: 24px;text-align: right;width: 280px;letter-spacing: 0.01em;line-height: 17px;font-weight: 400;font-size: 11px;">
                  <div class="spacer" style="font-size: 1px;line-height: 2px;width: 100%;">&nbsp;</div>
                  
                  <div class="webversion" style="font-family: Avenir,sans-serif;color: #b9b9b9;">No Images? <a style="text-decoration: none;letter-spacing: 0.03em;font-weight: 700;transition: opacity 0.2s ease-in;color: #b9b9b9;" href="#" target="_blank">Click here</a></div>
                </td>
              </tr>
            </tbody></table>
            <table style="border-collapse: collapse;border-spacing: 0;" align="left">
              <tbody><tr>
                <td class="logo emb-logo-padding-box" style="padding: 0;vertical-align: top;mso-line-height-rule: at-least;width: 280px;padding-top: 24px;padding-bottom: 24px;">
                  <div class="logo-left" style="font-weight: 700;font-family: Avenir,sans-serif;color: #555;font-size: 0px !important;line-height: 0 !important;" id="emb-email-header"><a href="http://griyatawang.com"><img style="border: 0; " src="http://griyatawang.com/themes/griyatawang/images/logo.png" alt="" width="200"></a></div>
                </td>
              </tr>
            </tbody></table>
          </td>
        </tr>
      </tbody></table>
      
          <table class="border" style="border-collapse: collapse;border-spacing: 0;font-size: 1px;line-height: 1px;background-color: #d4dddb;Margin-left: auto;Margin-right: auto;" width="602">
            <tbody><tr><td style="padding: 0;vertical-align: top;">&#8203;</td></tr>
          </tbody></table>
        
          <table class="centered" style="border-collapse: collapse;border-spacing: 0;Margin-left: auto;Margin-right: auto;">
            <tbody><tr>
              <td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #d4dddb;width: 1px;">&#8203;</td>
              <td style="padding: 0;vertical-align: top;">
                <table class="one-col" style="border-collapse: collapse;border-spacing: 0;Margin-left: auto;Margin-right: auto;width: 600px;background-color: #ffffff;table-layout: fixed;" emb-background-style="">
                  <tbody><tr>
                    <td class="column" style="padding: 0;vertical-align: top;text-align: left;">
                      
            <div class="image" style="font-size: 12px;mso-line-height-rule: at-least;font-style: normal;font-weight: 400;Margin-bottom: 0;Margin-top: 0;font-family: sans-serif;color: #60666d;" align="center">
              <img class="gnd-corner-image gnd-corner-image-center gnd-corner-image-top" style="border: 0;-ms-interpolation-mode: bicubic;display: block;max-width: 900px;" src="http://griyatawang.com/themes/griyatawang/images/order-bg.jpg" alt="" width="100%">
            </div>
          
                        <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%;">
                          <tbody><tr>
                            <td class="padded" style="padding: 0;vertical-align: top;padding-left: 32px;padding-right: 32px;word-break: break-word;word-wrap: break-word;">
                              
            
<p style="font-style: normal;font-weight: 400;Margin-bottom: 0;Margin-top: 24px;font-size: 15px;font-family: sans-serif;color: #60666d;"><strong style="font-weight: bold;">Hi, [ '.setting_expl('contact','c_fullname_1').' ]</strong></p>
<p style="font-style: normal;font-weight: 400;Margin-bottom: 0;Margin-top: 24px;font-size: 15px;line-height: 24px;font-family: sans-serif;color: #60666d;">Seseorang yang bernama '.$contact_name.' telah menghubungi anda, berikut ini detail mengenai reservation yang dikirim oleh saudara '.$contact_name.', anda dapat mereply email ini untuk membalasnya.</p>

<table style="font-style: normal;font-weight: 400;Margin-bottom: 0;font-size: 15px;font-family: sans-serif;color: #60666d; line-height: 25px; margin-left: -3px; margin-top: 20px;">
	<tr>
		<td width="80px;">Menu</td>
		<td width="1px">:</td>
		<td> '.$contact_menu.'</td>
	</tr>
	<tr>
		<td width="80px;">Name</td>
		<td width="1px">:</td>
		<td> '.$contact_name.'</td>
	</tr>
	<tr>
		<td>Address</td>
		<td width="1px">:</td>
		<td> '.$contact_address.'</td>
	</tr>
	<tr>
		<td>Email</td>
		<td width="1px">:</td>
		<td> '.$contact_email.'</td>
	</tr>
	<tr>
		<td>Phone</td>
		<td width="1px">:</td>
		<td> '.$contact_phone.'</td>
	</tr>	
	<tr>
		<td>Message</td>
		<td width="1px">:</td>
		<td> '.$contact_message.'</td>
	</tr>
</table>

                            </td>
                          </tr>
                        </tbody></table>
                      
                      <div class="column-bottom" style="font-size: 32px;line-height: 32px;transition-timing-function: cubic-bezier(0, 0, 0.2, 1);transition-duration: 150ms;transition-property: all;">&nbsp;</div>
                    </td>
                  </tr>
                </tbody></table>
              </td>
              <td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #d4dddb;width: 1px;">&#8203;</td>
            </tr>
          </tbody></table>
        
          <table class="border" style="border-collapse: collapse;border-spacing: 0;font-size: 1px;line-height: 1px;background-color: #d4dddb;Margin-left: auto;Margin-right: auto; margin-bottom: 20px;" width="602">
            <tbody><tr><td style="padding: 0;vertical-align: top;">&nbsp;</td></tr>
          </tbody></table>
       
    </center>
	</body>
	</html>
	';
	
//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
//$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = "mail.griyatawang.com";
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 26;
//Whether to use SMTP authentication
$mail->SMTPAuth = false;
//Set who the message is to be sent from
$mail->setFrom($contact_email, $contact_name);
//Set an alternative reply-to address
//$mail->addReplyTo('replyto@example.com', 'First Last');
//Set who the message is to be sent to
$mail->addAddress(setting_expl('contact','c_email_1'), setting_expl('contact','c_fullname_1'));
//Set the subject line
$mail->Subject = $contact_subject;
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML($message);
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo '';//echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    //echo "Message sent!";
    echo '';
}
?>	