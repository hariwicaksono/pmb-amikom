<?php
//require 'PHPMailerAutoload.php';
$message = '
	<html>
<head>
<title>Rumah Turi Reservation</title>
<style>
@page {
    size: auto;   /* auto is the initial value */
    margin: 25px;  /* this affects the margin in the printer settings */
}

@media print {
    .no-print {
        display: none;
    }

    .yes-print {
        display: block;
    }

    .break {
        page-break-before: always;
    }
}

</style>
</head>
<body>
<div class="main_invoice" style=" width:750px; margin: 0 auto; font-family: Arial; font-size: 12px;">
		<img class="logo_invoice" style="float: left;" src="http://demo.rumahturi.com/themes/rumahturi/img/logo.png" width="150">
		<table class="invoice_date" style="border: 0; float: right; width: 450px; border-collapse: collapse; color: #040404; font-size: 12px;">
			<tbody><tr>
				<td align="right" style="border: 0; padding: 5px;"><strong>Invoice Date :</strong></td>
				<td width="200" style="border: 0; padding: 5px;">'.$booking_date.'</td>
			</tr>
			<tr>
				<td align="right" style="border: 0; padding: 5px;"><strong>Booking Code :</strong></td>
				<td style="border: 0; padding: 5px;">'.$booking_code.'</td>
			</tr>
			<tr>
				<td align="right" style="border: 0; padding: 5px;"><strong>Type :</strong></td>
				<td style="border: 0; padding: 5px;">Rumah Turi Reservation</td>
			</tr>
		</tbody></table>
		
		<div class="clear" style="clear: both;"></div>
		
		
		<div class="client_detail" style="width: 49%; margin-top:10px; float: left; ">
		<h2 style="font-size: 18px;">Order Details</h2>
		<table style="border: 0; line-height: 20px; font-size: 13px;">
			<tbody>
			<tr>
				<td style="border: 0;"><b>Name</b></td>
				<td style="border: 0;"><b>:</b></td>
				<td style="border: 0;">'.$booking_name.'</td>
			</tr>
			<tr>
				<td style="border: 0;"><b>Nationality</b></td>
				<td style="border: 0;"><b>:</b></td>
				<td style="border: 0;">'.$booking_nationally.'</td>
			</tr>						
			<tr>
				<td valign="top" style="border: 0;"><b>Address</b></td>
				<td valign="top" style="border: 0;"><b>:</b></td>
				<td style="border: 0;">'.$booking_address.'</td>
			</tr>
			<tr>
				<td style="border: 0;"><b>Contact</b></td>
				<td style="border: 0;"><b>:</b></td>
				<td style="border: 0;">'.$booking_phone.'</td>
			</tr>
			<tr>
				<td style="border: 0;"><b>Email</b></td>
				<td style="border: 0;"><b>:</b></td>
				<td style="border: 0;">'.$booking_email.'</td>
			</tr>
			<tr>
				<td style="border: 0;">&nbsp;</td>
				<td style="border: 0;"></td>
				<td style="border: 0;"></td>
			</tr>
			<tr>
				<td style="border: 0;"><b>Booking</b></td>
				<td style="border: 0;"><b>:</b></td>
				<td style="border: 0;">'.$booking_adult.' Adult, '.$booking_child.' Child</td>
			</tr>
		</tbody>
		</table>
		</div>
		<div class="my_detail" style="width: 49%; margin-top:10px; float: right;">
		<h2>Rumah Turi</h2>
		<table style="border: 0; font-size: 13px; line-height: 20px; padding-bottom: 15px;">
			<tbody>
			<tr>
				<td style="border: 0;"><b>Phone</b></td>
				<td style="border: 0;"><b>:</b></td>
				<td style="border: 0;">'.setting_expl('contact','c_phone_11').'</td>
			</tr>
			<tr>
				<td style="border: 0;"><b>Email</b></td>
				<td style="border: 0;"><b>:</b></td>
				<td style="border: 0;">'.setting_expl('contact','c_email_1').'</td>
			</tr>
			<tr>
				<td style="border: 0;"><b>Website</b></td>
				<td style="border: 0;"><b>:</b></td>
				<td style="border: 0;"><span style="color: #045890;">rumahturi.com</span></td>
			</tr>
			<tr>
				<td valign="top" style="border: 0;"><b>Address</b></td>
				<td valign="top" style="border: 0;"><b>:</b></td>
				<td style="border: 0;">'.setting_expl('contact','c_address_1').'</td>
			</tr>
		</tbody>
		</table>					
		</div>
		
		<div class="clear" style="clear: both;"></div>
		<table border="1" width="100%" style="margin-bottom: 10px; font-size:13px; border: 1px solid #ccc; border-collapse: collapse;">
		<tbody>
			<tr>
				<td colspan="2" bgcolor="#F7F5F6" width="50%" style="border: 1px solid #ccc; padding: 5px;"><strong>Arrival</strong></td>
				<td colspan="2" bgcolor="#F7F5F6" style="border: 1px solid #ccc; padding: 5px;"><strong>Departure</strong></td>
			</tr>
			<tr>
				<td style="border: 1px solid #ccc; padding: 5px;"><strong>Date Time</strong></td>
				<td style="border: 1px solid #ccc; padding: 5px;">'.date("D, d F Y", strtotime($booking_arrival)).'</td>
				<td style="border: 1px solid #ccc; padding: 5px;"><strong>Date Time</strong></td>
				<td style="border: 1px solid #ccc; padding: 5px;">'.date("D, d F Y", strtotime($booking_departure)).'</td>			
			</tr>
		</tbody>
		</table>
							
		<table border="1" width="100%" style="margin-bottom: 10px; font-size:13px; border: 1px solid #ccc; border-collapse: collapse;">
		<tbody>
			<tr>
				<td colspan="5" style="border: 1px solid #ccc; padding: 5px;"><strong>Payment Detail</strong></td>
			</tr>
			<tr>
				<td bgcolor="#F7F5F6" style="width:45%; border: 1px solid #ccc; padding: 5px;"><strong>Room</strong></td>
				<td bgcolor="#F7F5F6" style="width:5%; border: 1px solid #ccc; padding: 5px;"><strong>QTY</strong></td>
				<td bgcolor="#F7F5F6" style="width:16%; border: 1px solid #ccc; padding: 5px; text-align: center;"><strong>Date</strong></td>
				<td bgcolor="#F7F5F6" style="width:18%; border: 1px solid #ccc; padding: 5px; text-align: center;"><strong>Price</strong></td>
				<td bgcolor="#F7F5F6" style="width:18%; border: 1px solid #ccc; padding: 5px;"><strong>Total</strong></td>
			</tr>';
