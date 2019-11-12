<?php

$username = "chrinlkk_santa";
$password = "Aldwych1";
$hostname = "localhost";
$database = "chrinlkk_santa";


//connection to the database
$db = mysqli_connect($hostname, $username, $password,$database);

// Other
$currency = "GBP"; // GBP
$eventName = "Christmas Movie Experience";
$eventEmail = "eventteam@christmasmovieexperience.com";

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