<?php
/**
 * This example shows sending a message using PHP's mail() function.
 */

require '../PHPMailerAutoload.php';






$contact_name = 'Gleen Ferdinand';
$contact_email = 'gleenid@gmail.com';
$contact_tel = '085643688710';
$contact_date = '26-03-1986';
$contact_time = '08.00';



$message 	= '
	<html>
	<head>
	<title>New Message from '.$contact_name.'</title>
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
                  <div class="logo-left" style="font-weight: 700;font-family: Avenir,sans-serif;color: #555;font-size: 0px !important;line-height: 0 !important;" id="emb-email-header"><a href="'.$_SERVER['HTTP_HOST'].'" target="_blank"><img style="border: 0; " src="http://demo.rumahturi.com/themes/rumahturi/img/logo.png" width="150" alt="Gleen Ferdinand" ></a></div>
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
              <a href="'.$_SERVER['HTTP_HOST'].'" target="_blank"><img class="gnd-corner-image gnd-corner-image-center gnd-corner-image-top" style="border: 0;-ms-interpolation-mode: bicubic;display: block;max-width: 900px;" src="http://demo.rumahturi.com/upload/rumah_turi.jpg" width="100%"></a>
            </div>
          
                        <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%;">
                          <tbody><tr>
                            <td class="padded" style="padding: 0;vertical-align: top;padding-left: 32px;padding-right: 32px;word-break: break-word;word-wrap: break-word;">
                              
            
<p style="font-style: normal;font-weight: 400;Margin-bottom: 0;Margin-top: 24px;font-size: 15px;font-family: sans-serif;color: #60666d;"><strong style="font-weight: bold;">Hi, [ gleenferdinand@gmail.com ]</strong></p>
<p style="font-style: normal;font-weight: 400;Margin-bottom: 0;Margin-top: 24px;font-size: 15px;line-height: 24px;font-family: sans-serif;color: #60666d;">Seseorang yang bernama '.$contact_name.' telah menghubungi anda, berikut ini detail mengenai pertanyaan yang dikirim oleh saudara '.$contact_name.', anda dapat mereply email ini untuk membalasnya.</p>

<table style="font-style: normal;font-weight: 400;Margin-bottom: 0;font-size: 15px;font-family: sans-serif;color: #60666d; line-height: 25px; margin-left: -3px; margin-top: 20px;">
	<tr>
		<td width="80px;">Name</td>
		<td width="1px">:</td>
		<td> '.$contact_name.'</td>
	</tr>
	<tr>
		<td>Email</td>
		<td width="1px">:</td>
		<td> '.$contact_email.'</td>
	</tr>
	<tr>
		<td>Phone</td>
		<td width="1px">:</td>
		<td> '.$contact_tel.'</td>
	</tr>
	<tr>
		<td>Date</td>
		<td width="1px">:</td>
		<td> '.$contact_date.'</td>
	</tr>
	<tr>
		<td>Time</td>
		<td width="1px">:</td>
		<td> '.$contact_time.'</td>
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
//Set who the message is to be sent from
$mail->setFrom('gondank@gmail.com', 'First Last');
//Set an alternative reply-to address
$mail->addReplyTo('gleenid@gmail.com', 'First Last');
//Set who the message is to be sent to
$mail->addAddress('gleenferdinand@gmail.com', 'John Doe');
//Set the subject line
$mail->Subject = 'PHPMailer mail() test';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML($message);
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
