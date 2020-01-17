<!DOCTYPE html>
<?php
	include 'dbInfo.php';
?>
<html lang="en">
    <head>
		<title> Trevor's Page </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="CSS/project1.css">
		<script type="text/javascript" src="./JS/proj.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>
	
    <body>
	<?php
		include 'validation.php';
	?>
		<div class="container-fluid">
			<div class="row content">
				<div class="header col-xs-12 col-sm-12 col-md-12">
					<h1>eSports Update</h1>
					<p>Infomation on the Latest Events</p>
				</div>
			
				<div class="sidenav col-xs-12 col-sm-2 col-md-2">
					<a href="./project4.html">Home</a> <br>
					<a href="./registration.php">Registration</a> <br>
					<a href="./animations.html">Animations</a>	<br>
				</div>
	
				<div class="col-xs-12 col-sm-10 col-md-10"> 
					<div class="row">
						<div class="column col-xs-12 col-sm-12 col-md-5">
							<form id="register" method="POST" onsubmit="return validateForm();" onreset="resetForm();" 
								  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
								  
								User Name: <br> 
								<input type="text" id="userName" name="uName" maxlength="50" required onblur="checkUserName(this);" value="<?php echo $userName;?>">
								<span class="error">* <?php echo $userNameERR;?></span> <br>
								<p style="display:inline" id="userNameMsg"></p> <br>
								
								Password: <br> 
								<input type="text" id="password" name="pWord"  maxlength="50" required onblur="checkPassword(this);" value="<?php echo $password;?>">
								<span class="error">* <?php echo $passwordERR;?></span> <br>
								<p style="display:inline" id="passwordMsg"></p> <br>
								
								Repeat Password: <br> 
								<input type="text" id="repeatPassword" name="repPWord" maxlength="50" required onblur="checkRepeatPassword(this);" value="<?php echo $repPassword;?>">
								<span class="error">* <?php echo $repPasswordERR;?></span> <br>
								<p style="display:inline" id="repeatPasswordMsg"></p> <br>
								
								First Name: <br> 
								<input type="text" id="firstName" name="fName" maxlength="50" required onblur="checkFirstName(this);" value="<?php echo $fName;?>">
								<span class="error">* <?php echo $fNameERR;?></span> <br>		
								<p style="display:inline" id="firstNameMsg"></p> <br>
								
								Last Name: <br> 
								<input type="text" id="lastName" name="lName" maxlength="50" required onblur="checkLastName(this);" value="<?php echo $lName;?>">
								<span class="error">* <?php echo $lNameERR;?></span> <br>
								<p style="display:inline" id="lastNameMsg"></p> <br>
								
								Address Line 1: <br> 
								<input type="text" id="address" name="add" maxlength="100" required onblur="checkAddress(this);" value="<?php echo $address1;?>"> 
								<span class="error">* <?php echo $address1ERR;?></span> <br>
								<p style="display:inline" id="addressMsg"></p> <br>
								
								Address Line 2: <br> 
								<input type="text" id="secondAddress" name="secondAdd" title="optional" maxlength="100" onblur="checkSecondAddress(this);" value="<?php echo $address2;?>">
								<span class="error"><?php echo $address2ERR;?></span><br>
								<p style="display:inline" id="secondAddressMsg"></p> <br>
								
								City: <br> 
								<input type="text" id="city" name="city" maxlength="50" required onblur="checkCity(this);" value="<?php echo $city;?>">
								<span class="error">* <?php echo $cityERR;?></span>
								<p style="display:inline" id="cityMsg"></p>
						</div>
							<div class="column col-xs-12 col-sm-12 col-md-5">
							
								State: <br> 
								<select id="state" name="state" maxlength="52" required>
									<option value="">Please select</option>
									<option value="AL">Alabama</option>
									<option value="AK">Alaska</option>
									<option value="AZ">Arizona</option>
									<option value="AR">Arkansas</option>
									<option value="CA">California</option>
									<option value="CO">Colorado</option>
									<option value="CT">Connecticut</option>
									<option value="DE">Delaware</option>
									<option value="DC">District Of Columbia</option>
									<option value="FL">Florida</option>
									<option value="GA">Georgia</option>
									<option value="HI">Hawaii</option>
									<option value="Id">Idaho</option>
									<option value="IL">Illinois</option>
									<option value="IN">Indiana</option>
									<option value="IA">Iowa</option>
									<option value="KS">Kansas</option>
									<option value="KY">Kentucky</option>
									<option value="LA">Louisiana</option>
									<option value="ME">Maine</option>
									<option value="MD">Maryland</option>
									<option value="MA">Massachusetts</option>
									<option value="MI">Michigan</option>
									<option value="MN">Minnesota</option>
									<option value="MS">Mississippi</option>
									<option value="MO">Missouri</option>
									<option value="MT">Montana</option>
									<option value="NE">Nebraska</option>
									<option value="NV">Nevada</option>
									<option value="NH">New Hampshire</option>
									<option value="NJ">New Jersey</option>
									<option value="NM">New Mexico</option>
									<option value="NY">New York</option>
									<option value="NC">North Carolina</option>
									<option value="ND">North Dakota</option>
									<option value="OH">Ohio</option>
									<option value="OK">Oklahoma</option>
									<option value="OR">Oregon</option>
									<option value="PA">Pennsylvania</option>
									<option value="RI">Rhode Island</option>
									<option value="SC">South Carolina</option>
									<option value="SD">South Dakota</option>
									<option value="TN">Tennessee</option>
									<option value="TX">Texas</option>
									<option value="UT">Utah</option>
									<option value="VT">Vermont</option>
									<option value="VA">Virginia</option>
									<option value="WA">Washington</option>
									<option value="WV">West Virginia</option>
									<option value="WI">Wisconsin</option>
									<option value="WY">Wyoming</option>
								</select> 
								<span class="error">* <?php echo $stateERR;?></span> <br> 
								
								Zip Code: <br>
									<input type="text" id="zipCode" name="zip" maxlength="10"required onblur="checkZipCode(this);" value="<?php echo $zipCode;?>">
									<span class="error">* <?php echo $zipCodeERR;?></span> <br>
									<p style="display:inline" id="zipCodeMsg"></p> <br>
									
								Phone Number: <br> 
									<input type="text" id="phone" name="phoneNum" maxlength="12" required onblur="checkPhone(this);" value="<?php echo $phoneNum;?>"> 
									<span class="error">* <?php echo $phoneNumERR;?></span> <br>
									<p style="display:inline" id="phoneMsg"></p> <br>
									
									
								Email: <br> 
									<input type="text" id="email" name="email" placeholder="user@domain.extention" required onblur="checkEmail(this);" value="<?php echo $email;?>">
									<span class="error">* <?php echo $emailERR;?></span> <br>
									<p style="display:inline" id="emailMsg"></p> <br>
									
								Gender: <br>
									<input type="radio" id="male" name="gender" value="male" maxlength="50" required> Male 
									<input type="radio" id="female" name="gender" value="female" maxlength="50" required> Female 
									<input type="radio" id="other" name="gender" value="other" maxlength="50" required> Other 
									<span class="error">* <?php echo $genderERR;?></span> <br>
									
								Marital Status: <br> 
									<input type="radio" id="single" name="maritalStatus" value="Single" maxlength="50" required> Single 
									<input type="radio" id="married" name="maritalStatus" value="Married" maxlength="50" required> Married 
									<span class="error">* <?php echo $maritalStatusERR;?></span> <br> <br>
									
								Date of Birth: <br>
									<input type="date" id="bday" name="bday" value="birthday" required> 
									<span class="error">* <?php echo $birthdayERR;?></span> <br> <br>
									
									<p><span class="error">* required field</span></p>
									<input type="submit" value="Submit"> 
							</div>
							</form>	
					</div>	
				</div>
				
			<?php
				include 'insertVData.php';
			?>
				<div class="footer col-xs-12 col-sm-12 col-md-12">
					<h4>More eSports Information</h4>
					<a href="https://www.google.com" target="_blank">Google</a>
					<a href="https://www.liquipedia.net" target="_blank">Liquipedia</a>
					<a href="https://www.esportsearnings.com/" target="_blank">eSports</a>
				</div>
			</div>
		</div>
    </body>
</html>