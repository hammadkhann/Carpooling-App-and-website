<?php
	require 'mail.php';
	//session_start();
	$_SESSION["name"] = $_POST["name"];
	$_SESSION["email"] = $_POST["email"];
	$_SESSION["password"] = $_POST["password"];
	$_SESSION["gender"] = $_POST["gender"];
	$_SESSION["category"] = $_POST["category"];
	$_SESSION["contact"] = $_POST["contact"];
	$_SESSION["cnic"] = $_POST["cnic"];
	
	
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Verify</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Tab Sign In Form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'></head>
<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<!--web-fonts-->
<script src="js/jquery.min.js"></script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
				<script type="text/javascript">
					$(document).ready(function () {
						$('#horizontalTab').easyResponsiveTabs({
							type: 'default', //Types: default, vertical, accordion           
							width: 'auto', //auto or any width like 600px
							fit: true   // 100% fit in a container
						});
					});
				   </script>
<body>

	
		<!---header--->
		<div class="header">
			<h1>FASTPOOL</h1>
		</div>
		<!---header--->
		<!---main--->
			<div class="main-content-w3">
				<div class="sap_tabs-w3agile">	
					<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						<div class="tab">
							<ul>
								<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Code Verification</span></li> 
							</ul>
						</div>					
						<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
						<p class="tab-text">Enter your code here</p>
							<div class="register ">
								<form method="post" action="connect.php">											
																		
									<input placeholder="Code" name="u_code" class="mess" type="text" required="">									
									
									<div class="sign-up">
										<input type="submit" value="Verify">
									</div>
								</form>
							</div>
						</div>
	
				</div>
			</div>
			
			
			
		<div class="footer-w3l">
			<p>&copy 2016 FASTPOOL Sign Up Form . All rights reserved | Design by <a href="http://w3layouts.com">FASTPOOL</a></p>
		</div>
		


		<!---main--->
</body>
</html>