<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
			include "include/signup-handle.inc.php";
/*
			
			$insertQ = "INSERT INTO cars (carsID, carName, carYear, carHorsepower, carBasePrice) VALUES (?, ?, ?, ?, ?)";

			$id = "cc";
			$name = "C-Class";
			$year = 2021;
			$hp = 255;
			$price = 41600;

			$stmt2 = $conn->prepare($insertQ);
			$stmt2->bind_param("ssiii", $id, $name, $year, $hp, $price);
			$stmt2->execute();

			$id = "sc";
			$name = "S-Class";
			$year = 2021;
			$hp = 429;
			$price = 112350;

			$stmt2 = $conn->prepare($insertQ);
			$stmt2->bind_param("ssiii", $id, $name, $year, $hp, $price);
			$stmt2->execute();

			$id = "ga";
			$name = "GLA";
			$year = 2021;
			$hp = 258;
			$price = 39355;

			$stmt2 = $conn->prepare($insertQ);
			$stmt2->bind_param("ssiii", $id, $name, $year, $hp, $price);
			$stmt2->execute();

			$id = "ge";
			$name = "GLE";
			$year = 2021;
			$hp = 369;
			$price = 62500;

			$stmt2 = $conn->prepare($insertQ);
			$stmt2->bind_param("ssiii", $id, $name, $year, $hp, $price);
			$stmt2->execute();

			$id = "ca";
			$name = "CLA";
			$year = 2021;
			$hp = 221;
			$price = 37850;

			$stmt2 = $conn->prepare($insertQ);
			$stmt2->bind_param("ssiii", $id, $name, $year, $hp, $price);
			$stmt2->execute();

			$id = "gt";
			$name = "GT";
			$year = 2021;
			$hp = 383;
			$price = 78950;

			$stmt2 = $conn->prepare($insertQ);
			$stmt2->bind_param("ssiii", $id, $name, $year, $hp, $price);
			$stmt2->execute();
*/
			$insertQ = "INSERT INTO upgrades (upgradesID, upgradePrice) VALUES (?, ?)";

			#$id = "cc";
			$upgrID = "cceng";
			$upgrPrice =4160;

			$stmt2 = $conn->prepare($insertQ);
			$stmt2->bind_param("si", $upgrID, $upgrPrice);
			$stmt2->execute();

			#$id = "cc";
			$upgrID = "ccssp";
			$upgrPrice =2080;

			$stmt2 = $conn->prepare($insertQ);
			$stmt2->bind_param("si", $upgrID, $upgrPrice);
			$stmt2->execute();

			#$id = "cc";
			$upgrID = "cctrn";
			$upgrPrice =1456;

			$stmt2 = $conn->prepare($insertQ);
			$stmt2->bind_param("si", $upgrID, $upgrPrice);
			$stmt2->execute();

			#$id = "cc";
			$upgrID = "ccbrk";
			$upgrPrice =1144;

			$stmt2 = $conn->prepare($insertQ);
			$stmt2->bind_param("si", $upgrID, $upgrPrice);
			$stmt2->execute();
#
			#$id = "sc";
			$upgrID = "sceng";
			$upgrPrice =11235;

			$stmt2 = $conn->prepare($insertQ);
			$stmt2->bind_param("si", $upgrID, $upgrPrice);
			$stmt2->execute();

			#$id = "sc";
			$upgrID = "scssp";
			$upgrPrice =5617;

			$stmt2 = $conn->prepare($insertQ);
			$stmt2->bind_param("si", $upgrID, $upgrPrice);
			$stmt2->execute();

			#$id = "sc";
			$upgrID = "sctrn";
			$upgrPrice =3932;

			$stmt2 = $conn->prepare($insertQ);
			$stmt2->bind_param("si", $upgrID, $upgrPrice);
			$stmt2->execute();

			#$id = "sc";
			$upgrID = "scbrk";
			$upgrPrice =3089;

			$stmt2 = $conn->prepare($insertQ);
			$stmt2->bind_param("si", $upgrID, $upgrPrice);
			$stmt2->execute();
