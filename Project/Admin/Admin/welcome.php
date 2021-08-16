<?php 

	session_start();

	$username = "";

	if(isset($_SESSION['username'])) {
		$username = $_SESSION['username'];
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Welcome</title>
</head>
<body>

	<h1>Welcome, <?php echo $username; ?></h1>
	<a href="login-form.php">Click to Register</a><br><br>

	<a href="registration-form.php">go to registration page</a><br><br>

	<a href="change_password.php">go for change password</a><br><br>


</body>
</html>