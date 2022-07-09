<!DOCTYPE html>
<html>
	<head>
		<title>Car Purchase</title>
	</head>
	<body>
		<?php
			include "include/dbconnect.inc.php";

			if(session_id() == ''){
    			session_start();
			}

			$user = $_SESSION["userID"];

			$checkQ = "SELECT userID FROM carpurchases WHERE userID=?";

			$stmt = $conn->prepare($checkQ);
			$stmt->bind_param("s", $user);
			$stmt->execute();

			if($stmt->get_result()->num_rows == 0){
			
			if(isset($_POST['carChoice'])){
				$car = $_POST["car"];
				if(!isset($_POST["upgrE"])){
					$eng = False;
				} else{
					$eng = True;
				}
				if(!isset($_POST["upgrS"])){
					$ssp = False;
				} else {
					$ssp = True;
				}
				if(!isset($_POST["upgrT"])){
					$trn = False;
				} else {
					$trn = True;
				}
				if(!isset($_POST["upgrB"])){
					$brk = False;
				} else {
					$brk = True;
				}

				#var_dump($car);
				#var_dump($eng);
				#var_dump($ssp);
				#var_dump($trn);
				#var_dump($brk);

				$q = "SELECT carsID, carYear, carHorsepower, carBasePrice FROM cars WHERE carName=?";

				$stmt = $conn->prepare($q);
				$stmt->bind_param("s", $car);
				$stmt->execute();
				$result = $stmt->get_result();

				if($result->num_rows > 0){
					$x = $result->fetch_assoc();
					#var_dump($x);
				}

				$q2 = "SELECT upgradePrice FROM upgrades WHERE upgradesID = ?";
				

				$total = $x["carBasePrice"];

				if($eng){
					$uid = $x["carsID"];
					$uid .= "eng";
					$stmt = $conn->prepare($q2);
					$stmt->bind_param("s", $uid);
					$stmt->execute();
					$result = $stmt->get_result();
					$a = $result->fetch_assoc();
					$total = $total + $a["upgradePrice"];
					$eng = 1;
					$_SESSION["eng"]=1;
				} else{
					$_SESSION["eng"]=0;
				}
				if($ssp){
					$uid = $x["carsID"];
					$uid .= "ssp";
					$stmt = $conn->prepare($q2);
					$stmt->bind_param("s", $uid);
					$stmt->execute();
					$result = $stmt->get_result();
					$a = $result->fetch_assoc();
					$total = $total + $a["upgradePrice"];
					$ssp = 1;
					$_SESSION["ssp"]=1;
				} else{
					$_SESSION["ssp"]=0;
				}
				if($trn){
					$uid = $x["carsID"];
					$uid .= "trn";
					$stmt = $conn->prepare($q2);
					$stmt->bind_param("s", $uid);
					$stmt->execute();
					$result = $stmt->get_result();
					$a = $result->fetch_assoc();
					$total = $total + $a["upgradePrice"];
					$trn = 1;
					$_SESSION["trn"]=1;
				} else{
					$_SESSION["trn"]=0;
				}
				if($brk){
					$uid = $x["carsID"];
					$uid .= "brk";
					$stmt = $conn->prepare($q2);
					$stmt->bind_param("s", $uid);
					$stmt->execute();
					$result = $stmt->get_result();
					$a = $result->fetch_assoc();
					$total = $total + $a["upgradePrice"];
					$brk = 1;
					$_SESSION["brk"]=1;
				} else{
					$_SESSION["brk"]=0;
				}

				$carC = $x["carsID"];
				

				$insertQ = "INSERT INTO carPurchases (userID, carsID, carPrice) VALUES (?, ?, ?)";
				$stmt2 = $conn->prepare($insertQ);
				$stmt2->bind_param("ssi", $user, $carC, $total);
				$stmt2->execute();

				#var_dump($eng);
				
				header("Location: finalizedPurchase.php");
				
				}
			}	else{
			echo "<h2>You already purchased a car..<br>Please go back and make another username to buy a different car..</h2>";
		}
		?>
		<h3> Select a Car: </h3>
		<form method="post">
			AMG-GT (Coupe)<input type="radio" id="car" name="car" value="GT"> <br>
			Maybach (Sedan)<input type="radio" id="car" name="car" value="S-Class"> <br>
			S63 (Coupe)<input type="radio" id="car" name="car" value="C-Class"> <br>
			G63 (SUV)<input type="radio" id="car" name="car" value="GLA"> <br>
			CLS53 (Sedan)<input type="radio" id="car" name="car" value="GLE"> <br>
			AMG-GT 63s (Sedan)<input type="radio" id="car" name="car" value="CLA"> <br> <br> <br>
			<h3> Select Upgrades: </h3>
			Engine: <input type="checkbox" id="upgrE" name="upgrE" value=True> <br>
			Suspension: <input type="checkbox" id="upgrS" name="upgrS" value=True> <br>
			Transmission: <input type="checkbox" id="upgrT" name="upgrT" value=True> <br> 
			Brakes: <input type="checkbox" id="upgrB" name="upgrB" value=True> <br>
			<br> <br> <br>
			<input type="submit" name="carChoice" value="Submit">
		</form>
		<br>
		<br>

		<p><a class="btn" href="homepage.html" role="button">Home</a></p>

	</body>