foreach(DatesFromRange($booking_arrival, date('Y-m-d', strtotime ( '-1 day' ,strtotime($booking_departure)))) as $daterange)
{ 
$bo_detail	= room_price_single($room_id,$daterange);

$message .= '
			<tr>
				<td style="border: 1px solid #ccc; padding: 5px;"><strong>'.po_value('post_id',$room_id,'post_title').'</strong></td>
				<td style="border: 1px solid #ccc; padding: 5px; text-align: center;">'.$room_id_qty.'</td>
				<td style="border: 1px solid #ccc; padding: 5px; text-align: center; text-align: center;">'.$daterange.'</td>
				<td style="border: 1px solid #ccc; padding: 5px; text-align: right;">IDR '.currency($bo_detail['price_normal']).'</td>
				<td style="border: 1px solid #ccc; padding: 5px; text-align: right;">IDR '.currency($bo_detail['price_normal']*$room_id_qty).'</td>
			</tr>';
}
$message .= '
			<tr>
				<td colspan="4" style="border: 1px solid #ccc; padding: 5px; text-align:right;"><strong>Total</strong></td>
				<td style="border: 1px solid #ccc; padding: 5px; text-align:right;">IDR '.currency(room_hotel_price_normal($room_id,$booking_arrival, date('Y-m-d', strtotime ( '-1 day' ,strtotime($booking_departure))))*$room_id_qty).'</td>
			</tr>';
