<?php session_start(); ?>
<?php if(isset($_SESSION['startedOfAdmin'])){?>

<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #101B2D;
  color: white;
}
</style>
</head>
<body>

<?php
	include_once 'DBConnection.php';
	
	$srNo = $_POST['question_no'];
	$newQuestion = $_POST['question'];
	$newOption1 = $_POST['option1'];
	$newOption2 = $_POST['option2'];
	$newOption3 = $_POST['option3'];
	$newOption4 = $_POST['option4'];
	$newAnswer = $_POST['f_answer'];

  $id = $srNo;
  $varname = $_POST['varname'];
  $file =  $_FILES['file'];
  print_r($file);
  $filename = $_FILES['file']['name'];
  $fileTmpName = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileType = $_FILES['file']['type'];

  $fileExt = explode('.', $filename);
  $fileActualExt = strtolower(end($fileExt));
  $allowed = array('jpg', 'jpeg', 'png', 'pdf');

  if(in_array($fileActualExt, $allowed)){
    if($fileError===0){
      if($fileSize<50000000){
        $fileNameNew =  "question".$id.".".$fileActualExt;
        $fileDestination =  'images/'.$fileNameNew;
        move_uploaded_file($fileTmpName, $fileDestination);
        $foldername = "images/".$fileNameNew;
        /*$sql = "UPDATE question_set SET picsource = 'upload' WHERE userid='$id';";
        $result = mysqli_query($conn, $sql); */
        echo "upload suscesss ".$varname."this";

        //header("Location: index.php?uploadsucess");

      }else{
        echo "Your file is too big";
      }

    }else{
      echo "There was an error uploading your file";
    }

  
  }else{
    echo "you cannot upload the file";
  }

    if($foldername != ""){

	$sql = "UPDATE question_set SET question='$newQuestion', option1='$newOption1', option2='$newOption2', option3='$newOption3', option4='$newOption4', f_answer='$newAnswer', picsource='$foldername' WHERE sr_no = $srNo";

	if (mysqli_query($conn, $sql)) {
		echo "Record updated successfully";
		header('Refresh: 2; URL = viewQuestions.php');
	} 
	else{
		echo "Error updating record: " . mysqli_error($conn);
	}
  }
  else{
    $sql = "UPDATE question_set SET question='$newQuestion', option1='$newOption1', option2='$newOption2', option3='$newOption3', option4='$newOption4', f_answer='$newAnswer' WHERE sr_no = $srNo";

	if (mysqli_query($conn, $sql)) {
		echo "Record updated successfully";
		header('Refresh: 2; URL = viewQuestions.php');
	} 
	else{
		echo "Error updating record: " . mysqli_error($conn);
	}
  }

  }

?>

</body>
</html>  

<?php }
else{
    echo "<h1>Access Forbidden.</h1>";
}?>