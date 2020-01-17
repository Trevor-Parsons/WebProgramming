function validateForm(){
	if (checkUserName(document.getElementById("userName")) &&
		checkPassword(document.getElementById("password")) &&
		checkRepeatPassword(document.getElementById	("repeatPassword")) &&
		checkFirstName(document.getElementById("firstName")) &&
		checkLastName(document.getElementById("lastName")) &&
		checkAddress(document.getElementById("address")) &&
		checkSecondAddress(document.getElementById("secondAddress")) &&
		checkCity(document.getElementById("city"))&&
		checkZipCode(document.getElementById("zipCode")) &&
		checkPhone(document.getElementById("phone")) &&
		checkEmail(document.getElementById("email"))) {
		alert("Successful Submission!");
		return true;
		}
	else {
		alert("Not all inputs filled out properly!");
		return false;
	}
}

function resetForm(){
		var ele = document.getElementById("userName");
		ele.style.removeProperty('border');
		var pEle = document.getElementById("userNameMsg");
		pEle.innerHTML = "";
		
		ele = document.getElementById("password");
		ele.style.removeProperty('border');
		pEle = document.getElementById("passwordMsg");
		pEle.innerHTML = "";
		
		ele = document.getElementById("repeatPassword");
		ele.style.removeProperty('border');
		pEle = document.getElementById("repeatPasswordMsg");
		pEle.innerHTML = "";
		
		ele = document.getElementById("firstName");
		ele.style.removeProperty('border');
		pEle = document.getElementById("firstNameMsg");
		pEle.innerHTML = "";
		
		ele = document.getElementById("lastName");
		ele.style.removeProperty('border');
		pEle = document.getElementById("lastNameMsg");
		pEle.innerHTML = "";
		
		ele = document.getElementById("address");
		ele.style.removeProperty('border');
		pEle = document.getElementById("addressMsg");
		pEle.innerHTML = "";
		
		ele = document.getElementById("secondAddress");
		ele.style.removeProperty('border');
		pEle = document.getElementById("secondAddressMsg");
		pEle.innerHTML = "";
		
		ele = document.getElementById("city");
		ele.style.removeProperty('border');
		pEle = document.getElementById("cityMsg");
		pEle.innerHTML = "";
		
		ele = document.getElementById("zipCode");
		ele.style.removeProperty('border');
		pEle = document.getElementById("zipCodeMsg");
		pEle.innerHTML = "";
		
		ele = document.getElementById("phone");
		ele.style.removeProperty('border');
		pEle = document.getElementById("phoneMsg");
		pEle.innerHTML = "";
		
		ele = document.getElementById("email");
		ele.style.removeProperty('border');
		pEle = document.getElementById("emailMsg");
		pEle.innerHTML = "";
}

function checkUserName(ele) {
	console.debug("Checking username!");
	
	var userNameEle = 
		document.getElementById("userName");
	
	if (userNameEle) {
		var userNameValue = userNameEle.value;
		console.debug("value: " + userName.value);
		
		console.debug(
			userNameValue.search(
				/.{6}/
			)
		);
		
		var index = userNameValue.search(
				/.{6}/
			);
			
		if (index > -1) {
			var pEle = document.getElementById("userNameMsg");
			if (pEle) { 
				pEle.innerHTML = "Valid username!";
				pEle.classList.add("valid");
				userNameEle.style.borderColor = "Green";
				return true;
			}
		} else {
			var pEle = document.getElementById("userNameMsg");
			if (pEle) { 
				pEle.innerHTML = "Invalid username!";
				pEle.classList.remove("valid");
				pEle.classList.add("invalid");
				userNameEle.style.borderColor = "Red";
				return false;
			}
		}
	}
}

function checkPassword(ele) {
	console.debug("Checking password!");
	
	var passwordEle = 
		document.getElementById("password");
	
	if (passwordEle) {
		var passwordValue = passwordEle.value;
		console.debug("value: " + password.value);
		
		console.debug(
			passwordValue.search(
				/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,50})/
			)
		);
		
		var index = passwordValue.search(
				/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,50})/
			);
			
		if (index > -1) {
			var pEle = document.getElementById("passwordMsg");
			if (pEle) { 
				pEle.innerHTML = "Valid password!";
				pEle.classList.add("valid");
				passwordEle.style.borderColor = "Green";
				return true;
			}
		} else {
			var pEle = document.getElementById("passwordMsg");
			if (pEle) { 
				pEle.innerHTML = "Invalid password!";
				pEle.classList.remove("valid");
				pEle.classList.add("invalid");
				passwordEle.style.borderColor = "Red";
				return false;
			}
		}
	}
}

