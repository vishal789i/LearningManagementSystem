<!DOCTYPE html>
<html lang="en">
<head>
  <title>Exam Result</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <link rel="stylesheet" href="css/w3.css">
  
  <style>
	body
	{
		background:#f7f4f1;  
	}
  </style>
  
<?php session_start();?>
<?php if(isset($_SESSION['startedOfStudent']) ){?>

<?php include_once 'DBConnection.php'; ?>
<?php     
	$coTotalMarksArr = array(0,0,0,0,0,0,0,0,0,0,0,0);
	$unitTotalMarksArr = array(0,0,0,0,0,0,0);
	
	$maxQuestions = $_SESSION['maxQuestions'];
	$oneMarks = $_SESSION['oneMarks'];
	$twoMarks = $_SESSION['twoMarks'];
	$length = $_SESSION['maxQuestions'];
    $userSelectedOptionsArray = array();
    for ($i = 1; $i <= $length; $i++) {   
        if (isset($_POST["question".$i."SelectedOption"])) {
            $userSelectedOptionsArray[$i] = $_POST["question".$i."SelectedOption"];
        }
        else{
            $userSelectedOptionsArray[$i] = " no option selected ";    
        }
    }
	
	
    $actualAnswer = 0;
    $counter = 0;
	$totalQuestions = 0;
	$wrongAttempts = 0;
	$coArr = array(0,0,0,0,0,0,0,0,0,0,0,0);
	$unitArr = array(0,0,0,0,0,0,0);
	
	for ($i = 1; $i <= $length; $i++) {
		$sqlAnswerMarks = "SELECT f_answer, m FROM question_set WHERE sr_no = '".$_POST["sr_no".$i]."' ";
        $fetchedAnswerMarks = mysqli_query($conn, $sqlAnswerMarks);
		while($row = mysqli_fetch_assoc($fetchedAnswerMarks)) {
            $actualAnswer = $row['f_answer'];
			$marks = $row['m'];
			$totalQuestions++;
        }
		if($userSelectedOptionsArray[$i] == $actualAnswer){
			if($marks == 1){
				$counter++;
				$coArr[$_POST["coOfQuestionNo".$i]] = $coArr[$_POST["coOfQuestionNo".$i]] + 1;
				$unitArr[$_POST["unitOfQuestionNo".$i]] = $unitArr[$_POST["unitOfQuestionNo".$i]] + 1;
				
				$coTotalMarksArr[$_POST["coOfQuestionNo".$i]] = $coTotalMarksArr[$_POST["coOfQuestionNo".$i]] + 1;
				$unitTotalMarksArr[$_POST["unitOfQuestionNo".$i]] = $unitTotalMarksArr[$_POST["unitOfQuestionNo".$i]] + 1;
			
			}
			else if($marks == 2){
				$counter = $counter + 2;
				$coArr[$_POST["coOfQuestionNo".$i]] = $coArr[$_POST["coOfQuestionNo".$i]] + 2;
				$unitArr[$_POST["unitOfQuestionNo".$i]] = $unitArr[$_POST["unitOfQuestionNo".$i]] + 2;
			
				$coTotalMarksArr[$_POST["coOfQuestionNo".$i]] = $coTotalMarksArr[$_POST["coOfQuestionNo".$i]] + 2;
				$unitTotalMarksArr[$_POST["unitOfQuestionNo".$i]] = $unitTotalMarksArr[$_POST["unitOfQuestionNo".$i]] + 2;
			
			}
		}
		else{
			if($marks == 1){
				$coTotalMarksArr[$_POST["coOfQuestionNo".$i]] = $coTotalMarksArr[$_POST["coOfQuestionNo".$i]] + 1;
				$unitTotalMarksArr[$_POST["unitOfQuestionNo".$i]] = $unitTotalMarksArr[$_POST["unitOfQuestionNo".$i]] + 1;
			
			}
			else if($marks == 2){
				$coTotalMarksArr[$_POST["coOfQuestionNo".$i]] = $coTotalMarksArr[$_POST["coOfQuestionNo".$i]] + 2;
				$unitTotalMarksArr[$_POST["unitOfQuestionNo".$i]] = $unitTotalMarksArr[$_POST["unitOfQuestionNo".$i]] + 2;
			
			}
			$wrongAttempts++;
		}
	}
	$sqlThreshold = "SELECT threshold from adminvariables where sr_no = 1";
	$fetchedThreshold = mysqli_query($conn, $sqlThreshold);
	$threshold = "";
	
	while($row = mysqli_fetch_assoc($fetchedThreshold)) {
        $threshold = $row['threshold'];
	}
	if($counter>=$threshold){
		$status = "Pass";
	}else{
		$status = "Fail";
	}
	
?>

</head>
<body>
 <!-- NAVIGATION -->
	<br><br>

<div class="container">
  <center><h2>Exam Summary</h2></center>
  <br><br>
  <p>Note: Please read the following results and give feedback.</p><br>
  <table class="table">
    <thead>
      <tr>
        <th>Parameter</th>
        <th>Value</th>
         
    </thead>
    <tbody>
         
      <tr class="success">
        <td>Login ID: </td>
        <td><?php echo $_SESSION['studentName']?></td>
       
      </tr>
      
	  <tr class="danger">
        <td>Exam: </td>
        <td><?php echo $_SESSION['examName']; ?></td>
      </tr>
	  
	  <?php $temp = (time()-$_SESSION['timerSetByQuestionPaper'])/60;
			$timeTaken = round($temp, 2);?>
	  
	  <tr class="success">
        <td>Time Taken: </td>
        <td><?php echo $timeTaken; ?> min</td>
      </tr>
	  <?php $totalMarks = $oneMarks+(2*$twoMarks); ?>
	  
      <tr class="info">
        <td>Marks:</td>
        <td><?php echo $counter." Out of ".$totalMarks; ?></td>
      </tr>
      
	  <tr class="warning">
         <td>No. of Questions:</td>
         <td><?php echo $maxQuestions; ?></td>
      </tr>
	  
	  <tr class="success">
         <td>Correct Attempts:</td>
		 <?php $correctAttempts = $maxQuestions-$wrongAttempts; ?>
         <td><?php echo $correctAttempts; ?></td>
      </tr>
	  
	  <tr class="danger">
         <td>Wrong Attempts:</td>
         <td><?php echo $wrongAttempts; ?></td>
      </tr>
	  
	  <tr class="success">
        <td>Status :</td>
        <td><?php echo $status?></td>
      </tr>
	  
	  <tr class="info">
        <td>Course Outcome Attainment</td>
		<td> </td>
      </tr>
	  <?php for($i=1; $i<=10; $i++) {?>
	  
	  <tr class="success">
	  <?php if($coTotalMarksArr[$i] != 0) { ?>
        <td>CO<?php echo $i; ?> Marks:</td>
	    <td><?php echo $coArr[$i];?> out of <?php echo $coTotalMarksArr[$i]; ?></td>
      </tr>
	  
	  <?php }
	  } 
	  ?>
	  <tr class="info">
        <td>Unit Wise Attainment</td>
		<td> </td>
      </tr>
	  <?php for($i=1; $i<=6; $i++) {?>
	  
	  <tr class="danger">
	  <?php if($unitTotalMarksArr[$i] != 0) { ?>
        <td>UNIT<?php echo $i; ?> Marks:</td>
	    <td><?php echo $unitArr[$i];?> out of <?php echo $unitTotalMarksArr[$i]; ?></td>
      </tr>
	  
	  <?php }
	  } 
	  ?>
    </tbody>
  </table>
</div><br><br>
<footer>
<center><button class="w3-button w3-block w3-teal" onclick="window.print()" style="width:30%">Print Result</button><br></center>
<center><button class="w3-button w3-block w3-green" onClick="document.location.href='feedback.php'" style="width:30%">Feedback</button></center>
</footer>
<?php
    
		$sqlCreateStudentRecordTable = "CREATE TABLE `exam_result` ( `sr_no` int(4) NOT NULL AUTO_INCREMENT, `username` varchar(20) NOT NULL, `marks` varchar(20) NOT NULL, `subject` varchar(50) NOT NULL, `maxQuestions` int(11) NOT NULL, `correctAttempts` int(11) NOT NULL, `wrongAttempts` int(11) NOT NULL, PRIMARY KEY (`sr_no`) ) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;";
		mysqli_query($conn, $sqlCreateStudentRecordTable);
		
		$sqlStudentRecord = "INSERT INTO `exam_result` (`sr_no`, `username`, `marks`, `subject`, `maxQuestions`, `correctAttempts`, `wrongAttempts`, `status`, `time`, `timeStamp`) VALUES (NULL, '".$_SESSION['studentName']."', '".$counter."', '".$_SESSION['subject']."', '".$maxQuestions."', '".$correctAttempts."', '".$wrongAttempts."', '".$status."', '".$timeTaken."', CURRENT_TIMESTAMP)";
		if(mysqli_query($conn, $sqlStudentRecord)>0){
			
		}
		else{
			echo "failed to enter the data";
		}
		
		mysqli_close($conn);
		
		unset($_SESSION["startedOfAdmin"]);
		unset($_SESSION["startedOfStudent"]);
?>

</body>
</html>
<?php }
else{
    echo "<h1>Access Forbidden!</h1>";
}?>
