<?php
	




	/*
	get user's choices
	*/
	
	
	$sql = "SELECT `Venue ID`, `Photographer ID`, `Theme Name` FROM `applicant` WHERE `ID` = '".$id."'";
			
	$sqlResult = mysqli_query($mysqli, $sql);
	
	while($row = mysqli_fetch_array($sqlResult)){
		$venue = $row[0];
		$photo = $row[1];
		$theme = $row[2];
		
		//echo $venue.' '.$photo.' '.$theme."<br><br";
	}
	
	

	/*
	get similar users
	*/
	
	
	
	$sql = "SELECT `Venue ID`, `Photographer ID`, `Theme Name`, `Catering ID` FROM `applicant` WHERE (`Venue ID` = '".$venue."' OR `Photographer ID` = '".$photo."' OR `Theme Name` = '".$theme."') AND `ID` != '".$id."'";
		
	
	$sqlResult = mysqli_query($mysqli, $sql);
	
	
	$result = array();
	$freq_matrix = array();
	
	while($row = mysqli_fetch_array($sqlResult)){
		array_push($result,	array('Venue'=>$row[0], 'Photographer'=>$row[1], 'Theme'=>$row[2]));
		array_push($freq_matrix, array('Caterer'=>$row[3], 'Frequency'=>0));
	}
		 
	//echo json_encode(array("result"=>$result));
	
	//echo "<br><br>";
	
	//echo json_encode(array("freq"=>$freq_matrix));
	
	//echo "<br><br>";
	
	
	

	/*
	sort based on matches
	*/
	
	
	
	for ($x = 0; $x < count($result); $x++) {
		if($result[$x]['Venue'] === $venue) $freq_matrix[$x]['Frequency']++;
		if($result[$x]['Photographer'] === $photo) $freq_matrix[$x]['Frequency']++;
		if($result[$x]['Theme'] === $theme) $freq_matrix[$x]['Frequency']++;
	} 
	
	//echo "<br><br>";
	
	//echo json_encode(array("freq"=>$freq_matrix));
	
	usort($freq_matrix, function($a, $b) {
		return $b['Frequency'] - $a['Frequency'];
	});	
	
	//echo "<br><br>";
	
	//echo json_encode(array("freq"=>$freq_matrix));
	
	
	

	/*
	take top
	*/
	
		
	
	
	$top_arr = array();
	$i = 0;
	for ($x = 0; $x < count($freq_matrix); $x++) {
		if($freq_matrix[$x]['Caterer'] != null){
			$top_arr[$i]=$freq_matrix[$x]['Caterer'];
			$i++;
		}
	} 
	
	$top_arr = array_unique($top_arr);	
	
	
	

	/*
	get all caterers
	*/
	
	
	
	
		
	$caterer_arr = array();
	if(count($top_arr)<3){
		$sql = "SELECT `ID`, `Rating` FROM `catering`";
			
		$sqlResult = mysqli_query($mysqli, $sql);		
		
		$caterer_arr = array();
		
		while($row = mysqli_fetch_array($sqlResult)){
			array_push($caterer_arr, array('Caterer'=>$row[0], 'Rating'=>$row[1]));
		}
		
		usort($caterer_arr, function($a, $b) {
			return $b['Rating'] - $a['Rating'];
		});
	}
	
	
	
		

	/*
	add to final array
	*/
	
	
		
	
	
	
	$final_arr = array();
	
	for ($x = 0; $x < count($top_arr); $x++) {
		$final_arr[$x] = $top_arr[$x];
	} 
		
	//echo "<br><br>";
	
	//echo json_encode(array("final"=>$final_arr));
	
	
	$i =  count($top_arr); 
	for ($x = 0; $x < count($caterer_arr); $x++) {
		$final_arr[$x+$i] = $caterer_arr[$x]['Caterer'];
	} 
	
	
	$final_arr = array_unique($final_arr);
	
	$final_arr = array_slice($final_arr, 0, 3);
	
	//echo "<br><br>";
	
	$final_arr = join("','", $final_arr);
?>
















