<?php
include 'db.php';
session_start();

$name = $contact = $password = $email = "";

$services = $_SESSION['services'];
$venueName = $_SESSION['venueName'];

if (isset($_POST["dateSubmit"])) {
    $date = $_POST["date"];
    $_SESSION['date'] = $date;
} 
//echo $_SESSION['date'];
//$_SESSION['date'] = $date;

$sql = "SELECT * from venue WHERE Name = '$venueName'";
$result = $mysqli->query($sql);
while ($row = $result->fetch_assoc()) {
    $venueID = $row["ID"];
}

if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $name = $_POST["name"];
    $password = $_POST["password"];
    $date = $_SESSION["date"];
    //echo $date;
    
    $sqlInsert = "INSERT INTO `applicant` (`ID`, `Name`, `Password`, `Phone Number`, `Email`, `Date`,
						`Venue ID`, `Venue Cater`, `Catering ID`, `Photographer ID`, `Guest Number`,
						`Shopping Date`, `Theme Name`, `Expense`)
VALUES
(NULL, '" . $name . "', md5('" . $password . "'), '" . $contact . "', '" . $email . "', '" . $date . "', '" . $venueID . "', FALSE, NULL, NULL, '500', '', NULL, '')";
    
    // "INSERT INTO applicantInfo (Name, Email, Password, PhoneNumber, venue , Date) VALUES ('$name','$email','$password','$contact','$venueName','$date')";
    $result2 = $mysqli->query($sqlInsert);
    if ($result2) {
       header("Location: applicantConfirmation.php");
    } else
        header("Location: applicantFailed.php");
}

$sql = "SELECT * from service WHERE Name IN ('$services') AND NOT Name = 'venue'";
$result = $mysqli->query($sql);
while ($row = $result->fetch_assoc()) {
    $service[] = $row["Name"];
    $minimum[] = $row["MinPrice"];
    $maximum[] = $row["MaxPrice"];
}
$arrlength = count($service);

$_SESSION["superServices"] = $service;
$_SESSION["email"] = $email;
//echo $_SESSION["superServices"];
for ($x = 0; $x < $arrlength; $x ++) {
    $sql = "INSERT INTO applicant_service (Email, Service Name) VALUES ('" . $email . "','" . $service[$x] . "')";
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
			<div class="col-sm-5">
				<div class="well well-sm">
					<h3 align='center'>Booking Informtaion</h3>
					<p style="color: black">
						Venue:  <?php echo "$venueName"; ?> <br />
						Date: <?php echo "$date"?><br /> <br /> <strong>Chosen Services:</strong>
						<br />
					
					
					
						<?php for($x = 0; $x < $arrlength; $x++) {?>  
							<?php  echo $service[$x];?><br />
						<?php }?>
					</p>
				</div>
			</div>
			<div class="col-sm-7">
				<div class="well well-sm">
					<h3 align='center'>Personal Informtaion</h3>



					<form action="" method="post" class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-sm-2" for="email">Name:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="email" name="name"
									placeholder="Enter name" required="required">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="email">Password:</label>
							<div class="col-sm-10">
								<input type="password" class="form-control" id="password"
									name="password" placeholder="Enter password"
									required="required">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="email">Email:</label>
							<div class="col-sm-10">
								<input type="email" class="form-control" id="email" name="email"
									placeholder="Enter email" required="required">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="contact">Contact No:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="pwd" name="contact"
									placeholder="Enter contact no" required="required">
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<input type="hidden" value = "<?php $date?>" class="form-control" id="hidden" name="date">
								<button name="submit" type="submit" class="btn btn-default">Confirm</button>
							</div>
						</div>
					</form>

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