function checkRepeatPassword(ele) {
	console.debug("Checking repeated password!");
	
	var repeatPasswordEle = 
		document.getElementById("repeatPassword");
	
	var passwordEle = 
		document.getElementById("password");
	
	if (repeatPasswordEle) {
		var repeatPasswordValue = repeatPasswordEle.value;
		console.debug("value: " + repeatPassword.value);
		
		console.debug(
			repeatPasswordValue.search(
				/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,50})/
			)
		);
		
		var index = repeatPasswordValue.search(
				/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,50})/
			);
		
		if (index > -1) {
			var pEle = document.getElementById("repeatPasswordMsg");
			if (pEle) { 
				pEle.innerHTML = "Valid password!";
				pEle.classList.add("valid");
				repeatPasswordEle.style.borderColor = "Green";
			}
		}			
		else {
			var pEle = document.getElementById("repeatPasswordMsg");
			if (pEle) { 
				pEle.innerHTML = "Invalid password!";
				pEle.classList.remove("valid");
				pEle.classList.add("invalid");
				repeatPasswordEle.style.borderColor = "Red";
				return false;
			}
		}

		if (repeatPasswordEle.value != passwordEle.value){
			var pEle = document.getElementById("repeatPasswordMsg");
			if (pEle) {
				pEle.innerHTML = "Passwords must match!";
				pEle.classList.remove("valid");
				pEle.classList.add("invalid");
				repeatPasswordEle.style.borderColor = "Red";
				return false;
			}
		}
		else {
			var pEle = document.getElementById("repeatPasswordMsg");
			if (pEle) { 
				pEle.innerHTML = "Valid password!";
				pEle.classList.add("valid");
				repeatPasswordEle.style.borderColor = "Green";
				return true;
				}
			}
		}		
	
}

function checkFirstName(ele) {
	console.debug("Checking First Name!");
	
	var firstNameEle = 
		document.getElementById("firstName");
	
	if (firstNameEle) {
		var firstNameValue = firstNameEle.value;
		console.debug("value: " + firstName.value);
		
		console.debug(
			firstNameValue.search(
				/.{1,50}/
			)
		);
		
		var index = firstNameValue.search(
				/.{1,50}/
			);
			
		if (index > -1) {
			var pEle = document.getElementById("firstNameMsg");
			if (pEle) { 
				pEle.innerHTML = "Valid First Name!";
				pEle.classList.add("valid");
				firstNameEle.style.borderColor = "Green";
				return true;
			}
		} else {
			var pEle = document.getElementById("firstNameMsg");
			if (pEle) { 
				pEle.innerHTML = "Invalid First Name!";
				pEle.classList.remove("valid");
				pEle.classList.add("invalid");
				firstNameEle.style.borderColor = "Red";
				return false;
			}
		}
	}
}

function checkLastName(ele) {
	console.debug("Checking Last Name!");
	
	var lastNameEle = 
		document.getElementById("lastName");
	
	if (lastNameEle) {
		var lastNameValue = lastNameEle.value;
		console.debug("value: " + lastName.value);
		
		console.debug(
			lastNameValue.search(
				/.{1,50}/
			)
		);
		
		var index = lastNameValue.search(
				/.{1,50}/
			);
			
		if (index > -1) {
			var pEle = document.getElementById("lastNameMsg");
			if (pEle) { 
				pEle.innerHTML = "Valid Last Name!";
				pEle.classList.add("valid");
				lastNameEle.style.borderColor = "Green";
				return true;
			}
		} else {
			var pEle = document.getElementById("lastNameMsg");
			if (pEle) { 
				pEle.innerHTML = "Invalid Last Name!";
				pEle.classList.remove("valid");
				pEle.classList.add("invalid");
				lastNameEle.style.borderColor = "Red";
				return false;
			}
		}
	}
}

function checkAddress(ele) {
	console.debug("Checking Address!");
	
	var addressEle = 
		document.getElementById("address");
	
	if (addressEle) {
		var addressValue = addressEle.value;
		console.debug("value: " + address.value);
		
		console.debug(
			addressValue.search(
				/.{1,100}/
			)
		);
		
		var index = addressValue.search(
				/.{1,100}/
			);
			
		if (index > -1) {
			var pEle = document.getElementById("addressMsg");
			if (pEle) { 
				pEle.innerHTML = "Valid Address!";
				pEle.classList.add("valid");
				addressEle.style.borderColor = "Green";
				return true;
			}
		} else {
			var pEle = document.getElementById("addressMsg");
			if (pEle) { 
				pEle.innerHTML = "Invalid Address!";
				pEle.classList.remove("valid");
				pEle.classList.add("invalid");
				addressEle.style.borderColor = "Red";
				return false;
			}
		}
	}
}

