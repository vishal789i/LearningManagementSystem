<?php session_start();?>
<?php if(isset($_SESSION['superAdmin'])){?>
<?php function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array();
    $alphaLength = strlen($alphabet) - 1;
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
} ?>
<?php
	error_reporting(0);
	include_once 'DBConnection.php';
	require_once('vendor/php-excel-reader/excel_reader2.php');
	require_once('vendor/SpreadsheetReader.php');

	$tableSqlStudents = "CREATE TABLE `studentlogins` ( `id` int(11) NOT NULL AUTO_INCREMENT, `name` varchar(50) NOT NULL, `username` varchar(50) NOT NULL, `password` varchar(50) NOT NULL, PRIMARY KEY (`id`) ) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;";

	mysqli_query($conn, $tableSqlStudents);

	if (isset($_POST["import"]))
	{
	  $allowedFileType = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];

	  if(in_array($_FILES["file"]["type"],$allowedFileType)){

			$targetPath = 'uploads/'.$_FILES['file']['name'];
			move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);

			$Reader = new SpreadsheetReader($targetPath);

			$sheetCount = count($Reader->sheets());
			for($i=0;$i<$sheetCount;$i++)
			{
				$Reader->ChangeSheet($i);

				foreach ($Reader as $Row)
				{

					$id = "";
					if(isset($Row[0])) {
						$id = mysqli_real_escape_string($conn,$Row[0]);
					}

					$name = "";
					if(isset($Row[1])) {
						$name = mysqli_real_escape_string($conn,$Row[1]);
					}

					$username = "";
					if(isset($Row[2])) {
						$username = mysqli_real_escape_string($conn,$Row[2]);
					}

					$password = randomPassword();
					/*if(isset($Row[3])) {
						$password = mysqli_real_escape_string($conn,$Row[3]);
					}*/

					$query = "INSERT INTO `studentlogins` (`id`, `name`, `username`, `password`) VALUES (NULL, '".$name."', '".$username."',SHA('".$password."'));";


					$result = mysqli_query($conn, $query);

					if (! empty($result)) {
						$type = "success";
						$message = "Excel data imported into the database susccessfully !";
					} else {
						$type = "error";
						$message = "Error:Problem in importing excel data";
					}

				 }
			}
	  }
	  else
	  {
			$type = "error";
			$message = "Invalid file type.Please upload excel file only.";
	  }
	}
	?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Instruction Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/w3.css">
  <link rel="stylesheet" href="css/style(instruction).css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="js/jquery.min.js"></script>
  <style>
    body {
      font-family: Arial;
      background-color: #bfdbfb;
    }

    .outer-container {
      background: #f1f1f1;
      border: 1px solid black;
      padding: 40px 20px;
      border-radius: 2px;
      align: right;
    }

    .btn-submit {
      background: #333;
      border: #1d1d1d 1px solid;
      border-radius: 2px;
      color: #f0f0f0;
      cursor: pointer;
      padding: 5px 20px;
      font-size: 0.9em;
    }

    .btn-info {
      background: #333;
      border: #1d1d1d 1px solid;
      border-radius: 2px;
      color: #f0f0f0;
      cursor: pointer;
      padding: 5px 20px;
      font-size: 0.9em;
    }

    .tutorial-table {
      margin-top: 40px;
      font-size: 0.8em;
      border-collapse: collapse;
      width: 100%;
    }

    .tutorial-table th {
      background: #f0f0f0;
      border-bottom: 1px solid #dddddd;
      padding: 8px;
      text-align: left;
    }

    .tutorial-table td {
      background: #FFF;
      border-bottom: 1px solid #dddddd;
      padding: 8px;
      text-align: left;
    }

    #response {
      padding: 10px;
      margin-top: 10px;
      border-radius: 2px;
      display: none;
    }

    .success {
      background: #c7efd9;
      border: #bbe2cd 1px solid;
    }

    .error {
      background: #fbcfcf;
      border: #f3c6c7 1px solid;
    }

    div#response.display-block {
      display: block;
    }
  </style>
</head>

<body>

  <!-- NAVIGATION -->
  <div class="w3-top">
    <div class="w3-bar w3-deep-purple">
      <span class="branding w3-bar-item w3-mobile">PICT EXAMINATION
        PORTAL<?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Employee Name : ".$_SESSION['empName']."&nbsp;&nbsp;&nbsp;Selected Subject : ".$_SESSION['SubjectGV']." ";?></span>
      <span class="w3-right w3-mobile">
      </span>
    </div>
  </div>

  </div>
  <br><br><br><br><br><br>


  <h3 class="w3-red">
    <center>Upload your student profiles through an excel sheet !</center>
  </h3>
  &nbsp;&nbsp;&nbsp;&nbsp;<h5><b>Upload your exel sheet below:</b></h5>

  <div class="outer-container">
    <form action="" method="post" name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
      <div>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <label>Choose Excel File</label> <input type="file" name="file" id="file" accept=".xls,.xlsx">
        <button type="submit" id="submit" name="import" class="btn-submit">Import</button>
      </div>
    </form>

  </div>
  <div id="response" class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>"><?php if(!empty($message)) { echo $message; } ?></div>
  <br><br><br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


  <button class="btn-info" onClick="document.location.href='superAdmin.php'">Go Back..</button>

</body>

</html>

<?php }
else{
    echo "<h1>Access Forbidden</h1>";
}?>
