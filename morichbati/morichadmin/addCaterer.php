<?php
	
	require 'dbConnect.php';
	
	$result='';
	$id = $_POST['id'];
	$name = $_POST['name'];
	$min = $_POST['min'];
	$max = $_POST['max'];
	
	
	
	$sql = "INSERT INTO `catering` (`ID`, `Name`, `Min Price`, `Max Price`, `Rating`) VALUES ('".$id."', '".$name."', '".$min."', '".$max."', '0.0')";
		
	
	$sqlResult = mysqli_query($sqlConn, $sql);
	
	if($sqlResult)
		echo 'true';
	else
		echo 'false';
	
	mysqli_close($sqlConn);
?>