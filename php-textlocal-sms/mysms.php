
	// // Account details
	// $apiKey = urlencode('V8z7fwiKVrk-0RYLLvpWbZtne3wlqftei6Xwp55j7n');
	
	// // Message details
	// $numbers = array(917507827367);
	// $sender = urlencode('TXTLCL');
	// $message = rawurlencode('This is a message from Ravi');
 
	// $numbers = implode(',', $numbers);
 
	// // Prepare data for POST request
	// $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
 
	// // Send the POST request with cURL
	// $ch = curl_init('https://api.textlocal.in/send/');
	// curl_setopt($ch, CURLOPT_POST, true);
	// curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	// $response = curl_exec($ch);
	// curl_close($ch);
	
    // // Process your response here
    // echo "<pre>";
    // print_r($response);



<?php
	require('Textlocal.class.php');
 
	$Textlocal = new Textlocal(false, false, 'V8z7fwiKVrk-0RYLLvpWbZtne3wlqftei6Xwp55j7n');
 
	$numbers = array(917507827367);
	$sender = 'TXTLCL';
	$message = 'This is your message';
 
	$response = $Textlocal->sendSms($numbers, $message, $sender);
	print_r($response);
?>