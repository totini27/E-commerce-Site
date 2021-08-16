<?php
include 'dbread.php';
if(empty($_GET['search']) or empty($_GET['username'])){
$userList = getAllusers();
}
else{
	$userList = getUser($_GET['username']);
}
?>

<!DOCTYPE html>
<html>
	
<head>
	<meta charset="utf-8">
	<title>User List</title>
</head>
<body>
	


	<h1>User List</h1>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
		<input type="text" name="username">
		<input type="submit" name="search" value="search">
	</form>

	<?php
        echo "<table>";
        echo "<tr>";
        echo "<th>Id</th>";
        echo "<th>username</th>";
        echo "<th>Password</th>";
        echo "<th>Action</th>";
        echo "</tr>";

    for($i = 0; $i < count($users); $i++){
    	echo "<tr>";
    	echo "<td>" . $userList[$i]["id"] . "</td>";
    	echo "<td>" . $userList[$i]["username"] . "</td>";
    	echo "<td>" . $users[$i]["password"] . "</td>";
    	echo "<td></td>";
    	echo "</tr>";
    }
	?>
</body>




</html>