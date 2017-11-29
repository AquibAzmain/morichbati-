<!DOCTYPE html>
<html>

<head>
<title>Morichbati : A Wedding Planner</title>
<meta charset="UTF-8">
<link rel="icon" type="image/x-icon" href="Mimages/logo.png">

<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css"
	media="all" />
<!--// bootstrap-css -->
<!-- css -->

<link rel="stylesheet" href="css/styleSideNav.css" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />

<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
<!-- font -->

<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
    
</script>
</head>
<body>
	<!-- banner -->
	<div class="banner">
		<div class="header">
			<div class="container">
				<div class="header-left">
					<div class="w3layouts-logo">
						<h1>
							<a href="index.php"><img src="Mimages/morichbati2.png"
								height="50px" width="130px" /></a>
						</h1>
					</div>
				</div>
				<div class="top-nav">
					<nav class="navbar navbar-default">

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse"
							id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li><a href="index.php">Home</a></li>
								<li><a href="about.php">About</a></li>
								<li><a class="active" href="bookOnline.php">Book Online</a></li>
								<li><a href="contact.php">Contact</a></li>
								<li><a href="signin.php">Sign in</a></li>
							</ul>
							<div class="clearfix"></div>
						</div>
					</nav>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>

	</div>
	<!-- //banner -->
	<!--bookOnline -->
	<div class="main-textgrids">
		<div class="container">
			<div class="wrapper">
				<!-- Sidebar Holder -->
				<nav id="sidebar">
					<div class="sidebar-header">
						<h3>Choose Package</h3>
					</div>

					<ul class="list-unstyled components">
						<li><a href="bookOnlinePlatinum.php">Platinum</a></li>
						<li><a href="bookOnlineDiamond.php">Diamond</a></li>
						<li class="active"><a href="bookOnlineGold.php">Gold</a></li>
						<li><a href="bookOnlineSilver.php">Silver</a></li>
					</ul>

				</nav>

				<!-- Page Content Holder -->
				<div>

					<div>
						<div class="large-12 columns blackblur fontcolor"
							style="padding-top: 10px;padding-left:300px">

								<p style="color: black; text-align: center">Choose Services</p>
								<form name="form" action="costEstimation.php" method="post">
									<div class="row">
										<div class="large-12 columns">
											<div class="checkbox">
                                              <label><input type="checkbox" name="services[]" value="Wedding Venues" checked="checked" disabled>Wedding Venues</label>
                                              <input type="hidden" name="services[]" value="Venue" checked="checked">
                                            </div>
                                            <div class="checkbox">
                                              <label><input type="checkbox" name="services[]" value="Theme" checked="checked">Wedding Themes</label>
                                            </div>
                                            <div class="checkbox disabled">
                                              <label><input type="checkbox" name="services[]" value="Photography & Cinematography" checked="checked" disabled>Wedding Photography and Cinematography </label>
                                              <input type="hidden" name="services[]" value="Photography & Cinematography" checked="checked">
                                            </div>
                                            
                                            <div class="checkbox">
                                              <label><input type="checkbox" name="services[]" value="Shopping Guide">Wedding Shopping Guide</label>
                                            </div>
                                            <div class="checkbox">
                                              <label><input type="checkbox" name="services[]" value="Jeweller Recommendations">Jeweller Recommendations</label>
                                            </div>
                                            <div class="checkbox">
                                              <label><input type="checkbox" name="services[]" value="Invitation Card Recommendations" checked="checked">Invitation Card Recommendations</label>
                                            </div>
                                            <div class="checkbox">
                                              <label><input type="checkbox" name="services[]" value="Wedding Entertainment">Wedding Entertainment</label>
                                            </div>
                                            <div class="checkbox">
                                              <label><input type="checkbox" name="services[]" value="Wedding Music" checked="checked">Wedding Music</label>
                                            </div>
                                            <div class="checkbox">
                                              <label><input type="checkbox" name="services[]" value="Wedding Dessert Decoration">Wedding Dessert Decoration</label>
                                            </div>
                                            <div class="checkbox">
                                              <label><input type="checkbox" name="services[]" value="Palki & Horse Decoration">Palki and horse decoration for bride and groom</label>
                                            </div>
                                            <div class="checkbox">
                                              <label><input type="checkbox" name="services[]" value="Catering Service" checked="checked" disabled>Catering Service</label>
                                              <input type="hidden" name="services[]" value="Catering Service" checked="checked">
                                            </div>

										</div>
									</div>

									<div class="row">
										<div class="large-12 columns">
											<input type="submit" value="Check Cost Estimation" name="serviceSubmit" class="btn btn-primary btn-block"
												style="background-color: #f44b42; width: 100%;">
										</div>
									</div>
								</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- //bookOnline -->
	<!-- footer -->
	<footer>
		<div class="agileits-w3layouts-footer-top"></div>
		<div class="agileits-footer-bottom">
			<div class="container">
				<div class="agileits-footer-bottom-grids">
					<div class="col-md-6 footer-bottom-left">
						<h5>About Us</h5>
						<div class="footer-img-grids">
							<div class="footer-img">
								<img src="Mimages/5.jpg" alt="" />
							</div>
							<div class="footer-img-info">
								<p>Clients are always our highest priority. Through their humble
									satisfaction we have earned such renowned position in this
									profession. It's always our pleasure and honor to make them
									satisfy. We express our highest gratitude to all our valued
									clients who made us possible to become pioneer in this
									industry.</p>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="col-md-3 footer-bottom-right">
						<h5>Newsletter</h5>
						<form action="#" method="post">
							<input type="text" placeholder="Subscribe" name="Subscribe"
								required> <input type="submit" value="Subscribe">
						</form>
					</div>
					<div class="col-md-3 footer-bottom-right">
						<h5>Contact</h5>
						<p>
							<i class="fa fa-map-marker"></i> Dhanmondi &amp; 27/A, Dhaka,
							1212
						</p>
						<p>
							<i class="fa fa-phone"></i> +00 (123) 456 7890
						</p>
						<p>
							<i class="fa fa-envelope-o"></i> morichbati@gmail.com
						</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="copyright">
			<div class="container">
				<p>Copyright © 2017 - All Rights Reserved - Morichbati</p>
			</div>
		</div>
	</footer>
	<!-- //footer -->
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->

</body>
</html>