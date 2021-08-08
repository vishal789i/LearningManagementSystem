<?php
$connect = mysqli_connect("localhost", "root", "", "testing");
if(true/*isset($_POST["co"], $_POST["weight"], $_POST["coMarks"])*/)
{
 $co = mysqli_real_escape_string($connect, $_POST["co"]);
 $weight = mysqli_real_escape_string($connect, $_POST["weight"]);
 $coMarks = mysqli_real_escape_string($connect, $_POST["coMarks"]);
 $unit1_1 = mysqli_real_escape_string($connect, $_POST["unit1_1"]);
 $unit1_2 = mysqli_real_escape_string($connect, $_POST["unit1_2"]);
 $unit2_1 = mysqli_real_escape_string($connect, $_POST["unit2_1"]);
 $unit2_2 = mysqli_real_escape_string($connect, $_POST["unit2_2"]);
 $unit3_1 = mysqli_real_escape_string($connect, $_POST["unit3_1"]);
 $unit3_2 = mysqli_real_escape_string($connect, $_POST["unit3_2"]);
 $unit4_1 = mysqli_real_escape_string($connect, $_POST["unit4_1"]);
 $unit4_2 = mysqli_real_escape_string($connect, $_POST["unit4_2"]);
 $unit5_1 = mysqli_real_escape_string($connect, $_POST["unit5_1"]);
 $unit5_2 = mysqli_real_escape_string($connect, $_POST["unit5_2"]);
 $unit6_1 = mysqli_real_escape_string($connect, $_POST["unit6_1"]);
 $unit6_2 = mysqli_real_escape_string($connect, $_POST["unit6_2"]);
 
 $query = "INSERT INTO `user` (`id`, `co`, `weight`, `coMarks`, `unit1_1`, `unit1_2`, `unit2_1`, `unit2_2`, `unit3_1`, `unit3_2`, `unit4_1`, `unit4_2`, `unit5_1`, `unit5_2`, `unit6_1`, `unit6_2`) VALUES ('$co', '$weight', '$coMarks', '$unit1_1', '$unit1_2', '$unit2_1', '$unit2_2', '$unit3_1', '$unit3_2', '$unit4_1', '$unit4_2', '$unit5_1', '$unit5_2', '$unit6_1', '$unit6_2')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>