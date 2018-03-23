<?php
require_once('PHPMailerAutoload.php');
$mail = new PHPMailer();
//$mail->CharSet =  "utf-8";
$mail->IsSMTP();
$mail->SMTPDebug= "1";  
// enable SMTP authentication
$mail->SMTPAuth = true;    
$mail->SMTPSecure = "ssl";       
$mail->Host = "smtp.gmail.com";     
$mail->Port = "465";    
$mail->IsHTML(true);
// GMAIL username
$mail->Username = "rsny14@gmail.com";
// GMAIL password
$mail->Password = "";       // add the password

// sets GMAIL as the SMTP server
$mail->setFrom("rsny14@gmail.com");

// set the SMTP port for the GMAIL server

// $mail->From='rajeev11430@gmail.com';
// $mail->FromName='Rajeevkumar Yadav';
  // recepient address          this is functions one parameter
$mail->Subject  =  'SMTP Mail Testing';

$mail->Body    = 'Hi there , This is just a testing mail from php';    // you can give subject also as parameter
$mail->AddAddress('rajeev11430@gmail.com'); 
if($mail->Send())
{
	echo "Message was  Send :)";             // specific messages to be sent as a parameter
	//header('Location:index.php');
}
else
{
	echo "Mail Error - >".$mail->ErrorInfo;
}
?>