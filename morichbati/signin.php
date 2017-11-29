<?php
include_once ("db.php");
include 'auth.php';

if (isset($_POST['signIn'])) {
    $email = stripslashes($_REQUEST['email']); // removes backslashes
    $email = mysqli_real_escape_string($mysqli, $email); // escapes special characters in a string
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($mysqli, $password);
    $password = md5($password);
    
    $query = "SELECT * FROM applicant WHERE Email='$email' and Password='$password'";
    $result = mysqli_query($mysqli, $query);
    $rows = mysqli_num_rows($result);
    if ($rows == 1) {        
        if ($email == "morichbatiadmin@gmail.com"){
            $_SESSION['email'] = $email;
            header("Location: adminDashboard.php");
        }
        else{    
            $_SESSION['email'] = $email;
            header("Location: dashboard.php");
        }
    } else {
        echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Your credentials are wrong. Try again.</div><div id="returnVal" style="display:none;">false</div>';
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Morichbati : A Wedding Planner</title>
<link rel="icon" type="image/x-icon" href="Mimages/logo.png">
<!-- CSS -->
<link rel="stylesheet"
	href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet"
	href="assets/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/form-elements.css">
<link rel="stylesheet" href="assets/css/style.css">

<link href="css/bootstrap.css" rel="stylesheet" type="text/css"
	media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/styleSideNav.css" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet">
</head>

<body>
	<!-- Top content -->
	<div class="top-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3 form-box">
					<div class="form-top">
						<div class="form-top-left">
							<h3>Login to Morichbati</h3>
							<p>Enter your Email address and Password to log in:</p>
						</div>
						<div class="form-top-right">
							<i class="fa fa-lock"></i>
						</div>
					</div>
					<div class="form-bottom">
						<form role="form" action="" method="post" class="login-form">
							<div class="form-group">
								<label class="sr-only" for="form-username">Email Adress</label>
								<input type="text" name="email" placeholder="Email..."
									class="form-username form-control" id="form-username">
							</div>
							<div class="form-group">
								<label class="sr-only" for="form-password">Password</label> <input
									type="password" name="password" placeholder="Password..."
									class="form-password form-control" id="form-password">
							</div>
							<button style="background-color: #f44b42;" name="signIn"
								type="submit" class="btn">Sign in!</button>
						</form>
						
					</div>
					<button onclick="window.location.href='index.php'" style="background-color: #f44b42;"
								 class="btn">Back</button>
				</div>
			</div>

		</div>
	</div>
	<!-- Javascript -->
	<script src="assets/js/jquery-1.11.1.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.backstretch.min.js"></script>
	<script src="assets/js/scripts.js"></script>
</body>

</html>