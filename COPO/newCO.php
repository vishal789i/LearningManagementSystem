<?php

error_reporting(E_ERROR | E_PARSE);
$conn = mysqli_connect("localhost", "root", "", "online_exam");

$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);
 
  $i= 0;
if (mysqli_num_rows($result) > 0) {?>

<?php 
  /*$i= 0;
if (mysqli_num_rows($result) > 0) {*/
    // output data of each row
    
    $coArray = array();
    $arr = array();
    $flag = array();
    $sum1 =0;
    $sum2 =0;
    $index = 0;
    for ($i=0; $i <9 ; $i++) { 
      $flag[$i] = 0;
    }
    $k=-1;

    while($row = mysqli_fetch_assoc($result)) {?>
            
    
     <?php //$array[$i] = $row['id'];
         $k = $k + 1; 
         $i = $row['id'];
         $sum1 = 0;
         $sum2 = 0;
     //$i = $i +1; ?>
 
      <?php  $coArray[$k][0] = $row['id']; /*echo $coArray[$k][0];*/  ?>

      <?php /*echo $row['co'];*/  $coArray[$k][1] = $row['co'];  ?>
      <?php /*echo $row['weight'];*/  $coArray[$k][2] = $row['weight']; if ($row['weight'] != 0) {
         $flag[$k] = 1;
        } ?>
      <?php /*echo $row['coMarks'];*/ $coArray[$k][3] = $row['coMarks'];  ?>
    <?php /*echo $row['unit1_1'];*/ $coArray[$k][4] = $row['unit1_1']; $sum1 = $sum1 + $coArray[$k][4];  ?>
    <?php /*echo $row['unit1_2'];*/ $coArray[$k][5] = $row['unit1_2'];  $sum2 = $sum2 + $coArray[$k][5];  ?>
    <?php /*echo $row['unit2_1'];*/ $coArray[$k][6] = $row['unit2_1']; $sum1 = $sum1 + $coArray[$k][6];  ?>
    <?php /*echo $row['unit2_2'];*/ $coArray[$k][7] = $row['unit2_2']; $sum2 = $sum2 + $coArray[$k][7];  ?>
    <?php /*echo $row['unit3_1'];*/ $coArray[$k][8] = $row['unit3_1']; $sum1 = $sum1 + $coArray[$k][8]; ?>
    <?php /*echo $row['unit3_2'];*/ $coArray[$k][9] = $row['unit3_2']; $sum2 = $sum2 + $coArray[$k][9]; ?>
    <?php /*echo $row['unit4_1'];*/ $coArray[$k][10] = $row['unit4_1']; $sum1 = $sum1 + $coArray[$k][10]; ?>
    <?php /*echo $row['unit4_2'];*/ $coArray[$k][11] = $row['unit4_2']; $sum2 = $sum2 + $coArray[$k][11]; ?>
    <?php /*echo $row['unit5_1'];*/ $coArray[$k][12] = $row['unit5_1']; $sum1 = $sum1 + $coArray[$k][12]; ?>
   <?php /*echo $row['unit5_2'];*/ $coArray[$k][13] = $row['unit5_2']; $sum2 = $sum2 + $coArray[$k][13]; ?>
    <?php /*echo $row['unit6_1'];*/ $coArray[$k][14] = $row['unit6_1']; $sum1 = $sum1 + $coArray[$k][14]; ?>
    <?php /*echo $row['unit6_2'];*/ $coArray[$k][15] = $row['unit6_2']; $sum2 = $sum2 + $coArray[$k][15]; ?>

    
    
<?php
      $arr[$index] = $sum1;
      $index = $index + 1;
      $arr[$index] = $sum2;
      $index = $index + 1;
 } ?>

<?php 

} else {
    echo "No result found ";
}
    $totalQuestions = 0;
   for ($i=0; $i < 21 ; $i++) { 
      $totalQuestions = $totalQuestions + $arr[$i];
    }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CO Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="C:\Users\Dell\Desktop\code\css\style(adminsignup).css">


  </head>

  <body >
    <!-- NAVIGATION -->
    <div class="w3-top ">
      <div class="w3-bar w3-deep-purple">
        <span class="branding w3-bar-item w3-mobile">PICT EXAMINATION PORTAL</span>
      </div>
    </div>
