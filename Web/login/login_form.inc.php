<?php


if(isset($_POST['username'])&&isset($_POST['password']))
{
	$username= $_POST['username'];
	$password= $_POST['password'];
	@$cat = $_POST['cat'];

	if($cat=='driver')
	{
		if(!empty($username)&& !empty($password) && !empty($cat))
	{
		
		$query = "SELECT `Driver_id` FROM driver r ,user_info u WHERE u.email ='$username' AND u.pwd='$password' AND r.user_id=u.user_id";
		if($query_run = mysqli_query($conn,$query)){
			$query_num_rows= mysqli_num_rows($query_run);
			if($query_num_rows==0)
			{
				echo 'Invalid username/password';
			}
	   else if($query_num_rows==1)
	   {
	   foreach($query_run as $query_row)
	   {
       $user_id = $query_row['Driver_id'];
	   $user_id;
	   $_SESSION['user_id'] = $user_id;
	    header('Location: userprofile/Driver.php');
	   }
	   
	   }
	   
	}
	else
	{
		echo 'you must Enter passowrd/username';
		header('Location: login_index.php');
	}
}
}
	else
	{
		if(!empty($username)&& !empty($password) && !empty($cat))
	{
		
		$query = "SELECT `Rider_id` FROM rider r ,user_info u WHERE u.email ='$username' AND u.pwd='$password' AND r.user_id=u.user_id";
		if($query_run = mysqli_query($conn,$query)){
			$query_num_rows= mysqli_num_rows($query_run);
			if($query_num_rows==0)
			{
				echo 'Invalid username/password';
			}
	   else if($query_num_rows==1)
	   {
	   foreach($query_run as $query_row)
	   {
       $user_id = $query_row['Rider_id'];
	   echo $user_id;
	   $_SESSION['user_id'] = $user_id;
	   
	   header('Location: userprofile/Rider.php');
	   }
	   
	   }
	   
	}
	else
	{
		echo 'you must Enter password/username';
			header('Location: login_index.php');
	}
}
		
	}
	
}


?>

<!DOCTYPE HTML>
<html>
<head>
<title>FASTPOOL LOGIN</title>
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
								<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>LOGIN</span></li> 
							</ul>
						</div>					
						<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
						<p class="tab-text">Connect to the world of carpool</p>
							<div class="register ">
								<form action="<?php echo @$current_file;?>" method="POST">																		
									<input placeholder="Email Address" name="username" class="mess" type="text" required="">									
									<input placeholder="Password" name="password" class="pass" type="password" required="">	
								
									<div class="select-section">
										
										<div class="select-right">
											<select class="sel" name="cat">
												<option  value="" selected="" disabled="" required="">Category</option>
												<option value="driver">Driver</option>
												<option value="rider">Rider</option>
									   </select>
										</div>
										<div class="clear"></div>
									</div>

									<div class="sign-up">
										<input name="submit" type="Submit" value="Log in">
									</div>
									<div class="sign-up">
									 <a href="http://localhost/Web (1)/Web/signup/signup.php" style="text-decoration:none;">New? Register Here</a>
									</div>
									
	
		</form>
							</div>
						</div>
	
				</div>
		</div>
		<div class="footer-w3l">
			<p>&copy 2016 FASTPOOL Login Form . All rights reserved | Design by <a href="http://w3layouts.com">FASTPOOL</a></p>
		
	
		</div>

	
</body>
	
</html>

	
