<?php
	
	include 'code.php';
	date_default_timezone_set('Etc/UTC');
	require 'PHPMailer-5.2.16/PHPMailerAutoload.php';
	$mail = new PHPMailer;
	
	$add = $_POST["email"];
	
	$mail->isSMTP();
	$mail->SMTPDebug = 1;
	$mail->Debugoutput = 'html';
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth = true;
	$mail->Username = "fastpoolnu@gmail.com";
	$mail->Password = "fastpool123";
	$mail->setFrom("saumanblk@gmail.com", 'Sauman');
	$mail->addAddress($add, 'Sauman');
	$mail->Subject = 'FASTPOOL Verification Code';
	$mail->Body = $code;
	
	if (!$mail->send()) {
		echo "Mailer Error: " . $mail->ErrorInfo;
	} 

?>
	

