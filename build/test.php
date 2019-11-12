<?php
$eventName='test evet';
$Email='nishantsaini0442@gmail.com';
$eventEmail='nishantsaini0442@gmail.com';
$address='test';
$Name='test1';
$to = $Email;

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

			<p>Simply print out this email and bring it with you to the event. If you have any questions or need advice please email us at tickets@vivaproseccofestival.com</p>

			<p>VENUE: $address </p>
			

			

			=====================================================================

			</body>

			</html>

			";


			// Always set content-type when sending HTML email

			$headers = "MIME-Version: 1.0" . "\r\n";

			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

			// More headers

			$headers .= 'From: <' . $eventEmail .'>' . "\r\n";


			//echo "mail us".$mail = mail($to,$subject,$message,$headers);

send_mail($subject,$message,$Name,'hello@horrornights.co.uk');
			// kdaviesnz
			if ($verbose) {
				echo "<p>Mail message: $message</p>";
			}

			$message = 'Payment successful. Please check your email for ticket information.';




			function send_mail($subject,$msg,$from,$fromemail)
{

$json_string = array('to' => array('web-0omau@mail-tester.com'),'category' => 'test_category');




//$params = array(
   // 'api_user'  => $user,
   // 'api_key'   => $pass,
    


	$url = 'https://sendgrid.com/';
	$user = 'horrornights';
	$pass = 'Ilovesex1';
	$params = array(
		'api_user'  => $user,
		'api_key'   => $pass,
		'to'        => 'hello@hello@horrornights.co.uk',
                    'x-smtpapi' => json_encode($json_string),
                    
		'subject'   => $subject,
		'html'      => $msg,
		'text'      => $msg,
		'from'      => 'hello@horrornights.co.uk',
                    'fromname'      => 'HorrorNights',
	  );


	$request =  'https://api.sendgrid.com/api/mail.send.json';

	// Generate curl request
	$session = curl_init($request);
	// Tell curl to use HTTP POST
	curl_setopt ($session, CURLOPT_POST, true);
	// Tell curl that this is the body of the POST
	curl_setopt ($session, CURLOPT_POSTFIELDS, $params);
	// Tell curl not to return headers, but do return the response
	curl_setopt($session, CURLOPT_HEADER, false);
	curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

	// obtain response
	$responseval = curl_exec($session);

	
	curl_close($session);
	// print everything out
	print_r($responseval);
	return $responseval;



}





    // Simple SMS send function
    function sendSMS($username, $password, $to, $message, $originator) {
        $URL = 'https://api.textmarketer.co.uk/gateway/'."?username=$username&password=$password&option=xml";
        $URL .= "&to=$to&message=".urlencode($message).'&orig='.urlencode($originator);
        $fp = fopen($URL, 'r');
        return fread($fp, 1024);
    }
    // Example of use
    //$response = sendSMS('tp4m3n', 'FCtb7n', '07490238449', 'test msg', 'HorrorNights');
    //echo $response;