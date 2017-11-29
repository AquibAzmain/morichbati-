<?php
include 'auth.php';
include 'db.php';

$email = $_SESSION["email"];

$sql = "SELECT * from applicant WHERE Email = '$email'";
$result = $mysqli->query($sql);
while ($row = $result->fetch_assoc()) {
    $name = $row["Name"];
    $contact = $row["Phone Number"];
    $id = $row["ID"];
    $venueID = $row["Venue ID"];
    $date = $row["Date"];
    $catererID = $row["Catering ID"];
}
$sqlCatering = "SELECT `Name` from `catering` where  ID = '" . $catererID . "'";
$result = $mysqli->query($sqlCatering);
$catererName = NULL;
while ($row = $result->fetch_assoc()) {
   $catererName = $row["Name"];
}



$sql = "SELECT * from catering";
$result = $mysqli->query($sql);
while ($row = $result->fetch_assoc()) {
    $Cname[] = $row["Name"];
    $minimumPrice[] = $row["Min Price"];
    $maxPrice[] = $row["Max Price"];
    $Cid[] = $row["ID"];
}
$arrlength = count($Cname);
include 'Recommendation/recommCater.php';
$sql = "SELECT * from catering WHERE ID IN ('$final_arr')";
$result = $mysqli->query($sql);
while ($row = $result->fetch_assoc()) {
    $Rname[] = $row["Name"];
    $RminimumPrice[] = $row["Min Price"];
    $RmaximumPrice[] = $row["Max Price"];
}
$Rarrlength = count($Rname);

if (isset($_POST["CatererSubmit"])) {
    $caterer = $_POST["caterer"];
    $sql = "UPDATE `applicant` SET `Catering ID`='" . $caterer . "' where `ID` = '" . $id . "'";
    $result = $mysqli->query($sql);
    header("Refresh:0");
}

?>
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
<style>
.panel {
	border: 1px solid #f44b42;
	border-radius: 0;
	transition: box-shadow 0.5s;
}

.panel:hover {
	box-shadow: 5px 0px 40px rgba(0, 0, 0, .2);
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
								<li><a href="bookOnline.php">Book Online</a></li>
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

	<!--bookOnline -->
	<div class="main-textgrids">
		<div class="container">
			<div class="col-sm-2">
				<div class="btn-group-vertical">
					<button onclick="location.href='dashboard.php'"
						style="background-color: #f44b42;" type="button"
						class="btn btn-primary btn-lg">Dashboard</button>
					<br />
					<button onclick="location.href='dashboardCaterer.php'"
						style="background-color: #f44b42;" type="button"
						class="btn btn-primary btn-lg">Caterer</button>
					<button onclick="location.href='dashboardGuest.php'"
						style="background-color: #f44b42;" type="button"
						class="btn btn-primary btn-lg">Guest Number</button>
					<button onclick="location.href='dashboardPhotographer.php'"
						style="background-color: #f44b42;" type="button"
						class="btn btn-primary btn-lg">Photographer</button>
					<button onclick="location.href='dashboardTheme.php'"
						style="background-color: #f44b42;" type="button"
						class="btn btn-primary btn-lg">Theme</button>
					<button onclick="location.href='dashboardJewelers.php'"
						style="background-color: #f44b42;" type="button"
						class="btn btn-primary btn-lg">Jewelers</button>
					<button onclick="location.href='dashboardCard.php'"
						style="background-color: #f44b42;" type="button"
						class="btn btn-primary btn-lg">Card Companies</button>
					<br />
					<button onclick="location.href='signout.php'"
						style="background-color: #f44b42;" type="button"
						class="btn btn-primary btn-lg">Sign out</button>
				</div>
			</div>
			<div class="col-sm-10">
				<div class="text-center">
					<?php if ($catererName != NULL){?>
						<h4>Your chosen caterer:  </h4><h2 style = "color: #f44b42; "> <?php echo "$catererName"; ?> </h2></br>
					<?php }?>	
					<h3>Caterers recommended for you</h3>
				</div>
				<div class="row">
			<?php for($x = 0; $x <$Rarrlength; $x++) {?>
			
				<div class="col-sm-4">
						<div class="panel panel-default text-center">
							<div class="panel-heading">
								<h4> <?php echo "$Rname[$x]"; ?></h4>
							</div>
							<div class="panel-body">
								<p>Estimated Cost</p><br/>
								<p><?php echo $RminimumPrice[$x];?> - <?php echo  $RmaximumPrice[$x];?> </p>
							</div>
						</div>

					</div>


			
			<?php } ?>
			</div>

				<p style="color: white; text-align: center">Choose Caterer</p>
				<form name="form" action="" method="post">
					<div class="row">
						<div class="large-12 columns">


							<select name="caterer" id="venue" style="width: 100%;">
							<?php for($x = 0; $x <$arrlength; $x++) {?>
								<option value="<?php echo "$Cid[$x]"; ?>"><?php echo "$Cname[$x]"; ?></option>
							<?php }?>	
							</select> <input type="submit" value="Submit"
								name="CatererSubmit" class="btn btn-primary btn-block"
								style="background-color: #f44b42; width: 100%;">

						</div>
					</div>
				</form>



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