<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
			include "include/login-handle.inc.php";
			if(session_id() == ''){
    			session_start();
			}
			echo "<ul>";
			while(!empty($errors)){
				echo "<li>$e</li>";
				error_clear_last();
			}
			echo "</ul>";
		?>
		<form action="include/login-handle.inc.php" method="post">
			Username: <input type="text" name="username">
			<br><br>
			Password: <input type="text" name="password">
			<br><br>
			<input type="submit" name="Login" value="Login">
		</form>
			<br><br><p><a class="btn" href="signup.php" role="button">Sign Up</a></p>
	</body>
</html>