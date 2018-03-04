<?php

require __DIR__ . '/twilio-php-master/Twilio/autoload.php';
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'AC5fd08c31fc5f05ecac395046b157e4c5';
$auth_token = '4a27894214c26865ffda78ffc53b227e';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]

// A Twilio number you own with SMS capabilities
$twilio_number = "+17242643085";  

// Where to make a voice call (your cell phone?)
$to_number = "+919657583510";

$client = new Client($account_sid, $auth_token);
$client->account->calls->create(  
    $to_number,
    $twilio_number,
    array(
        "url" => "http://demo.twilio.com/docs/voice.xml"
    )
);
