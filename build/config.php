<?php

$username = "718a619fe36c";
$password = "7db3a1ddf4ae88da";
$hostname = "localhost";
$database = "horror";


//connection to the database
$db = mysqli_connect($hostname, $username, $password,$database);

// Other
$currency = "GBP"; // GBP
$eventName = "Horror Nights";
$eventEmail = "show@horrornights.co.uk";

// if sandbox is set to true then Square sandbox will be used and debugging information displayed.
$sandbox = false;

// if $verbose is set to true then debugging information will be displayed.
$verbose = false;

if ($sandbox) {
	$access_token = '
EAAAEGjbydeVORxkcN5KaWEb0VYzuZFZriSs-AManBl935TX-1VvHZ55Zj2_tAS4';
	$applicationID = 'sandbox-sq0idp-7zv5a4K_Zdh4LQOaCmiKUQ';
	$currency = "USD";	
} else {
	$access_token = 'EAAAEJz2d3Tt6Tlg1cVPDQfXpa2FcI-oFuHHC7ek6G9jAuW1eGSeRB5uFBzsCxBz';
	$applicationID = 'sq0idp-knOLdD5phYo2PEuKd1hUYg';
}

?>