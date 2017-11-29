<?php
include 'db.php';
session_start();
//echo $_SESSION['services'];
// getPopularVenues
$getPopularVenues = "SELECT * FROM venue ORDER BY Rating DESC LIMIT 3";
$result = $mysqli->query($getPopularVenues);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $rating[] = $row['Rating'];
        $name[] = $row['Name'];
        $price[] = $row['Price'];
        $photo[] = $row['Photo'];
        $area[] = $row['Area'];
    }
}

// getAllVenues
$getPopularVenues = "SELECT * FROM venue";
$result = $mysqli->query($getPopularVenues);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $rating1[] = $row['Rating'];
        $name1[] = $row['Name'];
        $price1[] = $row['Price'];
        $photo1[] = $row['Photo'];
        $area1[] = $row['Area'];
        $address1[] = $row['Address'];
    }
}
$arrlength = count($name1);

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

#titleSearch {
	background-image: url('/searchicon.png');
	background-position: 10px 10px;
	background-repeat: no-repeat;
	width: 100%;
	font-size: 16px;
	padding: 12px 20px 12px 40px;
	border: 1px solid #ddd;
	margin-bottom: 12px;
}

#myInput {
	background-image: url('images/searchicon.png');
	background-position: 10px 10px;
	background-repeat: no-repeat;
	width: 100%;
	font-size: 16px;
	padding: 12px 20px 12px 40px;
	border: 1px solid #ddd;
	margin-bottom: 12px;
}

#myTable {
	border-collapse: collapse;
	font-size: 18px;
	display: block;
	overflow-y: auto;
	overflow-x: hidden;
	height: 300px;
}

#myTable th, #myTable td {
	text-align: left;
	padding: 12px;
	width: 100%;
}

#myTable tr {
	border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
	background-color: #f1f1f1;
}
</style>

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>

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
				<h2>Popular Venues</h2>
				<h4>Most popular 3 venues recommended for you</h4>
			</div>
			<div class="row">
			<?php for($x = 0; $x < 3; $x++) {?>
			
				<div class="col-sm-4">
					<div class="panel panel-default text-center">
						<div class="panel-heading">
							<h4> <?php echo "$name[$x]"; ?></h4>
						</div>
						<div class="panel-body">
							<a href="" data-toggle="modal" data-target="#platinum"><img
								src="venuePic/<?php echo "$photo[$x]"; ?>"
								alt="Girl in a jacket" style="width: 300px; height: 200px;"></a>
						</div>
						<div class="panel-footer">
							<h4>Rating: <?php echo "$rating[$x]"; ?></h4>
							<h4>Price:<?php echo "$price[$x]"; ?></h4>
							<form method="post" action="venueDetails.php">
								<input id="package" name="venueName" type="hidden"
									value="<?php echo "$name[$x]"; ?>"> <input type="submit"
									value="Details" class="btn btn-lg">
							</form>
						</div>
					</div>

				</div>


			
			<?php } ?>
			</div>

			<div class="text-center">
				<h2>Search Venues</h2>
				<h4>You can search by venue name</h4>
			</div>



			<input type="text" id="myInput" onkeyup="myFunction()"
				placeholder="Search for venues.." title="Type in a name">

			<table id="myTable">
				<tr class="header">
					<th>Name</th>
					<th>Area</th>
					<th>Price</th>
					<th>Details</th>
				</tr>
				<?php for($x = 0; $x < $arrlength; $x++) {?>
				<tr>
					<td><?php echo "$name1[$x]"; ?>, <?php echo "$address1[$x]"; ?></td>
					<td><?php echo "$area1[$x]"; ?></td>
					<td><?php echo "$price1[$x]"; ?></td>

					<td>
						<form action="venueDetails.php" method="post">
							<input name="venueName" type="hidden"
								value="<?php echo "$name1[$x]"; ?>"> <input type="submit"
								value="Details" class="btn btn-lg">
						</form>
					</td>

				</tr>
				<?php } ?>
				
			</table>
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
