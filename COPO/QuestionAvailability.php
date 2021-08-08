<?php 

$conn = mysqli_connect("localhost", "root", "", "online_exam");
?>
<html>

<>
	<meta charset="utf-8">
	<title>Question availability</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="w3.css">
	<link rel="stylesheet" href="css/style(instruction).css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="js/jquery.min.js"></script>
<style>
body {
			font-family: Arial;
			background-color: #bfdbfb;
		}


#customers td, #customers th {
	  border: 1px solid  #ddd;
	  padding: 8px;
	}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
	  padding-top: 12px;
	  padding-bottom: 12px;
	  text-align: left;
	  background-color: #666666;
	  color: white;
}
</style>

<body>
<!-- NAVIGATION -->
	<div class="w3-top">
		<div class="w3-bar w3-deep-purple">
			<span class="branding w3-bar-item w3-mobile">PICT EXAMINATION PORTAL<span class="w3-right w3-mobile">
			</span>
		</div>
	</div>

	</div>
	<br><br><br>

<center><h1> Question Availability </h1>


<table id="customers">

<td>
<table border="1">
  <caption>
    
  </caption>
  <col>
  <col>
  <colgroup span="3"></colgroup>
  <t>
    <tr>
	

      <th scope="col">Unit</th>
      <th scope="col">CO </th>
      <th>M1  </th>
	  <th>M2</th>
    
    </tr>
  </t>
  
  
  
  <tbody>
  
    <tr>
      <th rowspan="20" scope="rowgroup"><?php echo "Unit-1 ";?></th>
	  </tr>
	  <?php for($j=1; $j<=10; $j++) {?>
	<?php
		$sqlUnit = "select count(*) from question_set WHERE unit = 1";
	?>
	  <tr>
		<td scope="row"><?php echo "co".$j ?></td>	
	  
	  <?php
		$sqlUnitCM1   = "select count(*) from question_set WHERE unit = 1 AND co =".$j." AND m = 1 ";
		$sqlUnitCM2 = "select count(*) from question_set WHERE unit = 1 AND co =".$j." AND m = 2";
		$result1=mysqli_query($conn, $sqlUnitCM1  );
		$data1=mysqli_fetch_assoc($result1);
		
		
	   ?>
	   
      <td><?php echo $data1['count(*)']; ?></td>
	  
	<?php $result2=mysqli_query($conn, $sqlUnitCM2);
		$data2=mysqli_fetch_assoc($result2);?>
      <td><?php echo $data2['count(*)']; ?></td>
		<tr>
	  <?php } ?>


    </tr>

  </tbody>
  <tbody>
    
</table>
</td>

<td>
<table border="1">
  <caption>
    
  </caption>
  <col>
  <col>
  <colgroup span="3"></colgroup>
  <t>
    <tr>
	

      <th scope="col">Unit</th>
      <th scope="col">CO </th>
      <th>M1  </th>
	  <th>M2</th>
    
    </tr>
  </t>
  
  
  
  <tbody>
  
    <tr>
      <th rowspan="20" scope="rowgroup"><?php echo "Unit-2 ";?></th>
	  </tr>
	  <?php for($j=1; $j<=10; $j++) {?>
	<?php
		$sqlUnit = "select count(*) from question_set WHERE unit = 1";
	?>
	  <tr>
		<td scope="row"><?php echo "co".$j ?></td>	
	  
	  <?php
		$sqlUnitCM1   = "select count(*) from question_set WHERE unit = 2 AND co =".$j." AND m = 1 ";
		$sqlUnitCM2 = "select count(*) from question_set WHERE unit = 2 AND co =".$j." AND m = 2";
		$result1=mysqli_query($conn, $sqlUnitCM1  );
		$data1=mysqli_fetch_assoc($result1);
		
		
	   ?>
	   
      <td><?php echo $data1['count(*)']; ?></td>
	  
	<?php $result2=mysqli_query($conn, $sqlUnitCM2);
		$data2=mysqli_fetch_assoc($result2);?>
      <td><?php echo $data2['count(*)']; ?></td>
		<tr>
	  <?php } ?>


    </tr>

  </tbody>
  <tbody>
    
</table>
</td>

<td>
<table border="1">
  <caption>
    
  </caption>
  <col>
  <col>
  <colgroup span="3"></colgroup>
  <t>
    <tr>
	

      <th scope="col">Unit</th>
      <th scope="col">CO </th>
      <th>M1  </th>
	  <th>M2</th>
    
    </tr>
  </t>
  
  
  
  <tbody>
  
    <tr>
      <th rowspan="20" scope="rowgroup"><?php echo "Unit-3 ";?></th>
	  </tr>
	  <?php for($j=1; $j<=10; $j++) {?>
	<?php
		$sqlUnit = "select count(*) from question_set WHERE unit = 1";
	?>
	  <tr>
		<td scope="row"><?php echo "co".$j ?></td>	
	  
	  <?php
		$sqlUnitCM1   = "select count(*) from question_set WHERE unit = 3 AND co =".$j." AND m = 1 ";
		$sqlUnitCM2 = "select count(*) from question_set WHERE unit = 3 AND co =".$j." AND m = 2";
		$result1=mysqli_query($conn, $sqlUnitCM1  );
		$data1=mysqli_fetch_assoc($result1);
		
		
	   ?>
	   
      <td><?php echo $data1['count(*)']; ?></td>
	  
	<?php $result2=mysqli_query($conn, $sqlUnitCM2);
		$data2=mysqli_fetch_assoc($result2);?>
      <td><?php echo $data2['count(*)']; ?></td>
		<tr>
	  <?php } ?>


    </tr>

  </tbody>
  <tbody>
    
