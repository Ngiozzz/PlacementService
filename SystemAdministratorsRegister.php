<?php 
	require_once("Connection.php");
	require_once("SystemAdministratorsRegisterButton.php");
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" type="text/css" href="SystemAdministratorsRegistercss.css?1422585377">
 </head>
 <body>
 	<h1>Registration - System Administrators</h1>
 	<form action="" method="POST">
 		<div class="">
 			<div class="admin">
 			<label>ID</label>
 			<input type="text" name="adminID" id="adminID"><br>
 		</div>
 			

 		<div  class="admin">
 			<label">Name</label>
 			<input type="text" name="adminName" id="adminName"><br>

 		</div>

 			<input type="Submit" name="register" id="register" value="Register" class="admin">

 		</div>
 	</form>
 </body>
 </html>