<br><br>
    <!-- SHOWCASE -->
    <section class="showcase">
 
  <div class="w3-container">
  
  <div class="w3-panel w3-blue w3-round-xlarge">
    <p><center><b>CO mapping</b></center></p>
  </div>
</div>
  
  <?php $coTotalMarks = array(); ?>
 <div class="w3-panel w3-pale-blue w3-leftbar w3-border-blue">
    
   <p>Your's Results of final course outcome mapping are as follows:</p>
  </div>


  <table class="w3-table w3-striped w3-border">
    <tr>
      <th></th>
      <th>No. of questions</th>
      <th>Marks</th>
    </tr>
    <tr>
<?php for($i=0; $i<10; $i++) { 
		if($arr[2*$i] != 0) {
			
	?>
      <td><center><b>No. of questions of CO<?php echo $i+1 ?> for 1 marks:</center></td>
      <td><?php echo $arr[2*$i]; ?></td>
      <td><?php echo $arr[2*$i]; ?></td>
    </tr>
		<?php }
		if ($arr[2*$i+1] != 0) {
		?>
	<tr>
      <td><center><b>No. of questions of CO<?php echo $i+1 ?> for 2 marks:</center></td>
      <td><?php echo $arr[2*$i+1]; ?></td>
      <td><?php echo $arr[2*$i+1]*2; ?></td>
	  
	</tr>
		<?php } ?> 
		<?php $coTotalMarks[$i+1] = $arr[2*$i] + $arr[2*$i+1]*2; ?>
    
	<?php } ?> 
	
	
	
	<tr>
      <td></td>
      <td></td>
      <td></td>
    </tr>
	
	<tr>
      <td></td>
      <td></td>
      <td></td>
    </tr>
	
	<tr>
      <td></td>
      <td></td>
      <td></td>
    </tr>
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
	$unit1 = 0;
	for($i = 1; $i <= 10 ; $i++) {
		for($j = 1; $j <= 6; $j++) {
			$noOfOneMarkQuestions = $coArray['co'.$i]['unit'.$j.'_1'];
			$noOfTwoMarkQuestions = $coArray['co'.$i]['unit'.$j.'_2'];
			
			$sum1 +=$noOfOneMarkQuestions;
			$sum2 +=$noOfTwoMarkQuestions;
		}			
	}
	$unitMarks = array();
	for($k = 1; $k <= 6; $k++) {
		for($i=1; $i <= 10; $i++ ) {
			$unitMarks[$k] += $coArray['co'.$i]['unit'.$k.'_1'];
			$unitMarks[$k] += 2*$coArray['co'.$i]['unit'.$k.'_2'];	
		}
	}
	$totalQuestions = $sum1 + $sum2;
	$marks = $sum1 + 2*$sum2;
?> 

<?php


	
?> 




     <tr> <td><center><b>Total questions in the test</b> </td><td><?php echo "     ".$totalQuestions; ?></center></td><td></td></tr>
      <tr><td><center><b>Total marks in the test</b></center></td></td><td><?php echo $marks; ?></td><td></td></tr>
      <tr><td><center><b>Marks required to pass test</b></center></td><td><?php echo 0.4*$marks; ?></td><td></td></tr>
      <tr><td><center><b>Marks required to reapeat test</b></center></td><td><?php echo 0.6*$marks; ?></td><td></td></tr>
 
<tr>
	<?php for($i=1; $i<=6; $i++) {
			if($unitMarks[$i] != 0) {?>
      <td><center><b>Unit-<?php echo $i;?> weightage:</center></td>
      <td><?php echo $unitMarks[$i];?></td>
      <td></td>
    </tr><tr>
		<?php }
		} ?>
	<?php for($i=1; $i<=10; $i++) {
			if($coTotalMarks[$i] != 0) {?>
	<tr>
      <td><center><b>CO<?php echo $i?> marks:</center></td>
      <td><?php echo $coTotalMarks[$i]?></td>
      <td></td>
    </tr>
	
	     <?php }
	     } ?>
	
	
  </table>
</div>


  
</div>


  </section>

  </body>
</html>
