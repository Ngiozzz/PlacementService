<?php 
	require_once('Connection.php');
	require_once('registerVetterbutton.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Placement Service</title>
	<link rel="stylesheet" type="text/css" href="registerVettercss.css?1422585377">
</head>
<body>
	<h1>Vetter-Registration</h1>
	<form action="", method="POST">
		<div class="">
			<div class="admin">
				<label class="admin">ID</label><br>
				<input type="text" name="vetID" id="vetID"><br>
			</div>
			
			<div class="admin">
				<label class="admin">Name</label><br>
				<input type="text" name="vetName" id="vetName"><br>
			</div>
			<input type="Submit" name="register" value="Register Vetter" id="register" class="button">
		</div>
	</form>
	<a href="SystemAdministratorsvetters.php">BACK</a>
</body>
</html>