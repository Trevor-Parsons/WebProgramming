<?php
	try {
		$last_id = $_SESSION["last_id"];
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $dbPassword);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $conn->prepare("SELECT userName, password, firstName, lastName,
			address1, address2, city, state, zipCode, phone, email, gender, maritalStatus, 
			dateOfBirth FROM registration WHERE id = :last_id");
			
		$stmt->bindParam(':last_id', $last_id);
		$stmt->execute();

		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		$assocArray = $stmt->fetchAll()[0];
		$userName = $assocArray["userName"];
		$password = $assocArray["password"];
		$fName = $assocArray["firstName"];
		$lName = $assocArray["lastName"];
		$address1 = $assocArray["address1"];
		$address2 = $assocArray["address2"];
		$city = $assocArray["city"];
		$state = $assocArray["state"];
		$zipCode = $assocArray["zipCode"];
		$phone = $assocArray["phone"];
		$email = $assocArray["email"];
		$gender = $assocArray["gender"];
		$maritalStatus = $assocArray["maritalStatus"];
		$birthday = $assocArray["dateOfBirth"];
	}
	catch(PDOException $e) {
		echo "Connection failed in selectUdata: " . $e->getMessage();
	}
	$conn = null;
?>