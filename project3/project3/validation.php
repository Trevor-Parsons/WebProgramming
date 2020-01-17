<?php 

$userName = $password = $repPassword = $fName = $lName = $address1 = $address2 = "";
$city = $state = $zipCode = $phoneNum = $email = $gender = $maritalStatus = $birthday = "";

$userNameERR = $passwordERR = $repPasswordERR = $fNameERR = $lNameERR = $address1ERR = $address2ERR = "";
$cityERR = $stateERR = $zipCodeERR = $phoneNumERR = $emailERR = $genderERR = $maritalStatusERR = $birthdayERR = "";

$isValid = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
		$isValid = true;
		
		$userName = clean_input($_POST["uName"]);
		if (empty($userName)) {
			$userNameERR = "User Name is required";
			$isValid = false;
		} else {
			if (!preg_match("/^[a-zA-Z ]+$/", $userName)) {
				$userNameERR = "Only letters and white space allowed";
				$isValid = false;
			}
			
			if (strlen($userName) < 6 || strlen($userName) > 50) {
				$userNameERR = "Must be between 6 and 50 characters.";
				$isValid = false;
			}
		}
		
		$password = clean_input($_POST["pWord"]);
		if (empty($password)) {
			$passwordERR = "Password is required";
			$isValid = false;
		} else {
			if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,50})/", $password)) {
				$passwordERR = "Must have 1 capital, 1 losercase, 1 digit, 1 special character, and be between 8 and 50 characters.";
				$isValid = false;
			}
		}
		
		$repPassword = clean_input($_POST["repPWord"]);
		if (empty($repPassword)) {
			$repPasswordERR = "Password is required";
			$isValid = false;
		} else {
			if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,50})/", $password)) {
				$passwordERR = "Must have 1 capital, 1 losercase, 1 digit, 1 special character, and be between 8 and 50 characters.";
				$isValid = false;
			}
			if ($password != $repPassword) {
				$repPasswordERR = "Repeated Password must match the original Password.";
				$isValid = false;
			}
		}
		
		$fName = clean_input($_POST["fName"]);
		if (empty($fName)) {
			$fNameERR = "First Name is required";
			$isValid = false;
		} else {
			if (!preg_match("/^[a-zA-Z ]+$/", $fName)) {
				$fNameERR = "Only letters and white space allowed";
				$isValid = false;
			}
			
			if (strlen($fName) > 50) {
				$fNameERR = "Max 50 characters.";
				$isValid = false;
			}
		}
		
		$lName = clean_input($_POST["lName"]);
		if (empty($lName)) {
			$lNameERR = "Last Name is required";
			$isValid = false;
		} else {
			if (!preg_match("/^[a-zA-Z ]+$/", $lName)) {
				$lNameERR = "Only letters and white space allowed";
				$isValid = false;
			}
			
			if (strlen($lName) > 50) {
				$lNameERR = "Max 50 characters.";
				$isValid = false;
			}
		}
		
		$address1 = clean_input($_POST["add"]);
		if (empty($address1)) {
			$address1ERR = "Address 1 is required";
			$isValid = false;
		} else {
			if (strlen($address1) > 100) {
				$address1ERR = "Max 100 characters.";
				$isValid = false;
			}
		}
		
		$address2 = clean_input($_POST["secondAdd"]);
		if (strlen($address1) > 100) {
			$address1ERR = "Max 100 characters.";
			$isValid = false;
		}
		
		$city = clean_input($_POST["city"]);
		if (empty($city)) {
			$cityERR = "City is required";
			$isValid = false;
		} else {
			if (!preg_match("/^[a-zA-Z ]+$/", $city)) {
				$cityERR = "Only letters and white space allowed";
				$isValid = false;
			}
			
			if (strlen($city) > 50) {
				$address1ERR = "Max 50 characters.";
				$isValid = false;
			}
		}
		
		$state = clean_input($_POST["state"]);
		if (empty($state)) {
			$stateERR = "State is required";
			$isValid = false;
		}
		
		$zipCode = clean_input($_POST["zip"]);
		if (empty($zipCode)) {
			$zipCodeERR = "Zip Code is required";
			$isValid = false;
		} else {
			if (!preg_match("/(^\d{5}$)|(^\d{9})/", $zipCode)) {
				$zipCodeERR = "Must be in xxxxx or xxxxx-xxxx format.";
				$isValid = false;
			}
		}
		
		$phoneNum = clean_input($_POST["phoneNum"]);
		if (empty($phoneNum)) {
			$phoneNumERR = "Phone Number is required";
			$isValid = false;
		} else {
			if (!preg_match("/\d{1,12}/", $phoneNum)) {
				$phoneNumERR = "Must be in xxx-xxx-xxxx format.";
				$isValid = false;
			}
		}
		
		$email = clean_input($_POST["email"]);
		if (empty($email)) {
			$emailERR = "Email is required";
			$isValid = false;
		} else {
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$emailERR = "Invalid email format";
				$isValid = false;
			}
		}
		
		if (isset($_POST["gender"])) {
			$gender = clean_input($_POST["gender"]);
			if (empty($_POST["gender"])) {
				$genderERR = "Gender is required";
				$isValid = false;
			}
		}
		
		if (isset($_POST["maritalStatus"])) {
			$maritalStauts = clean_input($_POST["maritalStatus"]);
			if (empty($_POST["maritalStatus"])) {
				$maritalStatusERR = "Marital Status is required";
				$isValid = false;
			}
		}
		
		$birthday = clean_input($_POST["bday"]);
		if (empty($birthday)) {
			$birthdayERR = "Birthday is required";
			$isValid = false;
		} 
		
		if ($isValid == true){
			header("Location:http://localhost/project3/confirm.php");
		}
}

	function clean_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	function resetForm() {
		$userName = $password = $repPassword = $fName = $lName = $address1 = $address2 = "";
		$city = $state = $zipCode = $phoneNum = $email = $gender = $maritalStatus = $birthday = "";	

		$userNameERR = $passwordERR = $repPasswordERR = $fNameERR = $lNameERR = $address1ERR = $address2ERR = "";
		$cityERR = $stateERR = $zipCodeERR = $phoneNumERR = $emailERR = $genderERR = $maritalStatusERR = $birthdayERR = "";
	}
?>