function checkSecondAddress(ele) {
	console.debug("Checking Second Address!");
	
	var secondAddressEle = 
		document.getElementById("secondAddress");
	
	if (secondAddressEle) {
		var secondAddressValue = secondAddressEle.value;
		console.debug("value: " + secondAddress.value);
		
		console.debug(
			secondAddressValue.search(
				/.{1,100}/
			)
		);
		
		var index = secondAddressValue.search(
				/.{1,100}/
			);
			
		if (index > -1) {
			var pEle = document.getElementById("secondAddressMsg");
			if (pEle) { 
				pEle.innerHTML = "Valid Seccond Address!";
				pEle.classList.add("valid");
				secondAddressEle.style.borderColor = "Green";
				return true;
			}
		} else if (secondAddressValue.length != 0) {
			var pEle = document.getElementById("secondAddressMsg");
			if (pEle) { 
				pEle.innerHTML = "Invalid Second Address!";
				pEle.classList.remove("valid");
				pEle.classList.add("invalid");
				secondAddressEle.style.borderColor = "Red";
				return false;
			}
		}
	}
}

function checkCity(ele) {
	console.debug("Checking city!");
	
	var cityEle = 
		document.getElementById("city");
	
	if (cityEle) {
		var cityValue = cityEle.value;
		console.debug("value: " + city.value);
		
		console.debug(
			cityValue.search(
				/.{1,50}/
			)
		);
		
		var index = cityValue.search(
				/.{1,50}/
			);
			
		if (index > -1) {
			var pEle = document.getElementById("cityMsg");
			if (pEle) { 
				pEle.innerHTML = "Valid City!";
				pEle.classList.add("valid");
				cityEle.style.borderColor = "Green";
				return true;
			}
		} else {
			var pEle = document.getElementById("cityMsg");
			if (pEle) { 
				pEle.innerHTML = "Invalid City!";
				pEle.classList.remove("valid");
				pEle.classList.add("invalid");
				cityEle.style.borderColor = "Red";
				return false;
			}
		}
	}
}

function checkZipCode(ele) {
	console.debug("Checking Zip Code!");
	
	var zipCodeEle = 
		document.getElementById("zipCode");
	
	if (zipCodeEle) {
		var zipCodeValue = zipCodeEle.value;
		console.debug("value: " + zipCode.value);
		
		console.debug(
			zipCodeValue.search(
				/(^\d{5}$)|(^\d{9})/
			)
		);
		
		var index = zipCodeValue.search(
				/(^\d{5}$)|(^\d{9})/
			);
		
		if (zipCodeValue.length > 8){
                ele.value = ele.value.slice(0, 5)+"-"+ele.value.slice(5);
            }
		
		if (index > -1) {
			var pEle = document.getElementById("zipCodeMsg");
			if (pEle) { 
				pEle.innerHTML = "Valid Zip Code!";
				pEle.classList.add("valid");
				zipCodeEle.style.borderColor = "Green";
				return true;
			}
		} else {
			var pEle = document.getElementById("zipCodeMsg");
			if (pEle) { 
				pEle.innerHTML = "Invalid Zip Code!";
				pEle.classList.remove("valid");
				pEle.classList.add("invalid");
				zipCodeEle.style.borderColor = "Red";
				return false;
			}
		}
	}
}

function checkPhone(ele) {
	console.debug("Checking Phone Number!");
	
	var phoneEle = 
		document.getElementById("phone");
	
	if (phoneEle) {
		var phoneValue = phoneEle.value;
		console.debug("value: " + phone.value);
		
		console.debug(
			phoneValue.search(
				/\d{1,12}/
			)
		);
		
		var index = phoneValue.search(
				/\d{1,12}/
			);
		
		if (phoneValue.length > 3){
                ele.value = ele.value.slice(0, 3)+"-"+ele.value.slice(3, 6)+"-"+ele.value.slice(6);
            }
		
		if (index > -1) {
			var pEle = document.getElementById("phoneMsg");
			if (pEle) { 
				pEle.innerHTML = "Valid Phone Number!";
				pEle.classList.add("valid");
				phoneEle.style.borderColor = "Green";
				return true;
			}
		} else {
			var pEle = document.getElementById("phoneMsg");
			if (pEle) { 
				pEle.innerHTML = "Invalid Phone Number!";
				pEle.classList.remove("valid");
				pEle.classList.add("invalid");
				phoneEle.style.borderColor = "Red";
				return false;
			}
		}
	}
}

function checkEmail(ele) {
	var emailEle=document.getElementById("email");
	
	if (emailEle) {
		var emailValue = emailEle.value;
		
		var index = emailValue.search(
				/\w+@\w+\.\w+/
		);
			
		if (index > -1) {
			var pEle = document.getElementById("emailMsg");
			if (pEle) { 
				pEle.innerHTML = "Valid email!";
				pEle.classList.add("valid");
				emailEle.style.borderColor = "Green";
				return true;
			}
		} else {
			var pEle = document.getElementById("emailMsg");
			if (pEle) { 
				pEle.innerHTML = "Invalid email!";
				pEle.classList.remove("valid");
				pEle.classList.add("invalid");
				emailEle.style.borderColor = "Red";
				return false;
			}
		}
	}
}