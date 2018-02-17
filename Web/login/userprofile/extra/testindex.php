<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?
//SESSION_START();

include("functions.php");
include("conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Creative Resume Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
<link href="css/owl.theme.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="css/cm-overlay.css" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<!-- menu -->
<link rel="stylesheet" href="css/main.css">
<script type="text/javascript" src="js/main.js"></script>
<!-- //menu --> 
<script>
$(document).ready(function() { 
	$("#owl-demo").owlCarousel({
 
		autoPlay: 3000, //Set AutoPlay to 3 seconds
		autoPlay:true,
		items : 3,
		itemsautomobile : [640,5],
		itemsautomobileSmall : [414,4]
 
	});
	
}); 
</script>
</head>

<body>
	<!-- banner -->
	<div class="banner" id="home">
		
		<div class="container">
			<div class="agile-logo">
				<h1><a href="index.html"><span>FASTPOOL</span></a></h1>
			</div>
			<div class="w3l-banner-grids">
				<div class="col-md-8 w3ls-banner-right">
					<div class="banner-right-img">
						<img src="images/Sauman.jpg" alt="" />
					</div>
					
					<div class="clearfix"> </div>
					<div class="w3-button">
						
					</div>
					<div class="social-grids">
						<div class="social-info">
						
						</div>
						<div class="agileinfo-social-grids">
							<ul>
								<li><a href="https://www.facebook.com/ssbalkhi"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://twitter.com/sauman95"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
								<li><a href="#"><i class="fa fa-vk"></i></a></li>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			<?php


require("conn.php");




$query= "SELECT name,gender,d.email,contactno,image,address FROM Driver d,user_info u where d.Driver_id=1 and u.user_id = d.user_id";
$result3 = mysqli_query($con,$query);
while($row3 = mysqli_fetch_assoc($result3))
{ 
$array1=$row3['name'];
$array2=$row3['gender'];
$array3=$row3['email'];
$array4=$row3['contactno'];
$array5=$row3['image'];
$array6=$row3['address'];}
?>
<div class="col-md-4 w3ls-banner-left">
					<div class="w3ls-banner-left-info">
						<h4>Status</h4>
						
					</div>
					<div class="w3ls-banner-left-info">
						<h4>Name</h4>
					<?php echo $array1.'  '?>
					
					
					</div>
					<div class="w3ls-banner-left-info">
						<h4>Sex</h4>
						<?php echo $array2.'  ';?>
					</div>
					<div class="w3ls-banner-left-info">
						<h4>Address</h4>
					<?php echo $array6.'  ';?>
					</div>
					<div class="w3ls-banner-left-info">
						<h4>Email Address</h4>
						
                     <?php echo $array3.'  ';?>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>









				
	<!-- //banner -->
	<!-- statistics -->
	<div class="jarallax statistics" id="statistics">
		<div class="container">
			<div class="w3-agileits-statistics-heading">
				<h3>My Statistics</h3>
			</div>
			<div class="agile-statistics-grids">
				<div class="col-sm-4 agile-statistics-grid">
					<h4>Suzuki Cultus</h4>
					<i class="fa fa-automobile" aria-hidden="true"></i>
					<p>Car Model</p>
				</div>
				<div class="col-sm-4 agile-statistics-grid statistics-grid2">
					<h4>35</h4>
					<i class="fa fa-check" aria-hidden="true"></i>
					<p>Rides Completed</p>
				</div>
				<div class="col-sm-4 agile-statistics-grid">
					<h4>5</h4>
					<i class="fa fa-star" aria-hidden="true"></i>
					<p>Rating</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<script src="js/jarallax.js"></script>
			<script src="js/SmoothScroll.min.js"></script>
			<script type="text/javascript">
				/* init Jarallax */
				$('.jarallax').jarallax({
					speed: 0.5,
					imgWidth: 1366,
					imgHeight: 768
				})
			</script>
		</div>
	</div>
	<!-- //statistics -->
	<!-- feedback -->
	<div class="jarallax feedback">
		<div class="container">
			<div class="w3-agileits-statistics-heading">
				<h3>Rider Feedback</h3>
			</div>
			<div class="agileits-feedback-grids">
				<div id="owl-demo" class="owl-carousel owl-theme">
					<div class="item">
						<div class="feedback-info">
							<div class="feedback-top">
								<p> Sauman is one of the best drivers at FAST. </p>
							</div>
							<div class="feedback-grids">
								<div class="feedback-img">
									<img src="images/Hammad.jpg" alt="" />
								</div>
								<div class="feedback-img-info">
									<h5>Hammad Khan</h5>
									<p>Rider</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>	
					</div>
					<div class="item">
						<div class="feedback-info">
							<div class="feedback-top">
								<p>I wish I could drive like Sauman. I'm a huge fan of him. </p>
							</div>
							<div class="feedback-grids">
								<div class="feedback-img">
									<img src="images/Akif.jpg" alt="" />
								</div>
								<div class="feedback-img-info">
									<h5>Akif Jawed</h5>
									<p>Rider</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>	
					</div>
					<div class="item">
						<div class="feedback-info">
							<div class="feedback-top">
								<p>Sauman's car has been the best I have ever travelled in. Thank you Sauman. </p>
							</div>
							<div class="feedback-grids">
								<div class="feedback-img">
									<img src="images/Hasan.jpg" alt="" />
								</div>
								<div class="feedback-img-info">
									<h5>Hasan BBA Khan</h5>
									<p>Rider</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>	
					</div>
					<div class="item">
						<div class="feedback-info">
							<div class="feedback-top">
								<p>Sauman is very punctual. He is always there on the given time. </p>
							</div>
							<div class="feedback-grids">
								<div class="feedback-img">
									<img src="images/Talha.jpg" alt="" />
								</div>
								<div class="feedback-img-info">
									<h5>Talha Asif</h5>
									<p>Rider</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>	
					</div>
				</div>
			</div>
			<script type="text/javascript">
				/* init Jarallax */
				$('.jarallax').jarallax({
					speed: 0.5,
					imgWidth: 1366,
					imgHeight: 768
				})
			</script>

		</div>
	</div>
	<!-- //feedback -->
		
	<!-- copyright -->
	<div class="agileits-w3layouts-footer">
		<div class="container">
			<p>© 2016 FASTPOOL. All rights reserved | Design by <a href="http://w3layouts.com">FASTPOOL</a></p>
		</div>
	</div>
	<!-- //copyright -->
	<script src="js/bars.js"></script>
	<script src="js/owl.carousel.js"></script> 
</body>	
</html>