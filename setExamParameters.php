<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Colorlib Templates">
  <meta name="author" content="Colorlib">
  <meta name="keywords" content="Colorlib Templates">

  <!-- Title Page-->
  <title>pict online examination system</title>

  <!-- Font special for pages-->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<script src="js/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="css/sweetalert.css">
  <!-- Main CSS-->
  <link href="css/editform.css" rel="stylesheet" media="all">
</head>

<body>
  <div class="page-wrapper bg-dark p-t-100 p-b-50">
    <div class="wrapper wrapper--w900">
      <div class="card card-6">
        <div class="card-heading">
          <h2 class="title">Configure exam parameters</h2>
        </div>
        <div class="card-body">
          <form method="POST" action = "">
            <div class="form-row">
              <div class="name">Duration of exam</div>
              <div class="value">
                <input class="input--style-6" type="text" placeholder="Enter duration of exam in minutes." name="time" required>
              </div>
            </div>
            <div class="form-row">
              <div class="name">Passing marks</div>
              <div class="value">
                <input class="input--style-6" placeholder="Enter  passing marks(integer value) as threshold for pass/fail criteria." type="text" name="threshold" required>
              </div>
            </div>
			<div class="form-row">
              <div class="name">Subject</div>
              <div class="value">
                <input class="input--style-6" placeholder="Enter Subject name in capital letters only e.g OOP" type="text" name="subject" required>
              </div>
            </div>
			<div class="form-row">
              <div class="name">Exam name</div>
              <div class="value">
                <input class="input--style-6" placeholder="Enter exam name e.g. OOP (SE E&TC 2015 pattern)" type="text" name="examName" required>
              </div>
            </div>
            <div class="card-footer">
              <button class="btn btn--radius-2 btn--blue-2" type="submit">Upload</button>
			</div>
        </div>
      </div>
    </div>
		<?php
			include_once 'DBConnection.php';
			$sqlCreateAdminVariablesTable = "CREATE TABLE `adminvariables` (
                  `sr_no` int(11) NOT NULL AUTO_INCREMENT,
                  `time` int(100) NOT NULL,
                  `threshold` int(11) NOT NULL,
                  `examName` varchar(50) NOT NULL,
                  `subject` varchar(50) NOT NULL,
                  PRIMARY KEY (`sr_no`)
                ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;";
			mysqli_query($conn, $sqlCreateAdminVariablesTable);



			if(isset($_POST['maxQuestions'])){
				$sql = "INSERT INTO `adminvariables` (`time`, `threshold`, `subject`, `examName`) VALUES ('".$_POST['time']."', '".$_POST['threshold']."', '".$_POST['subject']."', '".$_POST['examName']."' );";
				if(mysqli_query($conn, $sql)>0){
				?> <script>
					  swal("", "You Have Successfully Configured Exam Parameters!", "success");
					</script>
			<?php
					
				}
				else{ ?>
					<script>
					  swal("", "You Have UnSuccessfully Configured Exam Parameters!", "success");
					</script>
				<?php 	
				}

				mysqli_close($conn);
			}
		?>
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
