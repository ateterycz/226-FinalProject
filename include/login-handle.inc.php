<!DOCTYPE html>
<html>
<body>

<?php
	if(session_id() == ''){
    	session_start();
	}
	include "dbconnect.inc.php";
	include "functions.inc.php";
	if(isset($_POST['Login'])){

		$username = sanitizeStr($_POST["username"]);
		$password = sanitizeStr($_POST["password"]);

		$query1 = "SELECT userID, userPassword FROM users WHERE userID = ?";

		$stmt = $conn->prepare($query1);
		$stmt->bind_param("s", $username);
		$stmt->execute();
		$result = $stmt->get_result();

		$hashed_pwd = hash("sha256", $password);
		$a = $result->fetch_assoc();

		if($result->num_rows > 0){

			if($hashed_pwd == $a["userPassword"]){
				if(session_id() == ''){
    				session_start();
				}
				#var_dump(session_id());
				$_SESSION["userID"] = $username;

				header("Location: ../welcomeHomepage.php");
				exit(0);

			} else{
				$errors["account"] = "The record isn't matched.";
			}
		} else{
				$errors["account"] = "The record isn't matched.";
				header("Location: ../login.php");
		}
	}
?>

</body>