$message .= '
<tr>
				<td bgcolor="#F7F5F6" style="width:45%; border: 1px solid #ccc; padding: 5px;"><strong>Extra Bed</strong></td>
				<td bgcolor="#F7F5F6" style="width:5%; border: 1px solid #ccc; padding: 5px;"><strong>QTY</strong></td>
				<td bgcolor="#F7F5F6" style="width:16%; border: 1px solid #ccc; padding: 5px; text-align: center;"><strong>Date</strong></td>
				<td bgcolor="#F7F5F6" style="width:18%; border: 1px solid #ccc; padding: 5px; text-align: center;"><strong>Price</strong></td>
				<td bgcolor="#F7F5F6" style="width:18%; border: 1px solid #ccc; padding: 5px;"><strong>Total</strong></td>
			</tr>';
foreach(DatesFromRange($booking_arrival, date('Y-m-d', strtotime ( '-1 day' ,strtotime($booking_departure)))) as $daterange)
{ 
$message .= '
			<tr>
				<td style="border: 1px solid #ccc; padding: 5px;"><strong>Extra Bed</strong></td>
				<td style="border: 1px solid #ccc; padding: 5px; text-align: center;">'.$booking_bed.'</td>
				<td style="border: 1px solid #ccc; padding: 5px; text-align: center; text-align: center;">'.$daterange.'</td>
				<td style="border: 1px solid #ccc; padding: 5px; text-align: right;">IDR '.currency(setting_expl('hotel_setting','bed')).'</td>
				<td style="border: 1px solid #ccc; padding: 5px; text-align: right;">IDR '.currency(setting_expl('hotel_setting','bed')*$booking_bed).'</td>
			</tr>';
}
$message .= '
			<tr>
				<td colspan="4" style="border: 1px solid #ccc; padding: 5px; text-align:right;"><strong>Total</strong></td>
				<td style="border: 1px solid #ccc; padding: 5px; text-align:right;">IDR '.currency(day_count($booking_arrival,$booking_departure)*setting_expl('hotel_setting','bed')*$booking_bed).'</td>
			</tr>
			<tr>
				<td bgcolor="#F7F5F6" style="width:45%; border: 1px solid #ccc; padding: 5px;"><strong>Extra Breakfast</strong></td>
				<td bgcolor="#F7F5F6" style="width:5%; border: 1px solid #ccc; padding: 5px;"><strong>QTY</strong></td>
				<td bgcolor="#F7F5F6" style="width:16%; border: 1px solid #ccc; padding: 5px; text-align: center;"><strong>Date</strong></td>
				<td bgcolor="#F7F5F6" style="width:18%; border: 1px solid #ccc; padding: 5px; text-align: center;"><strong>Price</strong></td>
				<td bgcolor="#F7F5F6" style="width:18%; border: 1px solid #ccc; padding: 5px;"><strong>Total</strong></td>
			</tr>';
foreach(DatesFromRange($booking_arrival, date('Y-m-d', strtotime ( '-1 day' ,strtotime($booking_departure)))) as $daterange)
{ 
$message .= '
			<tr>
				<td style="border: 1px solid #ccc; padding: 5px;"><strong>Extra Breakfast</strong></td>
				<td style="border: 1px solid #ccc; padding: 5px; text-align: center;">'.$booking_breakfast.'</td>
				<td style="border: 1px solid #ccc; padding: 5px; text-align: center; text-align: center;">'.$daterange.'</td>
				<td style="border: 1px solid #ccc; padding: 5px; text-align: right;">IDR '.currency(setting_expl('hotel_setting','breakfast')).'</td>
				<td style="border: 1px solid #ccc; padding: 5px; text-align: right;">IDR '.currency(setting_expl('hotel_setting','breakfast')*$booking_breakfast).'</td>
			</tr>';
}

