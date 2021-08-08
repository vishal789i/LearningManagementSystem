<?php

error_reporting(E_ERROR | E_PARSE);
$conn = mysqli_connect("localhost", "root", "", "testing");

$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);
 
  $i= 0;
if (mysqli_num_rows($result) > 0) {?>
<table id="customers">
<tr>
    	<th>Sr_no</th>
      <th><h4><center>CO</th></h4></center>
      <th><h4><center>Weight</th></h4></center>
      <th><h4><center>CoMarks</th></h4></center>
      <th><h4><center>unit1_1</th></h4></center>
      <th><h4><center>unit1_2</th></h4></center> 
      <th><h4><center>unit2_1</th></h4></center>
      <th><h4><center>unit2_2</th></h4></center>
      <th><h4><center>unit3_1</th></h4></center>
      <th><h4><center>unit3_2</th></h4></center>
      <th><h4><center>unit4_1</th></h4></center>  
      <th><h4><center>unit4_2</th></h4></center> 
      <th><h4><center>unit5_1</th></h4></center>
      <th><h4><center>unit5_2</th></h4></center>
      <th><h4><center>unit6_1</th></h4></center>  
      <th><h4><center>unit6_2</th></h4></center> 	
</tr>
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
            <tbody id="myTable">
    <tr>
     <?php //$array[$i] = $row['id'];
         $k = $k + 1; 
         $i = $row['id'];
         $sum1 = 0;
         $sum2 = 0;
     //$i = $i +1; ?>
 
    	<td><center><?php  $coArray[$k][0] = $row['id']; echo $coArray[$k][0];  ?></td></center>

    	<td><center><?php echo $row['co'];  `></center>
    	<td><center><?php echo $row['weight'` if ($row['weight'] != 0) {
         $flag[$k] = 1;
        } ?></td></center>
    	<td><center><?php echo $row['coMarks']; $coArray[$k][3] = $row['coMarks'];  ?></td></center>
		<td><center><?php echo $row['unit1_1']; $coArray[$k][4] = $row['unit1_1']; $sum1 = $sum1 + $coArray[$k][4];  ?></td></center>
		<td><center><?php echo $row['unit1_2']; $coArray[$k][5] = $row['unit1_2'];  $sum2 = $sum2 + $coArray[$k][5];  ?></td></center>
		<td><center><?php echo $row['unit2_1']; $coArray[$k][6] = $row['unit2_1']; $sum1 = $sum1 + $coArray[$k][6];  ?></td></center>
		<td><center><?php echo $row['unit2_2']; $coArray[$k][7] = $row['unit2_2']; $sum2 = $sum2 + $coArray[$k][7];  ?></td></center>
		<td><center><?php echo $row['unit3_1']; $coArray[$k][8] = $row['unit3_1']; $sum1 = $sum1 + $coArray[$k][8]; ?></td></center>
		<td><center><?php echo $row['unit3_2']; $coArray[$k][9] = $row['unit3_2']; $sum2 = $sum2 + $coArray[$k][9]; ?></td></center>
		<td><center><?php echo $row['unit4_1']; $coArray[$k][10] = $row['unit4_1']; $sum1 = $sum1 + $coArray[$k][10]; ?></td></center>
		<td><center><?php echo $row['unit4_2']; $coArray[$k][11] = $row['unit4_2']; $sum2 = $sum2 + $coArray[$k][11]; ?></td></center>
		<td><center><?php echo $row['unit5_1']; $coArray[$k][12] = $row['unit5_1']; $sum1 = $sum1 + $coArray[$k][12]; ?></td></center>
		<td><center><?php echo $row['unit5_2']; $coArray[$k][13] = $row['unit5_2']; $sum2 = $sum2 + $coArray[$k][13]; ?></td></center>
		<td><center><?php echo $row['unit6_1']; $coArray[$k][14] = $row['unit6_1']; $sum1 = $sum1 + $coArray[$k][14]; ?></td></center>
		<td><center><?php echo $row['unit6_2']; $coArray[$k][15] = $row['unit6_2']; $sum2 = $sum2 + $coArray[$k][15]; ?></td></center>

    </tr>
    
<?php
      $arr[$index] = $sum1;
      $index = $index + 1;
      $arr[$index] = $sum2;
      $index = $index + 1;
 } ?>
</tbody>
</table>
<br><br><br><br>
<?php 

} else {
    echo "No result found ";
}
     
     
    /*for ($x = 0; $x <= 10; $x++) {
    	for ($y = 0; $y <= 15; $y++){
    		echo coArray[$x][$y];
    	}
       
}*/
   


   echo " values !";
   echo $coArray[2][1];
   echo "\n";
   for ($x = 0; $x < 9; $x++) {
    	for ($y = 0; $y <= 15; $y++){
    		if($flag[$x] == 1){
    			echo "Heyy";
    		}else{
    			echo "no ";
    		}
    	}
    	echo nl2br("\n");

    }
     echo "<br>";
     echo nl2br("\n");
    for ($i=0; $i < 21 ; $i++) { 
    	# code...
    	echo $arr[$i];
    	echo "<br>";
    }

?>