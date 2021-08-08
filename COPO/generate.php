<?php 
	$conn = mysqli_connect("localhost", "root", "", "online_exam");
	$sqlSelect = "select * from user";
	$result = mysqli_query($conn, $sqlSelect);
	$coArr = array();
	$k = 1;
	while($row = mysqli_fetch_assoc($result) ) {
		$coArray['co'.$k]['co'] = $row['co'];
		$coArray['co'.$k]['weight'] = $row['weight'];
		$coArray['co'.$k]['coMarks'] = $row['coMarks']; 
		$coArray['co'.$k]['unit1_1'] = $row['unit1_1']; 
		$coArray['co'.$k]['unit1_2'] = $row['unit1_2']; 
        $coArray['co'.$k]['unit2_1'] = $row['unit2_1']; 
        $coArray['co'.$k]['unit2_2'] = $row['unit2_2']; 
        $coArray['co'.$k]['unit3_1'] = $row['unit3_1']; 
        $coArray['co'.$k]['unit3_2'] = $row['unit3_2']; 
        $coArray['co'.$k]['unit4_1'] = $row['unit4_1'];
        $coArray['co'.$k]['unit4_2'] = $row['unit4_2'];
        $coArray['co'.$k]['unit5_1'] = $row['unit5_1'];
        $coArray['co'.$k]['unit5_2'] = $row['unit5_2'];
        $coArray['co'.$k]['unit6_1'] = $row['unit6_1'];
        $coArray['co'.$k]['unit6_2'] = $row['unit6_2'];
		$k++;
	}
	$numbersOne = array();
	$countOne = 0;
	$numbers = array();
	$count = 0;
	$arrOneIndex = 0;
	$arrTwoIndex = 0;
	for($i = 1; $i <= 10 ; $i++) {
		for($j = 1; $j <= 6; $j++) {
			// echo 'co'.$i;
			// echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			// echo 'unit'.$j.'_1';
			// echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			
			$noOfOneMarkQuestions = $coArray['co'.$i]['unit'.$j.'_1'];
			$noOfTwoMarkQuestions = $coArray['co'.$i]['unit'.$j.'_2'];
			
			// echo "OneMark ".$noOfOneMarkQuestions;
			// echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			
			
			// echo 'twoMark  '.$noOfTwoMarkQuestions;
			// echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			if($noOfOneMarkQuestions > 0) {
				$sqlOne = "SELECT sr_no FROM question_set WHERE m = 1 AND unit = ".$j." and co = ".$i;
				//echo $i."&nbsp;&nbsp;&nbsp;&nbsp;".$j."<br>";
				//echo $sqlOne."<br>";
				$resultOne = mysqli_query($conn, $sqlOne);
				
				while($row = mysqli_fetch_assoc($resultOne)) {
					if($countOne < $noOfOneMarkQuestions){
						$numbersOne[$arrOneIndex++] = $row["sr_no"];
						$countOne++;
					}
				}
				$countOne = 0;
				
			}
			
			//echo "<br><br>";
			if($noOfTwoMarkQuestions > 0) {
				$sql = "SELECT sr_no FROM question_set WHERE m = 2 AND unit = ".$j." and co = ".$i;
				$result = mysqli_query($conn, $sql);
				//echo $sql."<br>";
				while($row = mysqli_fetch_assoc($result)) {
					if($count < $noOfTwoMarkQuestions){
						$numbers[$arrTwoIndex++] = $row["sr_no"];
						$count++;
					}
				}
				$count = 0;				
			}
		}			
		//echo "<br>";
	}
	
	$finalArray = array_merge($numbersOne, $numbers);
	shuffle($finalArray);
	$length = count($finalArray);
	//echo "<br>";

	//echo "<br>";
	echo $arrOneIndex;
	echo $arrTwoIndex;

	//print_r ($numbersOne);
	
	//print_r ($numbers);
	//echo "<br>final<br>";
	//print_r ($finalArray);
	
?> 
