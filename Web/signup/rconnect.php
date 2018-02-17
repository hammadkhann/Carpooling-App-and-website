<?php
	
	require 'connect.inc.php';
	
	@$area = mysqli_real_escape_string($con, $_POST["address"]);
	$pick = mysqli_real_escape_string($con, $_POST["pick"]);
	
	$sql="INSERT INTO rider (address, pick)
	VALUES ('$area', '$pick')";
	
	if (!mysqli_query($con,$sql)) {
			die('Error: ' . mysqli_error($con));
		}
	else{
		header("Location: http://localhost/Web%20(1)/Web/login/login_index.php");
	}
	
	mysqli_close($con);
	
	//unset($_SESSION['code']);
	//unset($_SESSION['name']);
	//unset($_SESSION['email']);
	//unset($_SESSION['password']);
	//unset($_SESSION['gender']);
	//unset($_SESSION['category']);
	//unset($_SESSION['contact']);
	//unset($_SESSION['cnic']);
	
	
?>