$total_room 		= (room_hotel_price_normal($room_id,$booking_arrival,date('Y-m-d', strtotime ( '-1 day' ,strtotime($booking_departure))))*$room_id_qty);
$total_bed 			= (day_count($booking_arrival,$booking_departure)*setting_expl('hotel_setting','bed')*$booking_bed);
$total_breakfast	= (day_count($booking_arrival,$booking_departure)*setting_expl('hotel_setting','breakfast')*$booking_breakfast);
$total_other 		= (setting_expl('hotel_setting','massage_60')*$booking_massage_60)+(setting_expl('hotel_setting','massage_90')*$booking_massage_90);
$total_count		= ($total_room+$total_bed+$total_breakfast+$total_other);
$total_tax			= ($total_count*(setting_expl('hotel_setting','service')+setting_expl('hotel_setting','tax'))/100);

$message .= '
			<tr>
				<td colspan="4" style="border: 1px solid #ccc; padding: 5px; text-align:right;"><strong>Total</strong></td>
				<td style="border: 1px solid #ccc; padding: 5px; text-align:right;">IDR '.currency(day_count($booking_arrival,$booking_departure)*setting_expl('hotel_setting','breakfast')*$booking_breakfast).'</td>
			</tr>
			<tr>
				<td bgcolor="#F7F5F6" style="width:45%; border: 1px solid #ccc; padding: 5px;"><strong>Other</strong></td>
				<td bgcolor="#F7F5F6" style="width:5%; border: 1px solid #ccc; padding: 5px;"><strong>QTY</strong></td>
				<td bgcolor="#F7F5F6" style="width:16%; border: 1px solid #ccc; padding: 5px; text-align: center;"></td>
				<td bgcolor="#F7F5F6" style="width:18%; border: 1px solid #ccc; padding: 5px; text-align: center;"><strong>Price</strong></td>
				<td bgcolor="#F7F5F6" style="width:18%; border: 1px solid #ccc; padding: 5px;"><strong>Total</strong></td>
			</tr>			
			<tr>
				<td style="border: 1px solid #ccc; padding: 5px;"><strong>Traditional Massage 60 Menit</strong></td>
				<td style="border: 1px solid #ccc; padding: 5px; text-align: center;">'.$booking_massage_60.'</td>
				<td style="border: 1px solid #ccc; padding: 5px; text-align: center;"></td>
				<td style="border: 1px solid #ccc; padding: 5px; text-align: right;">IDR '.currency(setting_expl('hotel_setting','massage_60')).'</td>
				<td style="border: 1px solid #ccc; padding: 5px; text-align: right;">IDR '.currency($booking_massage_60*setting_expl('hotel_setting','massage_60')).'</td>
			</tr>
			<tr>
				<td style="border: 1px solid #ccc; padding: 5px;"><strong>Traditional Massage 90 Menit</strong></td>
				<td style="border: 1px solid #ccc; padding: 5px; text-align: center;">'.$booking_massage_90.'</td>
				<td style="border: 1px solid #ccc; padding: 5px; text-align: center;"></td>
				<td style="border: 1px solid #ccc; padding: 5px; text-align: right;">IDR '.currency(setting_expl('hotel_setting','massage_90')).'</td>
				<td style="border: 1px solid #ccc; padding: 5px; text-align: right;">IDR '.currency($booking_massage_90*setting_expl('hotel_setting','massage_90')).'</td>
			</tr>
			<tr>
				<td colspan="4" style="border: 1px solid #ccc; padding: 5px; text-align:right;"><strong>Total</strong></td>
				<td style="border: 1px solid #ccc; padding: 5px; text-align:right;">IDR '.currency((setting_expl('hotel_setting','massage_60')*$booking_massage_60)+(setting_expl('hotel_setting','massage_90')*$booking_massage_90)).'</td>
			</tr>
			<tr>
				<td style="border: 1px solid #ccc; padding: 5px; text-align: right;" colspan="4"><strong>Tax</strong></td>
				<td style="border: 1px solid #ccc; padding: 5px; text-align: right;">IDR '.currency($total_tax).'</td>
			</tr>
			<tr>
				<td style="border: 1px solid #ccc; padding: 5px; text-align: right;" colspan="4"><strong>Payment Total</strong></td>
				<td style="border: 1px solid #ccc; padding: 5px; text-align: right;">IDR '.currency($total_count+$total_tax).'</td>
			</tr>
		</tbody>
		</table>
		
		<table border="0" cellpadding="0" cellspacing="0" style="width:100%;line-height:20px;margin-bottom:10px;font-size:12px;font-family:helvetica;border:1px solid #ccc;border-collapse:collapse">
