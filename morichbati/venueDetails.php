<?php
include 'db.php';
session_start();
$venueID = $dates = "";
if (isset($_POST["venueName"])) {
    $_SESSION['venueName'] = $_POST["venueName"];
    // echo $_SESSION['venueName'];
}
$venueName = $_POST['venueName'];
// getVenueDetails
$getVenueDetails = "SELECT * FROM venue where Name = '$venueName'";
$result = $mysqli->query($getVenueDetails);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $rating = $row['Rating'];
        $name = $row['Name'];
        $price = $row['Price'];
        $photo = $row['Photo'];
        $area = $row['Area'];
        $address = $row['Address'];
        $contact = $row['Contact Number'];
        $email = $row['Email'];
        $cateringMin = $row['Catering Min Price'];
        $cateringMax = $row['Catering Max Price'];
        $venueID = $row['ID'];
    }
}

// getOccupiedDates
$getDates = "SELECT Date from venue_date where VenueID ='$venueID'";
$result = $mysqli->query($getDates);
if ($result == true) {
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $dates[] = $row['Date'];
        }
    }
}
else {
    echo mysqli_error($mysqli);
}
// echo implode(" ",$dates);
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
<link rel="stylesheet" href="css/jquery-ui.css" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->



<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-ui.js"></script>
<script>

//var array = ["2017-11-24","2013-03-15","2013-03-16"];
var array = $.parseJSON('<?php echo json_encode($dates); ?>');
var date1 = new Date();
var date2 = new Date();
date1 .setMonth(date1 .getMonth() + 3);
date2 .setMonth(date1 .getMonth() + 15);

$(document).ready(function(){
$("#datepicker").datepicker({
	minDate: date1,
    maxDate: date2,
    //showButtonPanel: true,
    currentText: "Today:" + $.datepicker.formatDate('MM dd, yy', new Date()),  
	beforeShowDay: function(date)
	{
		var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
        return [ array.indexOf(string) == -1 ]
	}});
});




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
			<div class="text-center">
				<h2>Venue Details</h2>
				<h4>Choose date from the calender. You can not change it later.</h4>
			</div>

			<div class="row">
				<div class="col-sm-8">
					<div class="well well-sm">
						<div class="row">
							<div class="col-sm-6 col-md-6">
								<img src="venuePic/<?php echo "$photo"; ?>"
									alt="Girl in a jacket" style="width: 280px; height: 200px;">
							</div>
							<div class="col-sm-6 col-md-6">
								<h4><?php echo "$name"; ?></h4>
								<small><cite title="San Francisco, USA"><?php echo "$address"; ?> <i
										class="glyphicon glyphicon-map-marker"> </i></cite></small>
								<p>
								Email:  <?php echo "$email"; ?> <br />
								Contact No: <?php echo "$contact"; ?> <br />
								Price: <?php echo "$price"; ?> <br />
								Rating: <?php echo "$rating"; ?> <br />
								Catering price: <?php echo "$cateringMin"; ?> -  <?php echo "$cateringMax"; ?><br />
								</p>

							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<form action="applicantDashboard.php" method="post">
						Choose the date: <input id="datepicker" type="text" name="date"
							required="required"> <input type="submit" value="Confirm"
							name="dateSubmit" class="btn btn-lg">
					</form>
				</div>


			</div>

			<button onclick="location.href='venue.php'"
				class="btn btn-primary btn-block"
				style="background-color: #f44b42; width: 100%">Go back to venue
				choice</button>

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
				<p>Copyright Â© 2017 - All Rights Reserved - Morichbati</p>
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
	<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
</body>
</html>
