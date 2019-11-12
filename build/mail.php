<?php
function send_mail($subject,$msg,$email)
{

$json_string = array('to' => array('leebandoni@gmail.com','hello@horrornights.co.uk',$email),'category' => 'test_category');




//$params = array(
   // 'api_user'  => $user,
   // 'api_key'   => $pass,
    


	$url = 'https://sendgrid.com/';
	$user = 'horrornights';
	$pass = 'Ilovepussy1';
	$params = array(
		'api_user'  => $user,
		'api_key'   => $pass,
		'to'        => 'hello@horrornights.co.uk',
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
	//print_r($responseval);
	return $responseval;



}

 function sendSMS($username, $password, $to, $message, $originator) {
        $URL = 'https://api.textmarketer.co.uk/gateway/'."?username=$username&password=$password&option=xml";
        $URL .= "&to=$to&message=".urlencode($message).'&orig='.urlencode($originator);
        $fp = fopen($URL, 'r');
        return fread($fp, 1024);
    }

    //echo "hello";

?>