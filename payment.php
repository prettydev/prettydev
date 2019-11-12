<?php

/**
kdaviesnz March 2018
Changes:
Added check for event quantity.
Added mysqli_real_escape_string()
Added $eventName (defined in config.php)
Added $currency (defined in config.php)
Added eventlocation POST variable
Added eventaddress POST variable
Added price POST variable
Added debug code
 */

require 'config.php'; // creates $db
require 'vendor/autoload.php';
require 'mail.php';
error_reporting(0);
# Replace these values. You probably want to start with your Sandbox credentials
# to start: https://docs.connect.squareup.com/articles/using-sandbox/
# The access token to use in all Connect API requests. Use your *sandbox* access
# token if you're just testing things out.

// kdaviesnz
// $access_token is now defined in config.php
// $access_token = 'sandbox-REDCUP';
//$access_token = 'REDCUP';
//$access_token = 'sandbox-REDCUP';
// $access_token = 'sandbox-REDCUP\'';
//$access_token ='REDCUP';
# Helps ensure this code has been reached via form submission

if(!empty($_POST)) {
//	var_dump($_POST);
//	die();
}

/*
 Example POST
$_POST =   array (size=11)
  'name' => string 'me' (length=12)
  'email' => string 'me@gmail.com' (length=19)
  'Phone' => string '5555555' (length=9)
  'date' => string '27th July' (length=9)
  'eventtime' => string '06:30PM to 11:30PM' (length=18)
  'eventlocation' => string 'London friday evening' (length=21)
  'eventaddress' => string 'The Glasgow Shed - 23 Clydebrae Street, Glasgow, G51 2AJ' (length=56)
  'price' => string '1' (length=1)
  'eventquantity' => string '1' (length=1)
  'nonce' => string 'CBASEJ3SEFg9q0ZmM72I6ctFQ1UgAQ' (length=30)
  'coupon' => string '' (length=0)
 */
