<?php
	
	require 'dbConnect.php';
	
	$result='';
	$name = $_POST['name'];
	$desc = $_POST['desc'];
	$price = $_POST['price'];
	
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
	
	$img_path = "images_theme/".$file_name;

	if(empty($errors)==true) {
		move_uploaded_file($file_tmp, $img_path);
		echo "Success";
	}else{
		print_r($errors);
	}
	
	
	
	$sql = "INSERT INTO `theme` (`Name`, `Description`, `Price`, `Rating`, `Photo`) VALUES ('".$name."', '".$desc."', '".$price."', '0.0', '".$img_path."')";
	
	
	$sqlResult = mysqli_query($sqlConn, $sql);
	
	if($sqlResult)
		echo 'true';
	else
		echo 'false';
	
	mysqli_close($sqlConn);
?>