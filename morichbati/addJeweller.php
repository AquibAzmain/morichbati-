<?php
	
	require 'dbConnect.php';
	
	$result='';
	$id = $_POST['id'];
	$name = $_POST['name'];
	$address = $_POST['address'];
	$discount = $_POST['discount'];
	
	
	
	$sql = "INSERT INTO `jeweller` (`ID`, `Name`, `Address`, `Discount`, `Rating`) VALUES ('".$id."', '".$name."', '".$address."', '".$discount."', '0.0')";
		
	
	$sqlResult = mysqli_query($sqlConn, $sql);
	
	if($sqlResult)
		echo 'true';
	else
		echo 'false';
	
	mysqli_close($sqlConn);
?>