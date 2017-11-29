<!DOCTYPE html>
<html>

<head>
    <title>Morichbati : A Wedding Planner</title>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="Mimages/logo.png">
   
    <!-- bootstrap-css -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!--// bootstrap-css -->
    <!-- css -->
    <link rel="stylesheet" href="css/styleSideNav.css"/>
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
							<a href="index.php"><img src="Mimages/morichbati2.png" height="50px" width="130px"/></a>
						</h1>
					</div>
				</div>
				<div class="top-nav">
					<nav class="navbar navbar-default">
							
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="bookOnline.php">Book Online</a></li>
                                <li><a class="active" href="contact.php">Contact</a></li>
                                <li><a href="signin.php">Sign in</a></li>
                            </ul>
                            <div class="clearfix"> </div>
                        </div>
					</nav>		
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		
	</div>
	<!-- //banner -->
	<!-- contact -->
	<div class="contact">
		<div class="container">
			<div class="agile-contact-form">
				<div class="col-md-6 contact-form-left">
					<div class="w3layouts-contact-form-top">
						<h3>Get in touch</h3>
						<p>Thank you for using Morichbati! Please complete the form, so we can provide quick and efficient service. If this is an urgent matter please contact Customer Support:</p>
					</div>
					<div class="agileits-contact-address">
						<ul>
							<li><i class="fa fa-phone" aria-hidden="true"></i> <span>+1 234 567 8901</span></li>
							<li><i class="fa fa-phone fa-envelope" aria-hidden="true"></i> <span>morichbati@gmail.com</span></li>
							<li><i class="fa fa-map-marker" aria-hidden="true"></i> <span>Dhanmondi &amp; 27/A, Dhaka, 1212.</span></li>
						</ul>
					</div>
				</div>
				
				<div class="clearfix"> </div>
			</div>
			
			<div class="w3agile-map">
				<h3>Find us here</h3>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.754751175041!2d90.37336581435866!3d23.756123494475915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8aca568828b%3A0xe190915b6958a57!2sDhanmondi+27+No+Bus+Stop!5e0!3m2!1sen!2sbd!4v1508539183947" width="600" height="450"  style="border:0" ></iframe>
			</div>
		</div>
	</div>
	<!-- //contact -->
	<!-- footer -->
	<footer>
        <div class="agileits-w3layouts-footer-top">
         
        </div>
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
                                <p>Clients are always our highest priority. Through their humble satisfaction we have earned such renowned position in this profession. It's always our pleasure and honor to make them satisfy. We express our highest gratitude to all our valued clients who made us possible to become pioneer in this industry.</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="col-md-3 footer-bottom-right">
                        <h5>Newsletter</h5>
                        <form action="#" method="post">
                            <input type="text" placeholder="Subscribe" name="Subscribe" required>
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                    <div class="col-md-3 footer-bottom-right">
                        <h5> Contact</h5>
                        <p> <i class="fa fa-map-marker"></i> Dhanmondi &amp; 27/A, Dhaka, 1212</p>
                        <p><i class="fa fa-phone"></i> +00 (123) 456 7890</p>
                        <p><i class="fa fa-envelope-o"></i> morichbati@gmail.com</p> 
                    </div>
                    <div class="clearfix"> </div>
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