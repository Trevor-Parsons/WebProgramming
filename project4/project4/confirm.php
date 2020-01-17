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
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
	
    <body>
		<?php
			include 'selectUData.php';
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
						Thank you for registering! <br>
						User Information: <br> <br>
						<?php
							foreach($assocArray as $key => $value) {
								echo "<br/>$key : $value";
							}
						?>
						<br><br><br><br><br>
						</div>
							<div class="column col-xs-12 col-sm-12 col-md-5">
							</div>
					</div>
				</div>
				
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