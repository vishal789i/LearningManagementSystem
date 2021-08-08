<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Super Admin Page</title>
	<!-- Included CSS File Here -->
	<link rel="stylesheet" href="css/superAdmin.css" />
</head>

<body>
	<div class="box">
		<h2>Super Admin Login</h2>
		<form action="superAdminLoginPHP.php" method="post">
			<div class="inputBox">

				<h4>Username</h4>
				<input type="text" name="name" required>
			</div>
			<div class="inputBox">
				<h5>Password</h5>
				<input type="password" name="password" required>

			</div>
			<input type="submit" name="superadminbutton" value="Sign Up">
		</form>
	</div>
</body>

</html>
