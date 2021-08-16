<?php



$fullname = $username = $password = "";
$fullnameErr = $usernameErr = $passwordErr = "";
$isvalid = true;
$SuccessfulMessage = $errorMessage = ""; 


	if($_SERVER['REQUEST_METHOD'] === "POST") {
		$fullname = $_POST['fullname'];
		$username = $_POST['username'];
		$password = $_POST['password'];

		setcookie("fname", $fullname, time() + 60*60*24);
		setcookie("uname", $username, time() + 60*60*24);
		setcookie("passw", $password, time() + 60*60*24);


 if(empty($fullname)){
			$fullnameErr = " fullname can not be empty";
			$isvalid = false;
		}


if(empty($username)){
			$usernameErr = " username can not be empty";
			$isvalid = false;
		}		


if(empty($password)){
			$passwordErr = " username can not be empty";
			$isvalid = false;
		}

if($isvalid){
			$res = register($username,$password);
			if($res){ 
				$SuccessfulMessage = "Successfully saved";
			}
			else{
				$errorMessage = "Error while saving";
			}
			}





}

?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration Form</title>
</head>
<body>

	<h1>Registration Form</h1>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<fieldset>
			<legend>Registration Form</legend>

			<label for="fullname">Full Name:</label>
			<input type="text" name="fullname" id="fullname">
			<br><br>

			<label for="username">User Name:</label>
			<input type="text" name="username" id="username">
			<br><br>

			<label for="password">Password:</label>
			<input type="password" name="password" id="password">
			<br><br>

			<input type="submit" name="submit" value="Register">
		</fieldset>
	</form>

	<br>
	<a href="login-form.php">Go to Login</a>

</body>
</html>