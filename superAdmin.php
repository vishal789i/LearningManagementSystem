<?php session_start();
	if(isset($_SESSION['superAdmin']) ){
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Admin Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="C:\Users\Dell\Desktop\code\css\style(adminsignup).css">


</head>

<body>
	<!-- NAVIGATION -->
	<div class="w3-top ">
		<div class="w3-bar w3-deep-purple">
			<span class="branding w3-bar-item w3-mobile">PICT EXAMINATION PORTAL</span>
			<span class="w3-right w3-mobile">
				<a class="w3-bar-item w3-button w3-mobile w3-hover-red" href="#logout">Logout</a>
			</span>
		</div>
	</div>
	<br><br><br><br>
	<!-- SHOWCASE -->
	<section class="showcase">
		<div class="w3-container w3-center">
			<h1 class="w3-text-shadow w3-animate-opacity">Welcome to AVS Online Exam Portal</h1>
			<hr>
			<h5 class="w3-animate-opacity"><br><br>
				Registration portal</h5><br>
			<button onclick="window.location.href='uploadAdmins.php'" class="w3-button w3-red w3-large">Upload Teacher Profiles</button>
			<button class="w3-button w3-red w3-large" onclick="window.location.href='uploadStudents.php'">Upload Student Profiles</button>
			<br> <br> <br> <br>
			<button onclick="window.location.href='viewAdmins.php'" class="w3-button w3-red w3-large">View Teachers signed up</button>
			<button onclick="window.location.href='viewStudents.php'" class="w3-button w3-red w3-large">View Students signed up</button>


		</div>
	</section>

</body>

</html>
<?php }else{
	echo "access forbidden";
} ?>