if(!empty($_POST)){

	if ($_SERVER['REQUEST_METHOD'] != 'POST') {
		error_log("Received a non-POST request");
		echo "Request not allowed";
		http_response_code(405);
		return;
	}

	// kdaviesnz
	if (empty($_POST["eventquantity"])) {
		$_POST["eventquantity"] = 1;
	}

	# Fail if the card form didn't send a value for `nonce` to the server
	$nonce = $_POST['nonce'];
	if (is_null($nonce)) {
		echo "Invalid card data";
		http_response_code(422);
		return;
	}

	\SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken($access_token);
	$locations_api = new \SquareConnect\Api\LocationsApi();
	try {
		$locations = $locations_api->listLocations();
		#We look for a location that can process payments
		$location = current(array_filter($locations->getLocations(), function($location) {
			$capabilities = $location->getCapabilities();
			return is_array($capabilities) &&
			       in_array('CREDIT_CARD_PROCESSING', $capabilities);
		}));
	} catch (\SquareConnect\ApiException $e) {
		// echo "<pre>";
		// print_r($e->getResponseBody());
		echo $error=$e->getResponseBody()->errors[0]->category;
		// echo "Caught exception!<br/>";
		// print_r("<strong>Response body:</strong><br/>");
		// echo "<pre>"; var_dump($e->getResponseBody()); echo "</pre>";
		// echo "<br/><strong>Response headers:</strong><br/>";
		// echo "<pre>"; var_dump($e->getResponseHeaders()); echo "</pre>";
		exit(1);
	}

	$coupon = mysqli_real_escape_string($db,$_POST['coupon']);

	$email =  mysqli_real_escape_string($db,$_POST['email']);

	$Phone =  mysqli_real_escape_string($db,$_POST['Phone']);

	$date =  mysqli_real_escape_string($db,$_POST['date']);

	$eventtime = explode('_' , $_POST['eventtime']);

	$eventtime =  mysqli_real_escape_string($db,$eventtime[1]);

	$items =  mysqli_real_escape_string($db,$_POST['eventquantity']);

	$price = !empty($_POST["price"])?$_POST["price"]:15;


	if(empty($_POST['coupon'])){
		$Amount = $price*$items;
	}else

		if($coupon == "SCAREME"){
			$Amount = $price*$items -($items * 5);
		}else if($coupon == "FRIGHTNIGHT"){
			$Amount = $price*$items -($items * 3);
		}else{
			$Amount = $price*$items;
		}

	$amt=$Amount*100;

	// Passed to Square as reference id
	$invoiceid = rand(5, 15121);// Invoice ID


	// https://docs.connect.squareup.com/api/connect/v2#endpoint-charge
	$transactions_api = new \SquareConnect\Api\TransactionsApi();


	$request_body = array (
		"card_nonce" => $nonce,
		# Monetary amounts are specified in the smallest unit of the applicable currency.
		# This amount is in cents. It's also hard-coded for $1.00, which isn't very useful.
		"amount_money" => array (
			"amount" => $amt,
			"currency" => $currency
		),
		# Every payment you process with the SDK must have a unique idempotency key.
		# If you're unsure whether a particular payment succeeded, you can reattempt
		# it with the same idempotency key without worrying about double charging
		# the buyer.
		"idempotency_key" => uniqid(),
		"reference_id" => (String)$invoiceid
	);

	if ($verbose) {
		echo "<p>Sending amount $amt to Square (original amount * 100).</p>";
		echo "<p>Request body:<br/>";
		print_r($request_body);
		echo "</p>";
	}

# The SDK throws an exception if a Connect endpoint responds with anything besides
# a 200-level HTTP code. This block catches any exceptions that occur from the request.
	try {


		$result = $transactions_api->charge($location->getId(), $request_body);
		$transaction = $result->getTransaction();
		$transaction_id = $transaction["tenders"][0]["transaction_id"];

		// kdaviesnz
		if ($verbose) {
			echo "<p>Result from Square (\$transactions_api->charge()):<br/>";
			print_r($result);
			echo "</p>";
		}



		$Invoice = "Invoice #" . $invoiceid . " - " . $invoiceid;

		$Email = mysqli_real_escape_string($db, $_POST['email']);

		$Phone = mysqli_real_escape_string($db,$_POST['Phone']);

		$Dated = mysqli_real_escape_string($db,$_POST['date']);

		$EventTime = mysqli_real_escape_string($db,$_POST['eventtime']);

		$Items = mysqli_real_escape_string($db,$_POST['eventquantity']);

		$Name = mysqli_real_escape_string($db,$_POST['name']);
//		$tickettype = mysqli_real_escape_string($db,$_POST['ticketType']);
        $tickettype = (int) ($Amount/$Items);


		if($tickettype==26)
		{
		$tickettype='VIP';	
		}
		else
		{
           $tickettype='Standard';
		}

		

		$current = date('Y-m-d');

		// kdaviesnz
		$address = mysqli_real_escape_string($db, $_POST['eventaddress']);
		$eventlocation = mysqli_real_escape_string($db, $_POST['eventlocation']);
		$transactionIdSafe = mysqli_real_escape_string($db, $transaction_id);

		#INSERT query for users new registration

		$sql = "INSERT INTO Users (Name,Email,Invoice,Amount,Items,Phone,Dated,EventTime,Status,CurrentDate,location,address,transactionId,ticket_type) values('$Name' ,'$Email' ,'$Invoice','$Amount','$Items','$Phone','$Dated','$EventTime',1,'$current', '$eventlocation', '$address', '$transactionIdSafe','$tickettype')";

		// kdaviesnz
		if ($verbose) {
			echo "<p>$sql</p>";
		}

		$Query = mysqli_query($db, $sql);

		$dberror = mysqli_error($db);
		if (!empty($dberror)) {
			if ($verbose) {
				echo "<p>$dberror</p>";
				echo "<p>$Query</p>";
			}
			die("Database error");
		}

		if($Query){
			// To send HTML mail, the Content-type header must be set

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

			<p>Simply print out this email and bring it with you to the event. If you have any questions or need advice please email us at eventteam@christmasmovieexperience.com</p>

			<p>VENUE: $address </p>
			

			<p>Ticket Type : $tickettype</p>

			=====================================================================

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

			// kdaviesnz
			if ($verbose) {
				echo "<p>Mail message: $message</p>";
			}

			$message = 'Payment successful. Please check your email for ticket information.';
            $textmsg ="Confirmed: $Items Tickets for The Christmas Movie Experience $Invoice. Confirmation has been sent to your email address.";

if($Phone!=''):

sendSMS('tp4m3n', 'FCtb7n', $Phone, $textmsg, 'DriveIn');
endif;

		}



	} catch (\SquareConnect\ApiException $e) {

		// kdaviesnz
		if ($verbose) {
			$response = $e->getResponseBody();
			echo "<p>Error response<br/>";
			print_r($response);
			echo "</p>";
		}
			//
		//		var_dump($response);
		//		die();
		//echo "<pre>";
		//print_r($e->getResponseBody());
		//$e->getResponseBody()->errors->
		// echo "Caught exception!<br/>";
		// print_r("<strong>Response body:</strong><br/>");
		// echo "<pre>"; var_dump($e->getResponseBody()); echo "</pre>";
		// echo "<br/><strong>Response headers:</strong><br/>";
		// echo "<pre>"; var_dump($e->getResponseHeaders()); echo "</pre>";
		$error="Payment failed";
	}
}