<?php
	
	session_start();
	$code = $_SESSION['code'];
	
	$u_code = $_POST["u_code"];
	

	
	if($u_code == $code){
		
		require 'connect.inc.php';
		
		
		$name = mysqli_real_escape_string($con, $_SESSION["name"]);
		$email = mysqli_real_escape_string($con, $_SESSION["email"]);
		$password = mysqli_real_escape_string($con, $_SESSION["password"]);
		$gender = mysqli_real_escape_string($con, $_SESSION["gender"]);
		$category = mysqli_real_escape_string($con, $_SESSION["category"]);
		$contact = mysqli_real_escape_string($con, $_SESSION["contact"]);
		$cnic = mysqli_real_escape_string($con, $_SESSION["cnic"]);
	    $image = mysqli_real_escape_string($con, $_SESSION["image"]);
		
		$sql="INSERT INTO user_info (name, email, pwd, gender, category, contactno, cnic, image)
		VALUES ('$name', '$email', '$password', '$gender', '$category', '$contact', '$cnic', '$image')";
		
		
		if (!mysqli_query($con,$sql)) {
			die('Error: ' . mysqli_error($con));
		}
		mysqli_close($con);
		
		if($_SESSION['category'] == 'driver'){
		header("Location: http://localhost/Web%20(1)/Web/signup/driver.php");
		}
		
		if($_SESSION['category'] == 'rider'){
		header("Location: http://localhost/Web%20(1)/Web/signup/rider.php");
		}
		
	}
	
	else{
		echo "Incorrect code";
	}
	
	//unset($_SESSION['code']);
	//unset($_SESSION['name']);
	//unset($_SESSION['email']);
	//unset($_SESSION['password']);
	//unset($_SESSION['gender']);
	//unset($_SESSION['category']);
	//unset($_SESSION['contact']);
	//unset($_SESSION['cnic']);
	
	
	
	
?>

