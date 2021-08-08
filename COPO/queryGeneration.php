<?php 
/*
$arr = array(7, 4, 7, 4, 0, 7, 0, 0);
$noOfCo = count($arr)/2;

$coArr = array();

$count = 0;
for($i=1; $i<=4; $i++) {
	$coArr[2*$i-2] = $i;
	$coArr[2*$i-1] = $i;
}

$finalQuery = "";

$query = "select * from question_set WHERE";
$co = 0;

for($i=0; $i<8; $i++) {
	$co = $i + 1;
	if($arr[$i] != 0){		
		
		$query = $query . " CO = CO".$coArr[$i];
    	
		if($i % 2 == 0) {
			$query .= " AND oneMarks = ".$arr[$i]." AND ";
		} else {
			$query .= " AND twoMarks = ".$arr[$i]." AND ";
		}
	}
	if($i == 7) {
		$finalQuery = preg_replace('/\W\w+\s*(\W*)$/', '$1', $query)."\n";
	}
}
*/

$query = "SELECT sr_no, co from marks where unit = 1 and m = 1";

$result = mysqli_query($conn, $query);
$arr = array();
$i = 0;
while($row = mysqli_fetch_assoc($result) ) {
	$i = $i + 1;
	for($j = 0; $j < 10; $j ++ ){
		if($row["unit1"] = 1) {
			
		}
		$arr[$i][$j] = 
	}
}

?>



