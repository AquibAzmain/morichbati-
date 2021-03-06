<?php
session_start();
if(isset($_POST["package"])){
    $_SESSION['package'] = $_POST["package"]; 
    //echo $_SESSION['package'];
}
?>
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
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!--// css -->
    <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- font -->
    <link rel="stylesheet" href="css/scss/foundation.css">
    <link rel="stylesheet" href="css/scss/style.css">

     

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
                                <li><a class="active"  href="bookOnline.php">Book Online</a></li>
                                <li><a href="contact.php">Contact</a></li>
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
	<!--chooseVenue -->
	<div class="main-textgrids">
		<div class="container">
            <div class="large-12 columns">
                <div class="large-3 columns centerdiv">
                    <a href="#" style="background-color:#f44b42;text-decoration: none;" class="button circle fontslabo" >1</a>
                    <p class="fontgrey">Venue and Date</p>
                </div>
                <div class="large-3 columns centerdiv">
                    <a href="choosePhotograph.php" style="background-color:#000000;text-decoration: none;" class="button circle fontslabo rectangle blackblur" >2</a>
                    <p class="fontgrey">Photogrpaher</p>
                </div>
                <div class="large-3 columns centerdiv">
                    <a href="choosePhotograph.php" style="background-color:#000000;text-decoration: none;" class="button circle fontslabo rectangle blackblur" >3</a>
                    <p class="fontgrey">Other Services</p>
                </div>
                <div class="large-3 columns centerdiv">
                    <a href="choosePhotograph.php" style="background-color:#000000;text-decoration: none;" class="button circle fontslabo rectangle blackblur" >4</a>
                    <p class="fontgrey">Confirm Booking</p>
                </div>
            </div>
			<div class="row">
                <div class="large-12 columns blackblur fontcolor" style="padding-top:10px;">
                
                <div class="large-12 columns " >
                <p style="color: white; text-align: center">Choose Venue</p>
                        <form name="form" action="chooseDate.php" method="post">
                        <div class="row">
                             <div class="large-12 columns">
                                
                                    
                                        <select  name="venue" id="venue" style="width:100%;">
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        </select>
                                    
                                
                            </div>    
                        </div>
                       
                          <div class="row">
                            <div class="large-12 columns" >
                                <button name="submit" href="#" class="button small fontslabo" style="background-color:#f44b42; width:100%;" >Check Availability</button>
                            </div>
                          </div>
                        </form>
                </div>
                


            </div>
            </div>
		</div>
	</div>
	
	<!-- //bookOnline -->
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
                            <input type="text" placeholder="Subscribe" name="Subscribe" required="">
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
			$().UItoTop({ easingType: 'easeOutQuart' });							
			});
	</script>
<!-- //here ends scrolling icon -->
</body>	
</html>