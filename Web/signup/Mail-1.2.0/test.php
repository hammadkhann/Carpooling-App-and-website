<?php


	// Pear Mail Library
	require_once "Mail.php";
	
	$from = '<saumanblk@gmail@>';
	$to = '<k142107@nu.edu.pk>';
	$subject = 'Test1';
	$body = "Testing 123 testing";
	
	$headers = array(
		'From' => $from,
		'To' => $to,
		'Subject' => $subject
	);

	$smtp = Mail::factory('smtp', array(
        'host' => 'ssl://smtp.gmail.com',
        'port' => '465',
        'auth' => true,
        'username' => 'saumanblk@gmail.com',
        'password' => 'maikolachi107'
    ));
	
	$mail = $smtp->send($to, $headers, $body);
	
	if (PEAR::isError($mail)) {
		echo('<p>' . $mail->getMessage() . '</p>');
	} else {
		echo('<p>Message successfully sent!</p>');
	}


?>