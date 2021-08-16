<?php  
	if($_SERVER['REQUEST_METHOD'] === "POST") {
		$newPassword = $_POST['newpassword'];
		$confirmPassword = $_POST['confirmpassword'];
		$oldpPassword = $_POST['oldpassword'];

		setcookie("newpassword", $newPassword, time() + 60*60*24);
		setcookie("confirmpassword", $confirmPassword, time() + 60*60*24);
		setcookie("oldpassword", $oldpPassword, time() + 60*60*24);
	}
	           
			



?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Change Password</title>
</head>
<body>

	<h1>Change Password</h1>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<fieldset>
			<legend>Change password</legend>

			<label for="newpassword">New Password:</label>
			<input type="password" name="newpassword" id="newpassword">
			<br><br>

			<label for="confirmpassword">Confirm Password:</label>
			<input type="password" name="newpassword" id="newpassword">
			<br><br>

			<label for="oldpassword">Old Password:</label>
			<input type="password" name="oldpassword" id="oldpassword">
			<br><br>

			<input type="submit" name="submit" value="Register">
		</fieldset>
	</form>

	<br>
	<a href="login-form.php">Go to Login</a>

</body>
</html>