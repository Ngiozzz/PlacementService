<?php 
	require_once('Connection.php');
	require_once('vettersloginButton.php');
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="vetterslogincss.css">
</head>
<body>
	<h1>Log In</h1>
	<form action="", method="POST">
		<div>
			<label class="admin">ID</label>
			<input type="text" name="vetterID" id="vetterID" class="admin"><br>
			
			<br>

			<label class="admin">Name</label>
			<input type="text" name="vetterName" id="vetterName" class="admin"><br>


			<br>

			<input type="Submit" name="logIn" id="logIn" value="Log In" class="admin">
		</div>
	</form>
</body>
</html>