</table>
</td>











<td>
<table border="1">
  <caption>
    
  </caption>
  <col>
  <col>
  <colgroup span="3"></colgroup>
  <t>
    <tr>
	

      <th scope="col">Unit</th>
      <th scope="col">CO </th>
      <th>M1  </th>
	  <th>M2</th>
    
    </tr>
  </t>
  
  
  
  <tbody>
  
    <tr>
      <th rowspan="20" scope="rowgroup"><?php echo "Unit-4 ";?></th>
	  </tr>
	  <?php for($j=1; $j<=10; $j++) {?>
	<?php
		$sqlUnit = "select count(*) from question_set WHERE unit = 1";
	?>
	  <tr>
		<td scope="row"><?php echo "co".$j ?></td>	
	  
	  <?php
		$sqlUnitCM1   = "select count(*) from question_set WHERE unit = 4 AND co =".$j." AND m = 1 ";
		$sqlUnitCM2 = "select count(*) from question_set WHERE unit = 4 AND co =".$j." AND m = 2";
		$result1=mysqli_query($conn, $sqlUnitCM1  );
		$data1=mysqli_fetch_assoc($result1);
		
		
	   ?>
	   
      <td><?php echo $data1['count(*)']; ?></td>
	  
	<?php $result2=mysqli_query($conn, $sqlUnitCM2);
		$data2=mysqli_fetch_assoc($result2);?>
      <td><?php echo $data2['count(*)']; ?></td>
		<tr>
	  <?php } ?>


    </tr>

  </tbody>
  <tbody>
    
</table>
</td>


<td>
<table border="1">
  <caption>
    
  </caption>
  <col>
  <col>
  <colgroup span="3"></colgroup>
  <t>
    <tr>
	

      <th scope="col">Unit</th>
      <th scope="col">CO </th>
      <th>M1  </th>
	  <th>M2</th>
    
    </tr>
  </t>
  
  
  
  <tbody>
  
    <tr>
      <th rowspan="20" scope="rowgroup"><?php echo "Unit-5 ";?></th>
	  </tr>
	  <?php for($j=1; $j<=10; $j++) {?>
	<?php
		$sqlUnit = "select count(*) from question_set WHERE unit = 1";
	?>
	  <tr>
		<td scope="row"><?php echo "co".$j ?></td>	
	  
	  <?php
		$sqlUnitCM1   = "select count(*) from question_set WHERE unit = 5 AND co =".$j." AND m = 1 ";
		$sqlUnitCM2 = "select count(*) from question_set WHERE unit = 5 AND co =".$j." AND m = 2";
		$result1=mysqli_query($conn, $sqlUnitCM1  );
		$data1=mysqli_fetch_assoc($result1);
		
		
	   ?>
	   
      <td><?php echo $data1['count(*)']; ?></td>
	  
	<?php $result2=mysqli_query($conn, $sqlUnitCM2);
		$data2=mysqli_fetch_assoc($result2);?>
      <td><?php echo $data2['count(*)']; ?></td>
		<tr>
	  <?php } ?>


    </tr>

  </tbody>
  <tbody>
    
</table>
</td>

<td>
<table border="1">
  <caption>
    
  </caption>
  <col>
  <col>
  <colgroup span="3"></colgroup>
  <t>
    <tr>
	

      <th scope="col">Unit</th>
      <th scope="col">CO </th>
      <th>M1  </th>
	  <th>M2</th>
    
    </tr>
  </t>
  
  
  
  <tbody>
  
    <tr>
      <th rowspan="20" scope="rowgroup"><?php echo "Unit-6 ";?></th>
	  </tr>
	  <?php for($j=1; $j<=10; $j++) {?>
	<?php
		$sqlUnit = "select count(*) from question_set WHERE unit = 1";
	?>
	  <tr>
		<td scope="row"><?php echo "co".$j ?></td>	
	  
	  <?php
		$sqlUnitCM1   = "select count(*) from question_set WHERE unit = 6 AND co =".$j." AND m = 1 ";
		$sqlUnitCM2 = "select count(*) from question_set WHERE unit = 6 AND co =".$j." AND m = 2";
		$result1=mysqli_query($conn, $sqlUnitCM1  );
		$data1=mysqli_fetch_assoc($result1);
		
		
	   ?>
	   
      <td><?php echo $data1['count(*)']; ?></td>
	  
	<?php $result2=mysqli_query($conn, $sqlUnitCM2);
		$data2=mysqli_fetch_assoc($result2);?>
      <td><?php echo $data2['count(*)']; ?></td>
		<tr>
	  <?php } ?>


    </tr>

  </tbody>
  <tbody>
    
</table>
</td>



</table>

</center>
</body>