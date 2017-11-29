<?php



/*
 * get user's choices
 */

$sql = "SELECT `Venue ID`, `Theme Name` FROM `applicant` WHERE `ID` = '" . $id . "'";

$sqlResult = mysqli_query($mysqli, $sql);

while ($row = mysqli_fetch_array($sqlResult)) {
    $venue = $row[0];
    $theme = $row[1];
    
    // echo $venue.' '.$theme."<br><br";
}

/*
 * get similar users
 */

$sql = "SELECT `Venue ID`, `Theme Name`, `Photographer ID` FROM `applicant` WHERE (`Venue ID` = '" . $venue . "' OR `Theme Name` = '" . $theme . "') AND `ID` != '" . $id . "'";

$sqlResult = mysqli_query($mysqli, $sql);

$result = array();
$freq_matrix = array();

while ($row = mysqli_fetch_array($sqlResult)) {
    array_push($result, array(
        'Venue' => $row[0],
        'Theme' => $row[1]
    ));
    array_push($freq_matrix, array(
        'Photographer' => $row[2],
        'Frequency' => 0
    ));
}

// echo json_encode(array("result"=>$result));

// echo "<br><br>";

// echo json_encode(array("freq"=>$freq_matrix));

// echo "<br><br>";

/*
 * sort based on matches
 */

for ($x = 0; $x < count($result); $x ++) {
    if ($result[$x]['Venue'] === $venue)
        $freq_matrix[$x]['Frequency'] ++;
    if ($result[$x]['Theme'] === $theme)
        $freq_matrix[$x]['Frequency'] ++;
}

// echo "<br><br>";

// echo json_encode(array("freq"=>$freq_matrix));

usort($freq_matrix, function ($a, $b) {
    return $b['Frequency'] - $a['Frequency'];
});

// echo "<br><br>";

// echo json_encode(array("freq"=>$freq_matrix));

/*
 * take top
 */

$top_arr = array();
$i = 0;
for ($x = 0; $x < count($freq_matrix); $x ++) {
    if ($freq_matrix[$x]['Photographer'] != null) {
        $top_arr[$i] = $freq_matrix[$x]['Photographer'];
        $i ++;
    }
}

$top_arr = array_unique($top_arr);

/*
 * get all caterers
 */

$photo_arr = array();
if (count($top_arr) < 3) {
    $sql = "SELECT `ID`, `Rating` FROM `photographer`";
    
    $sqlResult = mysqli_query($mysqli, $sql);
    
    $photo_arr = array();
    
    while ($row = mysqli_fetch_array($sqlResult)) {
        array_push($photo_arr, array(
            'Photographer' => $row[0],
            'Rating' => $row[1]
        ));
    }
    
    usort($photo_arr, function ($a, $b) {
        return $b['Rating'] - $a['Rating'];
    });
}

/*
 * add to final array
 */

$final_arr = array();

for ($x = 0; $x < count($top_arr); $x ++) {
    $final_arr[$x] = $top_arr[$x];
}

// echo "<br><br>";

// echo json_encode(array("final"=>$final_arr));

$i = count($top_arr);
for ($x = 0; $x < count($photo_arr); $x ++) {
    $final_arr[$x + $i] = $photo_arr[$x]['Photographer'];
}

$final_arr = array_unique($final_arr);

$final_arr = array_slice($final_arr, 0, 3);

$final_arr = join("','", $final_arr);
// //echo "<br><br>";

/*echo json_encode(array(
    "final" => $final_arr
));*/


?>
















