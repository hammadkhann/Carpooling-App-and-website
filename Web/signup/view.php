<?php
	
	require 'connect.inc.php';
	
	$name = mysqli_real_escape_string($con, $_POST["name"]);
	$email = mysqli_real_escape_string($con, $_POST["email"]);
	$password = mysqli_real_escape_string($con, $_POST["password"]);
	$gender = mysqli_real_escape_string($con, $_POST["gender"]);
	$category = mysqli_real_escape_string($con, $_POST["category"]);
	
	$sql="INSERT INTO user (Name, Email, Password, Gender, Category)
	VALUES ('$name', '$email', '$password', '$gender', '$category')";
	
	
	if (!mysqli_query($con,$sql)) {
		die('Error: ' . mysqli_error($con));
	}
	
	echo "1 record added";
	
	mysqli_close($con);
	
?>