<?php
    ob_start();
    session_start();
	include_once 'DBConnection.php'; //variables $conn

	if(isset($_POST['superadminbutton'])){
		$name = $_POST['name'];
		$password = $_POST['password'];
		$sqlTable = "CREATE TABLE `superadmins` ( `sr_no` int(10) NOT NULL AUTO_INCREMENT, `name` varchar(50) NOT NULL, `password` varchar(50) NOT NULL, PRIMARY KEY (`sr_no`) ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;";
		mysqli_query($conn, $sqlTable);
		$sql = "SELECT name, password FROM superAdmins WHERE name = '".$name."' AND password = '".$password."'";
		$result = mysqli_query($conn, $sql);
	
		if (mysqli_num_rows($result) > 0) {

		    $_SESSION['superAdmin'] = true;
			header("Location: superAdmin.php", true, 301);
            exit();
		}
		else {
			echo "<br>Super Admin Name OR Password is incorrect<br>";
			header('Refresh: 2; URL = superAdminLogin.php');
		}
	}
	mysqli_close($conn);

?>
