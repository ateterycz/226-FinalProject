<?php
	include "include/signup-handle.inc.php";
	if(session_id() == ''){
    	session_start();
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form action="signup.php" method="post">
			Username: <input type="text" name="username">
			<br><br>
			Password: <input type="text" name="password">
			<br><br>
			Name: <input type="text" name="name">
			<br><br>
			<input type="submit" name="Signup" value="Signup">
		</form>
	</body>
</html>