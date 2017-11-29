<?php
	
	require 'dbConnect.php';
	
	$result='';
	$name = $_POST['name'];
	$id = $_POST['id'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$price = $_POST['price'];
	$area = $_POST['area'];
	$package = $_POST['package'];
	$min = $_POST['min'];
	$max = $_POST['max'];
	
	$errors= array();
	$file_name = $_FILES['image']['name'];
	$file_size = $_FILES['image']['size'];
	$file_tmp = $_FILES['image']['tmp_name'];
	$file_type = $_FILES['image']['type'];
	$temp = explode('.',$file_name);
	$file_ext=strtolower(end($temp));

	$extensions= array("jpeg","jpg","png");

	if(in_array($file_ext,$extensions)=== false){
		$errors[]="extension not allowed, please choose a JPEG or PNG file.";
	}

	if($file_size > 2097152) {
		$errors[]='File size must be exactly 2 MB';
	}
	
	
	$img_path = $file_name;

	if(empty($errors)==true) {
		move_uploaded_file($file_tmp,$img_path);
		echo "Success";
	}else{
		print_r($errors);
	}
	
	
	
	$sql = "INSERT INTO `venue` (`ID`, `Name`, `Rating`, `Address`, `Contact Number`, `Email`, `Price`, `Area`, `Package Description`, `Catering Min Price`, `Catering Max Price`, `Photo`) 
			VALUES ('".$id."', '".$name."', '0.0', '".$address."', '".$phone."', '".$email."', '".$price."', '".$area."', '".$package."', '".$min."', '".$max."', '".$img_path."')";
	
	echo $sql;
	
	
	$sqlResult = mysqli_query($sqlConn, $sql);	
	
	echo 'what'.$sqlResult;
	
	if($sqlResult)
		echo 'true';
	else
		echo 'false';
	
	mysqli_close($sqlConn);
?>