#
			#$id = "ga";
			$upgrID = "gaeng";
			$upgrPrice =3935;

			$stmt2 = $conn->prepare($insertQ);
			$stmt2->bind_param("si", $upgrID, $upgrPrice);
			$stmt2->execute();

			#$id = "ga";
			$upgrID = "gassp";
			$upgrPrice =1967;

			$stmt2 = $conn->prepare($insertQ);
			$stmt2->bind_param("si", $upgrID, $upgrPrice);
			$stmt2->execute();

			#$id = "ga";
			$upgrID = "gatrn";
			$upgrPrice =1377;

			$stmt2 = $conn->prepare($insertQ);
			$stmt2->bind_param("si", $upgrID, $upgrPrice);
			$stmt2->execute();

			#$id = "ga";
			$upgrID = "gabrk";
			$upgrPrice =1082;

			$stmt2 = $conn->prepare($insertQ);
			$stmt2->bind_param("si", $upgrID, $upgrPrice);
			$stmt2->execute();
#
			#$id = "ge";
			$upgrID = "geeng";
			$upgrPrice =6250;

			$stmt2 = $conn->prepare($insertQ);
			$stmt2->bind_param("si", $upgrID, $upgrPrice);
			$stmt2->execute();

			#$id = "ge";
			$upgrID = "gessp";
			$upgrPrice =3125;

			$stmt2 = $conn->prepare($insertQ);
			$stmt2->bind_param("si", $upgrID, $upgrPrice);
			$stmt2->execute();

			#$id = "ge";
			$upgrID = "getrn";
			$upgrPrice =2187;

			$stmt2 = $conn->prepare($insertQ);
			$stmt2->bind_param("si", $upgrID, $upgrPrice);
			$stmt2->execute();

			#$id = "ge";
			$upgrID = "gebrk";
			$upgrPrice =1718;

			$stmt2 = $conn->prepare($insertQ);
			$stmt2->bind_param("si", $upgrID, $upgrPrice);
			$stmt2->execute();
#
			#$id = "ca";
			$upgrID = "caeng";
			$upgrPrice =3785;

			$stmt2 = $conn->prepare($insertQ);
			$stmt2->bind_param("si", $upgrID, $upgrPrice);
			$stmt2->execute();

			#$id = "ca";
			$upgrID = "cassp";
			$upgrPrice =1892;

			$stmt2 = $conn->prepare($insertQ);
			$stmt2->bind_param("si", $upgrID, $upgrPrice);
			$stmt2->execute();

			#$id = "ca";
			$upgrID = "catrn";
			$upgrPrice =1324;

			$stmt2 = $conn->prepare($insertQ);
			$stmt2->bind_param("si", $upgrID, $upgrPrice);
			$stmt2->execute();

			#$id = "ca";
			$upgrID = "cabrk";
			$upgrPrice =1040;

			$stmt2 = $conn->prepare($insertQ);
			$stmt2->bind_param("si", $upgrID, $upgrPrice);
			$stmt2->execute();
#
			#$id = "gt";
			$upgrID = "gteng";
			$upgrPrice =7895;

			$stmt2 = $conn->prepare($insertQ);
			$stmt2->bind_param("si", $upgrID, $upgrPrice);
			$stmt2->execute();

			#$id = "gt";
			$upgrID = "gtssp";
			$upgrPrice =3947;

			$stmt2 = $conn->prepare($insertQ);
			$stmt2->bind_param("si", $upgrID, $upgrPrice);
			$stmt2->execute();

			#$id = "gt";
			$upgrID = "gttrn";
			$upgrPrice =2763;

			$stmt2 = $conn->prepare($insertQ);
			$stmt2->bind_param("si", $upgrID, $upgrPrice);
			$stmt2->execute();

			#$id = "gt";
			$upgrID = "gtbrk";
			$upgrPrice =2171;

			$stmt2 = $conn->prepare($insertQ);
			$stmt2->bind_param("si", $upgrID, $upgrPrice);
			$stmt2->execute();

		?>
	</body>