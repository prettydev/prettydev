<?php
require 'mail.php';

$subject = "Test subject";
$msg = "Test";
$email = 'mohan81243@gmail.com';
$result = send_mail($subject,$msg,$email);
var_dump($result);

