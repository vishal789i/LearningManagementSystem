<?php session_start();?>

<?php
error_reporting(E_ERROR | E_PARSE);
 /* $realCount = 1;
if (mysqli_num_rows($resultRealCount) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($resultRealCount)) {?>
      $realCount = $row['sr_no']; 
     ?>
    
    
<?php } ?>
</table>
<br><br><br><br>
<?php 

} else {
    echo "No Results Found ! ";
}*/

//$id = $_SESSION['id']; 



include_once 'DBConnection.php';  //var $conn
    $subjectS = $_SESSION["SubjectGV"];

    $sqlRealCount = "SELECT * FROM question_set";

    $resultRealCount = mysqli_query($conn, $sqlRealCount);

?>
<?php 
  $realCount = 0;
if (mysqli_num_rows($resultRealCount) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($resultRealCount)) {?>
    
    
     <?php /*$arraynew[$j] = $row['sr_no']; 
     $j = $j +1;*/ 
      $realCount = $row['sr_no']; 
     ?>
    
    
<?php } ?>
</table>
<br><br><br><br>
<?php 

} else {
    echo "No Results Found ! ";
}

    $id = $realCount + 1;

    if( isset($_POST['questionSubmitButton']) ){
      
            $sub = $_SESSION["SubjectGV"];
            $marks = $_POST["Marks"];
            $co = $_POST["CO"];
            $u_count=1;
            //$subSected = $_POST["SubSelection"];
           // $_SESSION["subSel"] = $_POST["subjectSelection"];
            //$subjectSelected = $_POST["subjectSelection"];
        
           /* $subjectSelected = $_POST["subjectSelection"];
           echo "Selected subject is ".$subjectSelected ;*/
            $teacherID = $_SESSION['adminName'];
           
            $sqlQuestion = "INSERT INTO `online_exam`.`question_set` (question, option1 , option2 , option3, option4, f_answer, subjectName, teacherId, CO, M) VALUES ('".$_POST["question"]."', '".$_POST["option1"]."', '".$_POST["option2"]."', '".$_POST["option3"]."', '".$_POST["option4"]."', '".$_POST["answer"]."', '$subjectS', '$teacherID', '$co', '$marks')";
            
            if (mysqli_query($conn, $sqlQuestion)) {
                echo "<br> Question submitted successfully into database <br>";
            }
            else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
             header('location: adminSignIn.php');
          }
?>
