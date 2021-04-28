<?php 
	require_once('Connection.php');
	require_once('SystemAdministratorsLogInButton.php');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="SystemAdministratorsLogIncss.css">
</head>
<body>
	<h1>Log In - System Administrators</h1>
	<form action="", method="POST">
		<div>
			<label class="admin">ID</label>
			<input type="text" name="adminID" id="adminID" class="admin"><br>
			
			<br>

			<label class="admin">Name</label>
			<input type="text" name="adminName" id="adminName" class="admin"><br>


			<br>

			<input type="Submit" name="logIn" id="logIn" value="Log In" class="admin">
		</div>
	</form>
</body>
</html>