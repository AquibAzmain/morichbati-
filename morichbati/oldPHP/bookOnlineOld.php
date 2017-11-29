<?php
session_start();
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
	
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
  	<style>
  		.panel {
		    border: 1px solid #f44b42; 
		    border-radius:0;
		    transition: box-shadow 0.5s;
		}

		.panel:hover {
		    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
		}

		.panel-footer .btn:hover {
		    border: 1px solid #f44b42;
		    background-color: #fff !important;
		    color: #f44b42;
		}

		.panel-heading {
		    color: #fff !important;
		    background-color: #f44b42 !important;
		    padding: 25px;
		    border-bottom: 1px solid transparent;
		    border-top-left-radius: 0px;
		    border-top-right-radius: 0px;
		    border-bottom-left-radius: 0px;
		    border-bottom-right-radius: 0px;
		}

		.panel-footer {
		    background-color: #fff !important;
		}

		.panel-footer h3 {
		    font-size: 32px;
		}

		.panel-footer h4 {
		    color: #aaa;
		    font-size: 14px;
		}

		.panel-footer .btn {
		    margin: 15px 0;
		    background-color: #f44b42;
		    color: #fff;
		}
  	</style>
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
	<!--bookOnline -->
	<div class="main-textgrids">
		<div class="container">
			<div class="container-fluid">
			  <div class="text-center">
			    <h2>Packages</h2>
			    <h4>Choose a packages that works for you</h4>
			  </div>
			  <div class="row">
			    <div class="col-sm-4">
			      <div class="panel panel-default text-center">
			        <div class="panel-heading">
			          <h2>Platinum</h2>
			        </div>
			        <div class="panel-body">
			          <a href = "" data-toggle="modal" data-target="#platinum"><img src="Mimages/platinum.jpeg" alt="Girl in a jacket" style="width:300px;height:200px;"></a>
			        </div>
			        <div class="panel-footer">
			          <h4>৳20 Lac-৳30 Lac</h4>
			          <h4>(Estimated cost)</h4>
			          <form method = "post" action="chooseVenue.php">
						<input id="package" name="package" type="hidden" value="Platinum">
			          	<input type = "submit" value="Book now" class="btn btn-lg">
			          </form>	
			        </div>
			      </div>

			    </div> 
			    <div class="col-sm-4">
			      <div class="panel panel-default text-center">
			      	<div class="panel-heading">
			          <h2>Diamond</h2>
			        </div>
			        <div class="panel-body">
			          <a href = "" data-toggle="modal" data-target="#diamond"><img src="Mimages/diamond.jpg" alt="Girl in a jacket" style="width:300px;height:200px;"></a>
			        </div>
			        <div class="panel-footer">
			          <h4>৳15 Lac-৳20 Lac</h4>
			          <h4>(Estimated cost)</h4>
			          <form method = "post" action="chooseVenue.php">
						<input id="package" name="package" type="hidden" value="Diamond">
			          	<input type = "submit" value="Book now" class="btn btn-lg">
			          </form>
			        </div>
			      </div> 
			    </div> 
			   <div class="col-sm-4">
			      <div class="panel panel-default text-center">
			        <div class="panel-heading">
			          <h2>Gold</h2>
			        </div>
			        <div class="panel-body">
			          <a href = "" data-toggle="modal" data-target="#gold"><img src="Mimages/gold.jpg" alt="Girl in a jacket" style="width:300px;height:200px;"></a>
			        </div>
			        <div class="panel-footer">
			          <h4>৳10 Lac-৳15 Lac</h4>
			          <h4>(Estimated cost)</h4>
			          <form method = "post" action="chooseVenue.php">
						<input id="package" name="package" type="hidden" value="Gold">
			          	<input type = "submit" value="Book now" class="btn btn-lg">
			          </form>
			        </div>
			    </div> 
			  </div>
			  <div class="col-sm-4">
			      <div class="panel panel-default text-center">
			        <div class="panel-heading">
			          <h2>Silver</h2>
			        </div>
			        <div class="panel-body">
			          <a href = "" data-toggle="modal" data-target="#silver"><img src="Mimages/silver.jpg" alt="Girl in a jacket" style="width:300px;height:200px;"></a>
			        </div>
			        <div class="panel-footer">
			          <h4>৳5 Lac-৳10 Lac</h4>
			          <h4>(Estimated cost)</h4>
			          <form method = "post" action="chooseVenue.php">
						<input id="package" name="package" type="hidden" value="Silver">
			          	<input type = "submit" value="Book now" class="btn btn-lg">
			          </form>
			        </div>
			    </div> 
			  </div>
			  <div class="col-sm-4">
			      <div class="panel panel-default text-center">
			        <div class="panel-heading">
			          <h2>Others</h2>
			        </div>
			        <div class="panel-body">
			          <a href = "" data-toggle="modal" data-target="#others"><img src="Mimages/others.jpg" alt="Girl in a jacket" style="width:300px;height:200px;"></a>
			        </div>
			        <div class="panel-footer">
			          <h4>৳2 Lac-৳5 Lac</h4>
			          <h4>(Estimated cost)</h4>
			          <form method = "post" action="chooseVenue.php">
						<input id="package" name="package" type="hidden" value="Others">
			          	<input type = "submit" value="Book now" class="btn btn-lg">
			          </form>
			        </div>
			    </div> 
			  </div>
			  <div class="col-sm-4">
			      <div class="panel panel-default text-center">
			        <div class="panel-heading">
			          <h2>Customizable</h2>
			        </div>
			        <div class="panel-body">
			          <a href = "" data-toggle="modal" data-target="#customizalbe"><img src="Mimages/customizable.jpg" alt="Girl in a jacket" style="width:300px;height:200px;"></a>
			        </div>
			        <div class="panel-footer">
			          <h4>৳2.5 Lac-৳50 Lac</h4>
			          <h4>(Estimated cost)</h4>
			          <form method = "post" action="chooseVenue.php">
						<input id="package" name="package" type="hidden" value="Customizable">
			          	<input type = "submit" value="Book now" class="btn btn-lg">
			          </form>
			        </div>
			    </div> 
			  </div>
			</div>
		</div>
	</div>
	</div>
	<!-- Modal -->
  <div class="modal fade" id="platinum" role="dialog">
    <div class="modal-dialog">  
      <!-- Modal content-->
      <div style="background-image: url(Mimages/divBack.jpg); width: 60%;margin:auto" class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Package: Platinum</h4>
          <h4>Price Range: 20-30 lac</h4>
        </div>
        <div class="modal-body">
          <p>Included Services:<br/>
			1. Wedding Venues <br/>
			2. Wedding Themes <br/>
			3. Wedding Photography and Cinematography <br/> 
			4. Wedding Shopping Guide<br/> 
			5. Wedding Jewelers<br/>
			6. Wedding Invitation Card<br/>
			7. Wedding Entertainment<br/>
			8. Wedding Music<br/>
			9. Wedding Dessert Decoration<br/>
			10. Flower Decoration<br/>
			11. Palki and horse decoration for bride and groom<br/>
			12. Choosing the Caterer</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>     
    </div>
  </div>

  <div class="modal fade" id="diamond" role="dialog">
    <div class="modal-dialog">  
      <!-- Modal content-->
      <div style="background-image: url(Mimages/divBack.jpg); width: 60%;margin:auto" class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Package: Diamond</h4>
          <h4>Price Range: 15-20 lac</h4>
        </div>
        <div class="modal-body">
          <p>Included Services:<br/>
			1. Wedding Venues <br/>
			2. Wedding Themes <br/>
			3. Wedding Photography and Cinematography <br/> 
			4. Wedding Shopping Guide <br/>
			5. Wedding Jewelers <br/>
			6. Wedding Invitation Card <br/>
			7. Wedding Music <br/>
			8. Choosing the Caterer</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>     
    </div>
  </div>

  <div class="modal fade" id="gold" role="dialog">
    <div class="modal-dialog">  
      <!-- Modal content-->
      <div style="background-image: url(Mimages/divBack.jpg); width: 60%;margin:auto" class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Package: Gold</h4>
          <h4>Price Range: 10-15 lac</h4>
        </div>
        <div class="modal-body">
          <p>Included Services:<br/>
			1. Wedding Venues <br/>
			2. Wedding Photography and Cinematography <br/> 
			3. Wedding Invitation Card <br/>
			4. Wedding Music <br/>
			5. Choosing the Caterer</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>     
    </div>
  </div>

  <div class="modal fade" id="silver" role="dialog">
    <div class="modal-dialog">  
      <!-- Modal content-->
      <div style="background-image: url(Mimages/divBack.jpg); width: 60%;margin:auto" class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Package: Silver</h4>
          <h4>Price Range: 5-10 lac</h4>
        </div>
        <div class="modal-body">
          <p>Included Services:<br/>
			1. Wedding Venues <br/>
			2. Wedding Photography and Cinematography <br/> 
			3. Choosing the Caterer</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>     
    </div>
  </div>

  <div class="modal fade" id="others" role="dialog">
    <div class="modal-dialog">  
      <!-- Modal content-->
      <div style="background-image: url(Mimages/divBack.jpg); width: 60%;margin:auto" class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Package: Others</h4>
          <h4>Price Range: 2-5 lac</h4>
        </div>
        <div class="modal-body">
          <p>Included Services:<br/>
			1. Pre-wedding Planning Services (Engagement, Holud, Mehedi)<br/>
			2. Honeymoon Package<br/>
			3. Anniversary Planning</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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