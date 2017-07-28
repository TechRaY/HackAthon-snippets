<?php
require_once('PHPMailer/PHPMailerAutoload.php');
$mail = new PHPMailer();
$mail->CharSet =  "utf-8";
$mail->IsSMTP();
// enable SMTP authentication
$mail->SMTPAuth = true;                  
// GMAIL username
$mail->Username = "rajeev11430@gmail.com";
// GMAIL password
$mail->Password = "";       // add the password
$mail->SMTPSecure = "ssl";  
// sets GMAIL as the SMTP server
$mail->Host = "smtp.gmail.com";
// set the SMTP port for the GMAIL server
$mail->Port = "465";
$mail->From='rajeev11430@gmail.com';
$mail->FromName='Rajeevkumar Yadav';
$mail->AddAddress('rajeevkumar.yadav@ves.ac.in', 'Rajeevkumar');   // recepient address          this is functions one parameter
$mail->Subject  =  'SMTP Mail Testing';
$mail->IsHTML(true);
$mail->Body    = 'Hi there , This is just a testing mail from php';    // you can give subject also as parameter
if($mail->Send())
{
	echo "Message was Successfully Send :)";             // specific messages to be sent as a parameter
	//header('Location:index.php');
}
else
{
	echo "Mail Error - >".$mail->ErrorInfo;
}
?>
