<?php
	include "dbconnect.inc.php";
	include "functions.inc.php";
	if(session_id() == ''){
    	session_start();
	}
	if(isset($_POST['Signup'])){
		$username = sanitizeStr($_POST['username']);
		$password = sanitizeStr($_POST['password']);
		$name = sanitizeStr($_POST['name']);
		var_dump($password);
		$checkQ = "SELECT userID ";
		$checkQ .= "FROM users WHERE userID = ?";
		
		$stmt = $conn->prepare($checkQ);
		$stmt->bind_param("s", $username);
		$stmt->execute();
		
		if($stmt->get_result()->num_rows > 0){
			$errors['duplicate'] = "Username is taken.";
			} else{
				$hashed_pwd = hash("sha256", $password);
				$insertQ = "INSERT INTO users (userID, userFullName, userPassword) ";
				$insertQ .= "VALUES (?, ?, ?)";
				
				$stmt2 = $conn->prepare($insertQ);
				$stmt2->bind_param("sss", $username, $name, $hashed_pwd);
				if(!$stmt2->execute()){
					$errors["insert"] = "Problem creating account..";
				} else{
					echo "Your account has been created.";
					$_SESSION['userID'] = $username;
					header("Location: welcomeHomepage.php");
					exit(0);
				}
			}
		}
	?>