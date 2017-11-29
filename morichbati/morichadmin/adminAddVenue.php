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
						<h3>Admin Activities</h3>
					</div>

					<ul class="list-unstyled components">
						<li><a href="adminAddVenue.php">Add Venue-Package</a></li>
						<li><a href="adminAddTheme.php">Add Theme</a></li>
						<li><a href="adminAddCaterer.php">Add Caterer</a></li>
						<li><a href="adminAddPhotographer.php">Add Photographer</a></li>
						<li><a href="adminAddCard.php">Add Card</a></li>
						<li><a href="adminAddJewel.php">Add Jeweller</a></li>
					</ul>

				</nav>

				<!-- Page Content Holder -->
				<div>

					<div>
						<div class="large-12 columns blackblur fontcolor"
							style="padding-top: 10px;padding-left:300px">

								<p style="color: black; text-align: center">Add Venue-Package Details</p>
								<form name="form" id="myform" action="addVenuePack.php" method="post" enctype="multipart/form-data">
									<div class="row">
										<div class="large-12 columns">
											Venue-Package Name:<br>
											<input type="text" name="name">
											<br><br>
											Venue ID:<br>
											<input type="text" name="id">
											<br><br>
											Venue Address:<br>
											<input type="text" name="address">
											<br><br>
											Venue Contant Number:<br>
											<input type="text" name="phone">
											<br><br>
											Venue Email:<br>
											<input type="text" name="email">
											<br><br>
											Venue Price:<br>
											<input type="text" name="price">
											<br><br>
											Venue Area:<br>
											<input type="text" name="area">
											<br><br>
											Venue Package Description:<br>
											<textarea rows="4" cols="50" name="package" form="myform"></textarea>
											<br><br>
											Venue Catering Minimum Price:<br>
											<input type="text" name="min">
											<br><br>
											Venue Catering Maximum Price:<br>
											<input type="text" name="max">
											<br><br>
											Upload Venue Photo:
											<input type="file" name="image" />
											<br>

										</div>
									</div>

									<div class="row">
										<div class="large-12 columns">
											<input type="submit" value="Add Venue-Package" name="serviceSubmit" class="btn btn-primary btn-block"
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