<!DOCTYPE html>
<html>
	<head>
		<title>Finalize</title>
	</head>
	<body>
		<?php
			include "include/dbconnect.inc.php";
			if(session_id() == ''){
    			session_start();
			}

			$user = $_SESSION["userID"];
			$eu = $_SESSION["eng"];
			$su = $_SESSION["ssp"];
			$tu = $_SESSION["trn"];
			$bu = $_SESSION["brk"];

			$pullQ = "SELECT userID, carsID, carPrice FROM carpurchases WHERE userID =?";

			$stmt = $conn->prepare($pullQ);
			$stmt->bind_param("s", $user);
			$stmt->execute();
			$result = $stmt->get_result()->fetch_assoc();

			$car = $result["carsID"];

			#echo "<br>";
			#var_dump($result);
			/*foreach($result as $k=>$r){
				echo "$k : $r<br>";
			}*/

			$pullQ = "SELECT carsID, carName, carYear, carHorsePower, carBasePrice FROM cars WHERE carsID=?";

			#var_dump($car);

			$stmt = $conn->prepare($pullQ);
			$stmt->bind_param("s", $car);
			$stmt->execute();

			$result2 = $stmt->get_result()->fetch_assoc();

			echo '<h2>Congratulations, '.$user.', on buying your '.$result2["carYear"].' '.$result2["carName"].'</h2>';
			echo '<h2>Your bank account will be billed $'.$result["carPrice"].".00</h2>";
			echo '<h2>The upgrades you selected are: <ul>';

			if($eu == 1){
				echo "<li>Engine</li>";
			}
			if($su == 1){
				echo "<li>Suspension</li>";
			}
			if($tu == 1){
				echo "<li>Transmission</li>";
			}
			if($bu == 1){
				echo "<li>Brakes</li>";
			}

			echo "</ul><br>";
			echo "<p><a class='btn' href='signout.php' role='button'>Sign Out</a></p>";

			if($result2["carsID"] == "gt"){
				echo '<img src="models\amggt.jpg" style="width:100%" alt="AMG-GT">'; #amg-gt
			}
			if($result2["carsID"] == "sc"){
				echo '<img src="models\maybach.jpg" style="width:100%" alt="AMG-GT">'; #maybach
			}
			if($result2["carsID"] == "cc"){
				echo '<img src="models\s63coupe.jpg" style="width:100%" alt="AMG-GT">'; #s63
			}
			if($result2["carsID"] == "ga"){
				echo '<img src="models\g63.jpg" style="width:100%" alt="AMG-GT">'; #g wag
			}
			if($result2["carsID"] == "ge"){
				echo '<img src="models\cls53.jpg" style="width:100%" alt="AMG-GT">'; #cls53
			}
			if($result2["carsID"] == "ca"){
				echo '<img src="models\amggtcoupe.jpg" style="width:100%" alt="AMG-GT sedan">'; #amg-gt 4door
			}
		?>
	</body>