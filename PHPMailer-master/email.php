
<?php
 
error_reporting(0);
 
require_once('PHPMailerAutoload.php');
$mail = new PHPMailer();
//$mail->CharSet =  "utf-8";
$mail->IsSMTP();
$mail->SMTPDebug= "1";  
// enable SMTP authentication
$mail->SMTPAuth = true;    
$mail->SMTPSecure = "tls";       
$mail->Host = "smtp.gmail.com";     
$mail->Port = "587";    
$mail->IsHTML(true);
// GMAIL username
$mail->Username = "rajeev11430@gmail.com";
// GMAIL password
$mail->Password = "";       // add the password

// sets GMAIL as the SMTP server
$mail->setFrom("rajeev11430@gmail.com");

// set the SMTP port for the GMAIL server

// $mail->From='rajeev11430@gmail.com';
// $mail->FromName='Rajeevkumar Yadav';
  // recepient address          this is functions one parameter
$mail->Subject  =  'SMTP Mail Testing';

$mail->Body    = 'its working';    // you can give subject also as parameter
$mail->AddAddress('rajeevkumar.yadav@ves.ac.in'); 
if($mail->Send())
{
	echo "Message was  Send :)";             // specific messages to be sent as a parameter
	header('Location:index.php');
}
else
{
	echo "Mail Error - >".$mail->ErrorInfo;
}

//https://www.youtube.com/watch?v=piDq4slP9X0

?>


