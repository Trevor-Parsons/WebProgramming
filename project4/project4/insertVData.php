<?php
	if ($isValid) {
		try {
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $dbPassword);
		
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			$sql = $conn->prepare("INSERT INTO registration (userName, password, firstName, lastName,
			address1, address2, city, state, zipCode, phone, email, gender, maritalStatus, dateOfBirth)
			VALUES (:userName, :password, :fName, :lName, :address1, :address2, :city,
			:state, :zipCode, :phoneNum, :email, :gender, :maritalStatus, :birthday)");

			$sql->bindParam(':userName', $userName);
			$sql->bindParam(':password', $password);
			$sql->bindParam(':fName', $fName);
			$sql->bindParam(':lName', $lName);
			$sql->bindParam(':address1', $address1);
			$sql->bindParam(':address2', $address2);
			$sql->bindParam(':city', $city);
			$sql->bindParam(':state', $state);
			$sql->bindParam(':zipCode', $zipCode);
			$sql->bindParam(':phoneNum', $phoneNum);
			$sql->bindParam(':email', $email);
			$sql->bindParam(':gender', $gender);
			$sql->bindParam(':maritalStatus', $maritalStatus);
			$sql->bindParam(':birthday', $birthday);
			
			$sql->execute();
			
			$last_id = $conn->lastInsertId();
			$_SESSION["last_id"] = "$last_id";
			
			header("Location: confirm.php");
		}
		catch(PDOException $e) {
			echo "Connection failed in insertVdata: " . $e->getMessage();
		}
		$conn = null;
	}
?>