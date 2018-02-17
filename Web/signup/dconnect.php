<?php
	
	require 'connect.inc.php';
	
	$model = mysqli_real_escape_string($con, $_POST["model"]);
	@$c_no = mysqli_real_escape_string($con, $_POST["carno"]);
	@$l_no = mysqli_real_escape_string($con, $_POST["licenseno"]);
	
	$sql="INSERT INTO driver (model, carno, licenseno)
	VALUES ('$model', '$c_no', '$l_no')";
	
	if (!mysqli_query($con,$sql)) {
			die('Error: ' . mysqli_error($con));
		}
	else{
		header("Location: http://localhost/Web%20(1)/Web/login/login_index.php");
	}
	
	mysqli_close($con);
	
	
	
?>