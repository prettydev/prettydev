<?php
require '../config.php';
require '../mail.php';
if ( !isset( $_GET['Id'] ) )
{
	exit;
}
if ( !ctype_digit($_GET['Id']) )
{
	exit;
}
$Id = mysqli_real_escape_string( $db, filter_var($_GET['Id'], FILTER_SANITIZE_STRING) );
$Query = mysqli_query($db,"SELECT * FROM Users WHERE Id = '$Id'");
if ( mysqli_num_rows( $Query ) == 1 )
{
	$user        = mysqli_fetch_assoc( $Query );

	$Name        = $user['Name'];
	$Items       = $user['Items'];
	$EventTime   = $user['EventTime'];
	$Dated       = $user['Dated'];
	$Invoice     = $user['Invoice'];
    $Phone       = $user['Phone'];
    $address     = $user['address'];
    $ticket_type = $user['ticket_type'];
    $amount      = $user['Amount'];

	// To send HTML mail, the Content-type header must be set
	$to = $user['Email'];
	
	

			$subject = "Your $eventName Tickets Have Arrived";

			$message = "<html>

			<head>

			<title>Payment Info</title>

			</head>

			<body>

			=========================================================

			<p>Hi $Name,<br><br>

			Thank you for purchasing $Items tickets for $eventName at $EventTime on $Dated.</p>

			<p>Your order reference is : $Invoice</p>

			<p>Simply print out this email and bring it with you to the event. If you have any questions or need advice please email us at hello@horrornights.co.uk</p>

			<p>VENUE: $address </p>";
			
if($ticket_type!=''){

$message.= "<p>Ticket Type : $ticket_type</p>";

}else
{
$t=$amount/$Items;

if($t==26)
{
$ticket_type='VIP';

}
else
{
$ticket_type='Standard';

}

$message.= "<p>Ticket Type : $ticket_type</p>";

}


			

			$message.= "=====================================================================

			</body>

			</html>

			";


			// Always set content-type when sending HTML email

			$headers = "MIME-Version: 1.0" . "\r\n";

			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

			// More headers

			$headers .= 'From: <' . $eventEmail .'>' . "\r\n";


			//$mail = mail($to,$subject,$message,$headers);
               $mail =send_mail($subject,$message,$to);

	// Always set content-type when sending HTML email
	//$headers = "MIME-Version: 1.0" . "\r\n";
	//$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	// More headers
	//$headers .= 'From: <hello@dirtydancingexperience.com>' . "\r\n";

	//$mail = mail($to,$subject,$message,$headers);


//$message = 'Payment successful. Please check your email for ticket information.';
            $textmsg ="Confirmed: $Items Tickets for Horror Nights $Invoice. Confirmation has been sent to your email address.";

if($Phone!=''):

sendSMS('tp4m3n', 'FCtb7n', $Phone, $textmsg, 'Horror');
endif;


    echo "success";

} else {

	echo "No Email found";
}