<tbody><tr>
	<td align="left" style="border:1px solid #ccc;padding:5px">
	<b>Local Bank Transfer</b>
	</td>
</tr>
<tr>
	<td style="border:1px solid #ccc;padding:5px">
	<table border="1" width="100%" style="margin-bottom:10px;font-size:12px;font-family:helvetica;border:1px solid #ccc;border-collapse:collapse">
		<tbody><tr>
			<td align="center" bgcolor="#F7F5F6" style="border:1px solid #ccc;padding:5px"><b>Bank</b></td>
			<td align="center" bgcolor="#F7F5F6" style="border:1px solid #ccc;padding:5px"><b>Rekening</b></td>
			<td align="center" bgcolor="#F7F5F6" style="border:1px solid #ccc;padding:5px"><b>Cabang</b></td>
			<td align="center" bgcolor="#F7F5F6" style="border:1px solid #ccc;padding:5px"><b>Nama Pemilik Rekening</b></td>
		</tr>
		<tr>
			<td align="center" style="border:1px solid #ccc;padding:5px">'.setting_expl('hotel_setting','bank_name_1').'</td>
			<td align="center" style="border:1px solid #ccc;padding:5px">'.setting_expl('hotel_setting','bank_account_1').'</td>
			<td align="center" style="border:1px solid #ccc;padding:5px">'.setting_expl('hotel_setting','bank_branch_1').'</td>
			<td align="center" width="50%" style="border:1px solid #ccc;padding:5px">'.setting_expl('hotel_setting','bank_holder_1').'</td>
		</tr>
		<tr>
			<td align="center" style="border:1px solid #ccc;padding:5px">'.setting_expl('hotel_setting','bank_name_2').'</td>
			<td align="center" style="border:1px solid #ccc;padding:5px">'.setting_expl('hotel_setting','bank_account_2').'</td>
			<td align="center" style="border:1px solid #ccc;padding:5px">'.setting_expl('hotel_setting','bank_branch_2').'</td>
			<td align="center" width="50%" style="border:1px solid #ccc;padding:5px">'.setting_expl('hotel_setting','bank_holder_2').'</td>
		</tr>
	</tbody></table>
		After completing the payment process, don"t forget to confirm your payment by SMS to : (081) - 1234567 <br>
		SMS Format : Booking Code (space) Bank Destination (space) Sender Name<br>

		or confirm via this  <a href="http://rumahturi.com/reservation/confirm/bank.html" target="_blank">link.</a>
		
	</td>
</tr>
</tbody></table>
		
		<div class="clear"></div>
		
		<center></center>
	</div>
</body>
</html>
	';
	


//Create a new PHPMailer instance
$mail = new PHPMailer;
//Set who the message is to be sent from
$mail->setFrom(setting_expl('contact','c_email_1'), setting_expl('contact','c_fullname_1'));
//Set an alternative reply-to address
//$mail->addReplyTo('gleenid@gmail.com', 'First Last');
//Set who the message is to be sent to
$mail->addAddress($booking_email, $booking_name);
//Set the subject line
$mail->Subject = 'Rumah Turi Reservation '.$booking_code;
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML($message);
//Replace the plain text body with one created manually
//$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    //echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    //echo "Message sent!";
}
