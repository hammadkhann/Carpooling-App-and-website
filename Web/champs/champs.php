
 <?php
 require("connect.inc.php");
 function get_feed_back()
{
global $conn;
$array = array();
$query= "CALL `TOPDRIVER`(@p0, @p1, @p2, @p3); SELECT @p0 AS `name`, @p1 AS `rate1`, @p2 AS `model1`, @p3 AS `car_no`;";
$result3 = mysqli_query($con,$query);
while($row3 = mysqli_fetch_assoc($result3))
{ 
 echo $array['name']=$row3['name'];
 echo $array['model1']=$row3['model1'];
echo $array['car_no']=$row3['car_no'];
 echo $array['rate1']=$row3['rate1'];
}
return $array;
}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>FASTPOOL CHAMPS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Outing Travel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- css files -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- /css files -->
<!-- font files -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- /font files -->
<!-- js files -->
<script src="js/modernizr.custom.js"></script>
<!-- /js files -->
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

    


	
<!-- Testimonials -->
<section class="our-testimonials slideanim" id="testimonials">
	<h3 class="text-center slideanim">Top Drivers</h3>
	<p class="text-center slideanim">These are the best performers of the week depending on their ratings.</p>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4">
				<div class="test">
					<img src="images/Sauman.jpg" class="img-responsive slideanim" alt="">
					<h4 class="text-center slideanim"><a href="https://www.facebook.com/ssbalkhi">Sauman Balkhi</a></h4>
					<p class="t1 slideanim">Car: Honda Civc Type R</p>
					<p class="t1 slideanim">Car no: BDE-069</p>
					<p class="t1 slideanim">Rating: 5.0</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-4">
				<div class="test">
					<img src="images/Akif.jpg" class="img-responsive slideanim" alt="">
					<h4 class="text-center slideanim"><a href="https://www.facebook.com/akif.jawed3">Akif Jawed</a></h4>
					<p class="t1 slideanim">Car: Suzuki WagonR</p>
					<p class="t1 slideanim">Car no: BBC-990</p>
					<p class="t1 slideanim">Rating: 5.0</p>

				</div>
			</div>
			<div class="col-lg-4 col-md-4">
				<div class="test">
					<img src="images/Hammad.jpg" class="img-responsive slideanim" alt="">
					<h4 class="text-center slideanim"><a href="https://www.facebook.com/hMMd.khan">Hammad Khan</a></h4>
					<p class="t1 slideanim">Car: Honda City</p>
					<p class="t1 slideanim">Car no: AZZ-999</p>
					<p class="t1 slideanim">Rating: 5.0</p>

				</div>
			</div>
		</div>
	</div>
</section>
<!-- Testimonials -->


<!-- Footer Section -->
<section class="footer">
	<h2 class="text-center">THANKS FOR VISITING US</h2>
	<hr>
	<div class="container">
		<div class="row">
			<div class="col-md-4 footer-left">
				<h4>Contact Information</h4>
				<div class="contact-info">
					<div class="address">	
						<i class="glyphicon glyphicon-globe"></i>
						<p class="p3">FAST NUCES</p>
						<p class="p4">Karachi, Pakistan</p>
					</div>
					<div class="phone">
						<i class="glyphicon glyphicon-phone-alt"></i>
						<p class="p3">+92 335 2101822</p>
					</div>
					<div class="email-info">
						<i class="glyphicon glyphicon-envelope"></i>
						<p class="p3"><a href="mailto:email1@example.com">hammad-khan23@hotmail.com</a></p> 
					</div>
				</div>
			</div><!-- col -->
			
				
				
			
		</div><!-- row -->
	</div><!-- container -->
	<hr>
	<div class="copyright">
		<p>© 2016 FASTPOOL. All Rights Reserved | Design by <a href="" target="_blank">FASTPOOL</a></p>
	</div>
</section>
<!-- /Footer Section -->
<!-- Back To Top -->
<a href="#0" class="cd-top">Top</a>
<!-- /Back To Top -->

<!-- js files -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<!-- js for gallery -->
<script src="js/darkbox.js"></script>
<!-- /js for gallery -->
<!-- js for back to top -->
<script src="js/main.js"></script>
<!-- /js for back to top -->
<!-- js for nav-smooth scroll -->
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

  // Store hash
  var hash = this.hash;

  // Using jQuery's animate() method to add smooth page scroll
  // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
  $('html, body').animate({
    scrollTop: $(hash).offset().top
  }, 900, function(){

    // Add hash (#) to URL when done scrolling (default click behavior)
    window.location.hash = hash;
    });
  });
})
</script>
<!-- /js for nav-smooth scroll -->
<!-- js for slide animations -->
<script>
$(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slide");
    }
  });
});
</script>
<!-- /js for slide animations -->
<!-- /js files -->
</body>
</html>
