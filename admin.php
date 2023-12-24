<?php
session_start();

$con = mysqli_connect('localhost', 'root' );
if($con){
	//echo "conenction successful";
}else{
	echo "no connection";
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
	<h2>Admin Login </h2>
</div>
<form method="post" action="dashboard.php">
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Login</button>
	</div>
	</form>
</body>
</html>